# NOVOCIB.com — SEO & Visibility Improvement Plan

Audit based on full site export (826 files: all page templates, routes.php, redirects.php, sitemap.xml).
Work through this top to bottom — Priority 1 items are quick technical fixes with outsized impact; Priority 4 is longer-term content/authority building.

Check off each `[ ]` as you ship it.

---

## PRIORITY 1 — Technical fixes (do this week)

These are bugs, not opinions — they actively hurt indexing/rankings today.

- [ ] **Fix domain inconsistency (www vs non-www).** `sitemap.xml` lists every URL as `https://novocib.com/...` (no www), while every page's `<link rel="canonical">` uses `https://www.novocib.com/...`. Pick ONE canonical host (recommend keeping `www.novocib.com` since that's what's in your canonicals/OG tags), 301-redirect the other permanently, and regenerate the sitemap to match. Mixed signals like this split ranking authority between two "different" sites in Google's eyes.

- [ ] **Fix the broken canonical on the nucleotide analysis service page.** `app/views/analytical-services/nucleotide-analysis-service.php` has:
  ```
  <link rel="canonical" href="https://www.novocib.com/nucleotide-analysis-service">
  ```
  But `redirects.php` 301-redirects that exact URL to `/analytical-services/nucleotide-analysis-service`. So the canonical tag points to a URL that immediately redirects elsewhere — a self-defeating signal. Change the canonical to:
  ```
  <link rel="canonical" href="https://www.novocib.com/analytical-services/nucleotide-analysis-service">
  ```

- [ ] **Same canonical audit needed site-wide.** Only a handful of pages have a canonical tag at all (`active-purified-enzymes/index.php`, `human-recombinant-impdh.php`, `convenient-assay-kits/index.php`, `hprt-assay-kit.php`, `ampda-assay-kit.php`, `fishmeal-imp-assay-kit.php`, `analytical-services/index.php`). Every indexable page should have a **self-referencing canonical** matching its exact live URL (with `www`, with trailing consistency). Add canonicals to all pages missing one — see full page list in the Appendix below.

- [ ] **Add a real `robots.txt`.** None was found in the export. At minimum:
  ```
  User-agent: *
  Disallow: /app/logic/
  Disallow: /secure/
  Disallow: /card-form
  Sitemap: https://www.novocib.com/sitemap.xml
  ```
  Confirm this is actually live at novocib.com/robots.txt — if it exists on the server but wasn't in this export, just verify it references the correct sitemap URL/host from the point above.

- [ ] **Fix duplicate `<h1>` on the homepage.** `home.php` has two `<h1>` tags (lines 94 and 114: "Reliable solutions for nucleotides assessment" and "Nucleotides and nucleic acids analysis"). Only one `<h1>` per page — keep the stronger, keyword-rich one ("Nucleotides and nucleic acids analysis") as `<h1>` and demote the other to `<h2>` or `<p class="lead">`.

- [ ] **Add missing `<h1>` on key category/hub pages.** These pages currently jump straight to `<h2>` with no `<h1>` at all:
  - `/analytical-services` (index) — top heading is an `<h2>`, should be `<h1>`
  - `/freshness-assay-kits` (index)
  Google uses H1 as a strong on-page relevance signal — hub pages without one are underperforming for their target head terms.

- [ ] **Fix wrong heading text on `/freshness-assay-kits`.** The page's top `<h2>` currently reads **"Active Purified Enzymes"** — a copy-paste leftover from the enzymes page template. This is actively confusing to both users and Google about what the page is about. Replace with something like "Freshness Assay Kits — K-Value Quality Control for Seafood & Meat".

- [ ] **Retire or redirect the thin `products.php` stub.** It's a near-empty page (12 lines, just a banner, no content) that's still routable. If it's not linked/needed, 410/301 it to `/catalog`. Thin, near-duplicate pages dilute crawl budget and can trigger quality-pattern flags across the domain.

- [ ] **Clean up exposed backup/dev files.** `home_backup.php`, `home_old.php`, `base copy.php`, and `analytical-services/backup/` exist inside the deployed app tree. Confirm none of these are web-accessible (test the URLs directly) — if they are, Google can index duplicate/outdated versions of your pages. Move them outside the web root or block via robots.txt.

---

## PRIORITY 2 — On-page metadata (do this month)

