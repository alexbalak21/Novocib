# NOVOCIB — Laravel Multi-Module Platform Plan

Target: rebuild the current PHP site (routes.php-based routing, flat file views, MySQL product/article tables)
into a modular Laravel application with a CMS, back-office, and document generation.

**Stack version, confirmed:**
- **Laravel 13** (released March 17, 2026) — requires **PHP 8.3+**. Minimal breaking changes from 12, so the framework itself is a low-risk choice.
- **Statamic 6.5+** — official Laravel 13 support from day one.
- **`nwidart/laravel-modules` v13** — supports Laravel 13.
- **Filament 5.x** with **`savannabits/filament-modules`** (v5.x) for the module↔Filament integration — supports Laravel 11/12/13 and PHP 8.3.

All core packages in this plan are confirmed compatible — no version-mismatch risk on day one.

**Worth noting for later:** Laravel 13 ships a first-party **AI SDK** (`laravel/ai` — unified provider-agnostic API for text generation, embeddings, tool-calling agents, image/audio generation) and **native semantic/vector search** (via `pgvector` if you're on PostgreSQL). This is directly relevant to the "make the site AI-agent readable" work from earlier — once your Catalog/CMS content lives in structured Eloquent models, you could use `Str::toEmbeddings()` to power a real semantic search over your product catalog (e.g. a customer or an AI agent asking "kit for measuring seafood spoilage" finds the Freshness Assay Kit even without exact keyword match). Not a Phase 1 priority, but worth keeping in mind when choosing your database (PostgreSQL over MySQL) if you want this option open later.

---

## 1. High-level architecture

**Core framework:** Laravel 11+
**Modularity:** [`nwidart/laravel-modules`](https://nwidart.com/laravel-modules) — each module below becomes a self-contained
Laravel package under `Modules/` with its own routes, controllers, models, migrations, views, and config.
This keeps CMS/Shop/Invoicing/Backoffice decoupled so you can version, test, and (later) even extract them individually.

**Proposed modules:**

```
Modules/
├── Catalog/          -> products, services, kits, enzymes, prices, SKUs
├── CMS/               -> Statamic-driven page/content editing (see §2)
├── Backoffice/        -> admin panel: pricing, orders, users, permissions (see §3)
├── Documents/          -> invoice/quote generation (see §4)
├── Inquiry/            -> the current /inquiry request-a-quote flow -> feeds Backoffice orders
├── Customer/           -> user accounts, auth, order history, saved addresses
└── Core/               -> shared kernel: enums, base models/traits, media library, activity log
```

Each module talks to the others through **Laravel events/service contracts**, not direct model reaches, e.g.:
- `Inquiry` module fires `InquirySubmitted` → `Backoffice` listens and creates a draft Order.
- `Backoffice` fires `OrderConfirmed` → `Documents` listens and generates an invoice/quote.
- `Catalog` is the single source of truth for price/SKU; `CMS`, `Documents`, and `Backoffice` all read from it, never duplicate it.

This solves the exact problem the SEO audit flagged: right now price/SKU lives in 3 places (page copy, JSON-LD, query-string links) and can drift out of sync. In the new architecture there's **one** `products` table and everything else references it.

---

## 2. CMS Module — Statamic

Statamic is a strong fit here: it's Laravel-native (installs as a package, not a separate app), file- or database-driven, and its **Bard** field type is exactly the "editable blocks" behavior you asked for.

**Why Statamic over building a custom block editor:**
- Bard fieldtype = a real block/rich-text editor (like Notion-style blocks) your team can use to edit page sections without touching code.
- Statamic's **Live Preview** lets marketing/sales staff see edits before publishing.
- Collections + Blueprints map naturally onto your existing content types: `Product Pages`, `Service Pages`, `News/Blog Articles`, `FAQ entries` — each can have its own field schema (price, SKU, spec table, FAQ repeater) instead of one generic "page" blob.
- Ships with a clean admin UI (Statamic CP) so non-developers get a real editing experience, not raw Blade files.

**Recommended Statamic structure for your content:**
| Collection | Maps to | Key fields |
|---|---|---|
| `services` | Analytical Services pages | title, intro (Bard), pricing table (repeater: SKU/name/price), FAQ (repeater), related products |
| `products` | Assay kits & enzymes | title, spec block (repeater), Bard description, pricing tiers, images, related products |
| `pages` | Generic pages (Contact, About) | Bard blocks only |
| `articles` | News/blog | title, Bard body, category, published_at |

Each entry's **Bard field is literally the "editable blocks" you asked for** — paragraphs, images, tables, embeds, CTAs, all rearrangeable in the CP without a deploy.

**Important:** keep pricing/SKU as *structured fields* (repeater), not free text inside Bard — that's what lets `Catalog` module and JSON-LD schema pull consistent numbers, satisfying the "AI agent readability" and schema.org goals from earlier.

**Alternative if you want 100% open-source / no Statamic license cost:** Filament + a custom block-builder field (Filament has a "Builder" field type that does something similar). I'd only recommend this if licensing cost is a blocker — Statamic's authoring UX for non-technical editors is meaningfully better out of the box.

---

## 3. Back-Office Module — Filament

Use **Filament** (Laravel-native admin panel builder, free/open-source) for the operational back-office — this is a different audience (your ops/sales team) than the CMS (marketing/content), so keeping them as separate panels avoids UI clutter.

**Filament resources to build:**
- **ProductResource** — CRUD for kits/enzymes/services: SKU, name, price, currency, stock/availability status, category, linked CMS entry.
- **OrderResource** — order list, status pipeline (`inquiry received → quoted → confirmed → invoiced → paid → shipped`), linked customer, linked documents.
- **UserResource** — customer accounts + staff accounts, role assignment (see permissions below).
- **InquiryResource** — read the raw form submissions from the `Inquiry` module, convert to Order with one click.
- **Dashboard widgets** — revenue by product line, open quotes awaiting response, recent inquiries (directly addresses your "improve sales" goal — gives your team visibility into the funnel that currently doesn't exist at all in the static PHP site).

**Permissions:** use `spatie/laravel-permission` for roles (`admin`, `sales`, `accounting`, `content-editor`) so e.g. content editors only see Statamic CP, sales only sees Orders/Inquiries, accounting only sees Documents/pricing.

---

## 4. Documents Module — Invoices & Quotes

Recommend **`laravel-invoices` (LaravelDaily) or `spatie/laravel-pdf`** for generation, wired into your own `Documents` module rather than a monolithic third-party invoicing SaaS — since you need it tied tightly to `Catalog` pricing and `Backoffice` order state.

**Structure:**
- `Document` model: polymorphic — a document is either a `Quote` or an `Invoice`, both reference an `Order` and a snapshot of line items (never live-reference `Product` prices, so historical documents stay accurate even if you later change a price).
- PDF rendering via `spatie/laravel-pdf` (wraps Browsershot/Chromium) so you can design the invoice/quote layout as a Blade view — much easier to keep it on-brand than fighting a PDF library's API directly.
- **Quote → Invoice conversion**: a quote accepted by the customer (via a signed URL / portal, or manually by sales) converts to an invoice with one click in Filament, carrying over line items.
- **Numbering**: sequential, gapless invoice numbers (legal requirement in France/EU) — use a dedicated `document_number` sequence table with DB-level locking, not just `id`.
- **VAT handling**: since you're an EU (French) supplier likely invoicing internationally, bake in VAT/reverse-charge logic (EU B2B reverse charge vs domestic VAT vs non-EU export) at the `Documents` module level — this is a compliance requirement, not optional.
- Emails: attach generated PDF automatically on quote/invoice creation via a Mailable, using Laravel's queued jobs so PDF generation doesn't block the request.

---

## 5. Data model (core tables, simplified)

```
products            id, sku, name, slug, category_id, price, currency, active, cms_entry_id
product_categories   id, name, slug (analytical-services / assay-kits / enzymes / freshness-kits)
customers            id, user_id (nullable), company_name, vat_number, billing_address, country
orders               id, customer_id, status, source (inquiry|manual), total, currency
order_items          id, order_id, product_id, sku_snapshot, name_snapshot, price_snapshot, qty
documents             id, order_id, type (quote|invoice), number, pdf_path, issued_at, due_at, status
inquiries             id, ref, product_name, message, customer_email, converted_order_id (nullable)
users                 id, name, email, role (staff) OR customer flag
```

Note the **snapshot fields** on `order_items` — this is what makes invoices/quotes legally and practically correct even after you update a product's price later.

---

## 6. Migration path from the current PHP site

You don't need a big-bang rewrite. Suggested phased approach, reusing what's already good:

**Phase 0 — Foundation**
- Scaffold Laravel + `nwidart/laravel-modules`, install Statamic and Filament, set up CI/staging.
- Import existing `products_data.sql` / `articles_data.sql` (from the export you gave me) into the new `products`/`articles` schema via a one-off Artisan import command.

**Phase 1 — Catalog + CMS (content parity)**
- Recreate every current route from `routes.php` as either a Statamic collection entry (content pages) or a `Catalog` product record (kits/enzymes/services).
- Carry over the metadata work we already did: canonical URLs (all `www.novocib.com`), meta descriptions, `Product`/`Service`/`FAQPage` JSON-LD — but now generated from structured fields instead of hand-written per-page HTML, so it can never drift out of sync again.
- 301-redirect map from old URLs → new (you already have `redirects.php` as a starting reference).

**Phase 2 — Inquiry → Backoffice pipeline**
- Rebuild `/inquiry` as a proper form tied to `Inquiry` module → auto-creates draft `Order` in Filament.
- Sales team gets visibility they don't currently have (today it's just an email, no tracking/pipeline).

**Phase 3 — Documents**
- Quote/Invoice generation once Orders are flowing through Backoffice.

**Phase 4 — Customer accounts (optional/later)**
- Self-service order history and quote acceptance portal, if you want customers to log in rather than everything going through sales manually.

---

## 7. Open questions before implementation starts

1. **Statamic license** — Pro tier is required for multi-user CP access (needed since you want multiple staff editing blocks) — confirm budget is fine with that, or fall back to Filament Builder-field approach.
2. **Hosting** — Laravel Forge/Vapor, or your current server? Affects queue/PDF-rendering setup (Browsershot needs Chromium available).
3. **E-commerce or quote-only?** Do you want actual online payment/checkout eventually, or does everything stay quote → manual invoice → offline payment (bank transfer), as it seems to today?
4. **VAT/invoicing compliance** — are you currently using accounting software (QuickBooks, Sage, Pennylane, etc.) that documents need to sync with, or will this Documents module be the sole source?

---

## Suggested next step

Pick one module to scaffold first — I'd recommend **Catalog + Backoffice (Filament)** since it's the foundation everything else (CMS pricing display, Documents line items, Inquiry conversion) depends on. I can generate the actual Laravel module skeleton (migrations, models, Filament resources) once you confirm the open questions above, particularly #1 and #3.