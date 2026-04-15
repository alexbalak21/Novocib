# Novocib Web Application

## Overview

This is a PHP-based web application for Novocib, a biotechnology company. The application serves as the main website, providing information about products, services, and scientific resources, as well as handling customer inquiries and secure data submissions.

---

## Table of Contents
- [Features](#features)
- [Project Structure](#project-structure)
- [Routing & Entry Point](#routing--entry-point)
- [Key Directories](#key-directories)
- [How Routing Works](#how-routing-works)
- [Development & Debugging](#development--debugging)
- [Security](#security)
- [Testing](#testing)
- [Contact](#contact)

---

## Features
- Dynamic routing via `index.php` and `routes.php`
- Legacy and SEO-friendly redirects via `redirects.php`
- Modular MVC-like structure (controllers, models, views, logic)
- Product and service catalog with dedicated views
- Contact and inquiry forms with mail handling
- Secure data submission and storage
- Error logging and custom error pages
- Static assets (CSS, JS, images) organized for maintainability

---

## Project Structure
```
index.php           # Main entry point and router
routes.php          # Route definitions (URL to view/controller)
redirects.php       # Legacy/SEO redirects
robots.txt, sitemap.xml  # SEO files
app/
  components/       # Reusable PHP UI components
  constants/        # App-wide constants
  controllers/      # Controllers for business logic
  css/              # Stylesheets
  db/               # DB connection scripts
  includes/         # Misc includes (debug, etc.)
  internal/         # Internal/admin modules
  js/               # JavaScript files
  lib/              # Third-party libraries
  logic/            # Core business logic (mail, db, etc.)
  models/           # Data models (Product, Customer, etc.)
  repository/       # Data access layer
  security/         # Encryption, secure logic
  static/           # Static assets (images, etc.)
  templates/        # Email and page templates
  tests/            # Test scripts
  utils/            # Utility functions
  views/            # Page views (PHP)
```

---

## Routing & Entry Point
- All requests are routed through [index.php](../../index.php).
- URL paths are mapped to views/controllers in [routes.php](../../routes.php).
- Legacy/SEO redirects are handled in [redirects.php](../../redirects.php).
- If a route is not found, a custom 404 page is shown.

---

## Key Directories
- **components/**: UI widgets (Header, Footer, Nav, etc.)
- **controllers/**: Handle form submissions, secure info, etc.
- **logic/**: Core business logic (mail, db operations, etc.)
- **models/**: Data models (Card, Company, Customer, Product)
- **repository/**: Data access (CardRepository, etc.)
- **views/**: Main page templates (home, contact, products, etc.)
- **templates/**: Email and page templates
- **css/**, **js/**: Static assets
- **security/**: Encryption and secure logic

---

## How Routing Works
- The main router ([index.php](../../index.php)) loads [routes.php](../../routes.php) and [redirects.php](../../redirects.php).
- If a request matches a redirect, it is redirected (see [redirects.php](../../redirects.php)).
- If a request matches a route, the corresponding PHP file is included.
- If not found, a 404 error page is shown.

---

## Redirects (`redirects.php`)

The `redirects.php` file manages legacy and SEO-friendly redirects. It maps old or alternative URLs to the current canonical routes, ensuring users and search engines are directed to the correct content.

**How it works:**
- The `$redirects` associative array defines mappings from old URLs to new ones.
- On each request, if the current path matches a key in `$redirects`, a `Location` header is sent and the script exits.
- This is included at the top of `index.php` for early execution.

**Example structure:**
```php
$redirects = [
  "/Home.html" => "/",
  "/Purified_Active_Enzymes.html" => "/active-purified-enzymes",
  // ... more redirects ...
];

$requestPath = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
if (array_key_exists($requestPath, $redirects)) {
  header("Location: " . $redirects[$requestPath]);
  exit();
}
```

**Adding a new redirect:**
1. Open `redirects.php`.
2. Add a new entry to the `$redirects` array:
   ```php
   "/old-url" => "/new-url",
   ```
3. Save the file. The redirect will take effect immediately.

**Notes:**
- Use for legacy URLs, SEO, or to handle renamed/moved pages.
- Avoid redirect loops (ensure the target is not also a source).

---

## Development & Debugging
- Error logs are written to `/logs/php_error.log`.
- Debug mode can be toggled in [index.php](../../index.php) via `DEBUG_MODE`.
- Use the `tests/` directory for test scripts and local testing.

---

## Security
- Sensitive operations (card info, secure login) are handled in `controllers/` and `security/`.
- Encryption logic is in `security/`.
- Never expose sensitive files or credentials in the web root.

---

## Testing
- Test scripts are in `app/tests/` and `/tests/`.
- Use these for local validation of business logic and data access.

---

## Contact
For questions or contributions, contact the Novocib development team.