- [ ] **Write a meta description for every page that's missing one.** Currently blank on: `contact-us.php`, `card-form.php`, `nucleotides.php` (Dietary Nucleotides — a core product page!), `products.php`, `bacterial-luciferase.php` has one but several enzyme pages don't (`human-recombinant-hgprt.php`, `impdh-recombinant-enzyme.php`, `human-ump-cmp-kinase.php`, `bacterial-recombinant-impdh.php`, `human-recombinant-pnp.php` has one, `dck-...` has one — double check the rest against the Appendix list). A missing description means Google auto-generates a snippet from page text, usually worse than one you'd write, and you lose control of your SERP click-through pitch.

- [ ] **Shorten oversized meta descriptions.** Several run 300–500+ characters (e.g. `prpp-s-assay-kit.php`, `FMN-Reductase.php`, `adk-phosphorylation-assay-kit.php`). Google truncates around 155–160 characters on desktop. Trim each to one punchy sentence with the primary keyword near the front, then a call to value ("Ready-to-use, non-radioactive...").

- [ ] **Shorten long `<title>` tags.** Aim for ≤ 60 characters so they don't get cut off in search results. Current long ones to trim:
  - "ITP-ase Assay Kit - Non-Radioactive ITP Pyrophosphatase Activity Measurement | NOVOCIB" (89 chars)
  - "Seafood Quality Control - Seafood Freshness Assay Kit - Fish Freshness Assay Kit - K value" (92 chars, also keyword-stuffed — pick ONE primary phrase)
  - "HPRT Assay Kit | Hypoxanthine-Guanine Phosphoribosyltransferase Assay" (71 chars)
  - "PRECICE® AMP Deaminase Assay Kit... " variants — keep the registered-trademark symbol but move it out of the visible title where possible.

- [ ] **Fix duplicate/near-duplicate title patterns.** `freshness-assay-kits/freshness-assay-kit.php` and `freshness-assay-kits/index.php` and `dietary-nucleotides-assay-kits/fish-freshness-assay-kit.php` all target near-identical "freshness/fish/K-value/seafood" phrasing. Map out ONE primary keyword target per URL (see Priority 3 keyword map) so these pages stop competing with each other (keyword cannibalization = weaker rankings for all of them).

- [ ] **Add Open Graph / Twitter tags to every product & service page**, not just the ones that currently have them. Right now only a few pages (analytical-services pages, active-purified-enzymes index) have OG/Twitter tags — most kit and enzyme pages don't, which hurts link-preview quality when shared (LinkedIn, email, etc.) — a real factor in B2B lead gen since your buyers likely share links internally before purchasing.

- [ ] **Expand `Service`/`Product` schema (JSON-LD) to every kit and enzyme page.** Only the nucleotide analysis service pages currently have `Service` schema with `Offer`/price/SKU. Your assay kits (HPRT, AMPDA, ITP-ase, PRPP-S, ADK, etc.) and enzymes should get the same treatment — `Product` schema with `offers`, `sku`, `priceCurrency`. This is what makes you eligible for price/availability rich snippets, which directly lift click-through for commercial-intent searches like "HPRT assay kit price."

- [ ] **Add `BreadcrumbList` schema + visible breadcrumbs to every page.** Only 3 pages currently have it. Breadcrumbs help both users and Google understand your site hierarchy (Home > Analytical Services > Nucleotide Analysis) and often display directly in search results instead of a raw URL — small CTR win, applies everywhere.

---

## PRIORITY 3 — Content strategy tied to sales (biggest revenue lever)

Your core commercial pages are the **HPLC analytical services** (nucleotide/nucleic acid analysis, cellular nucleotides, yeast extract analysis) and the **assay kits**. Here's how to make them convert better and rank for buyer-intent queries.

- [ ] **Build a clear keyword-to-URL map before writing anything else.** Right now several pages compete for overlapping terms ("nucleotide analysis," "TPAN," "freshness assay," "K value"). For each hub (Analytical Services, Assay Kits, Enzymes) list the 1 primary + 2-3 secondary keyword phrases per page so content doesn't cannibalize itself. I can build this keyword map with you as a next step if useful.

- [ ] **Add pricing/quote-request CTAs higher on every service page**, not just at the bottom. Your nucleotide analysis service page does this well (pricing table near top). Replicate that pattern — SKU, price, and an "Inquiry" button above the fold — across every assay kit and enzyme page, since B2B life-science buyers often skim straight to price/spec before reading anything else.

- [ ] **Add "Applications" / "Who this is for" sections to every product page**, framed by industry (pharma R&D, aquaculture/feed, food QC, academic research). Search intent for a term like "IMPDH inhibitor assay" differs completely from "fishmeal freshness testing" — but your buyer personas overlap several product lines. Cross-selling copy ("Also interested in cellular nucleotide profiling? See our HPLC service →") on every product page will lift average order value.

- [ ] **Turn `news.php` into an actual content/blog hub.** It currently has almost no real content. A steady stream of technical articles (method comparisons, application notes, "how to interpret a K-value report," case studies citing your own published references) is one of the highest-ROI things you can do for a B2B scientific supplier — it's what ranks for long-tail, high-intent research queries and builds the topical authority Google rewards your product pages with. You already have strong reference-citation habits on the nucleotide analysis page (PubMed citations) — extend that pattern into blog content.

- [ ] **Add customer proof / trust signals.** No testimonials, case studies, or "used by" logos found in the templates. For lab equipment/services, social proof (published papers citing your kits, institution logos, review counts) meaningfully affects conversion — consider a "Cited in X peer-reviewed publications" or similar trust bar on the homepage and service pages.

- [ ] **Internal linking pass.** Cross-link related pages contextually (e.g., the Fish Freshness Assay Kit page should link to the Fishmeal IMP Assay Kit page and vice versa; enzyme pages should link to the assay kits that use them, e.g. Human Recombinant IMPDH ↔ ITP-ase kit ↔ HPRT kit). This spreads link equity and keeps visitors moving toward a purchase instead of bouncing.

---

## PRIORITY 4 — Performance & images (page speed = ranking + conversion factor)

- [ ] **Compress/convert your largest images.** 25 images are over 500KB; two are ~3MB and ~1.7MB (`analisis2.jpg`, `analisis.jpg` — duplicated in both `app/img/` and `app/static/img/`, wasting more space). Convert to WebP/AVIF and target <200KB per hero image. Only 22 of 510 images site-wide are currently WebP.
- [ ] **De-duplicate the image library.** Several files exist identically in both `app/img/` and `app/static/img/` (e.g. `analisis.jpg`, `glycogen.png`, `city.jpg`, `metabolic-bible.jpg`, `dna-card.png`, `cells-blue.jpg`). Confirm which path is actually served and remove the redundant copy — likely a leftover from a migration.
- [ ] **Add `alt` text to all images.** 10 `<img>` tags have no `alt` attribute at all, and 21 more have an empty `alt=""`. Every product/lab photo should have descriptive alt text (accessibility requirement + image-search SEO channel you're currently leaving on the table, especially for HPLC chromatogram/equipment photos).
- [ ] **Add `loading="lazy"` to below-the-fold images** if not already applied site-wide, and `width`/`height` attributes to prevent layout shift (Core Web Vitals — a direct Google ranking factor).

---

## Quick-reference: pages with NO meta description (fix first)

- `/contact-us`
- `/dietary-nucleotides` (`nucleotides.php`) — **high priority, this is a core product page**
- `/products`
- `/active-purified-enzymes/human-recombinant-hgprt`
- `/active-purified-enzymes/impdh-recombinant-enzyme`
- `/active-purified-enzymes/human-ump-cmp-kinase`
- `/convenient-assay-kits/bacterial-recombinant-impdh`
- `/hplc-analysis-of-bases-nucleosides`
- `/freshness-assay-kits/fish-freshness`
- `/freshness-assay-kits/how-it-works`

## Quick-reference: pages with NO canonical tag (fix all — full page list)

Every page in `app/views/**` except the ~7 already listed in Priority 1. Simplest fix: add a canonical block to your shared `page_base.php` / `template.php` header that auto-generates `https://www.novocib.com{current_path}` unless a page explicitly overrides it — this guarantees no page ships without one going forward, instead of manually patching each file.

---

## Suggested order of operations

1. Priority 1 (technical) — 1 week, mostly template/config changes, no content writing needed.
2. Quick-reference lists above — meta descriptions + canonicals, batchable in a day or two once you have a template pattern.
3. Priority 2 (schema, titles, OG tags) — roll into the same template-level fix as canonicals where possible.
4. Priority 3 (content/conversion) — ongoing, highest revenue impact, start with your top 5 revenue-generating product/service pages first.
5. Priority 4 (images/performance) — can run in parallel, mostly a one-time batch job (compress + rename + update paths).

Let me know which section you want to tackle first and I can generate the actual code/copy for it (like I did for the analytical-services pages).