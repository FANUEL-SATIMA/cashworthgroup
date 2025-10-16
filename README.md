# CashWorth Group Website

A modern, responsive website for CashWorth Group using PHP includes, Bootstrap, and custom CSS.

## Quick start (PHP)

- Ensure PHP is installed (`php -v`).
- From the project root, run:
  - Windows PowerShell:
    - `php -S 127.0.0.1:8000 -t .`
  - Then open `http://127.0.0.1:8000/index.php` in your browser.

## Pages

- `index.php` (home)
- `about.php` (About, Mission, Vision, Values)
- `divisions.php`
- `news.php`
- `contact.php`

Shared layout is in `includes/header.php` and `includes/footer.php`.

## Customize

- Replace placeholder images in `assets/img/`:
  - `logo.svg`, `logo-mark.svg`, `mission.svg`, `vision.svg` (optional favicon)
- Update contact details in `contact.php` and `index.php` contact section.
- Edit colors and typography in `assets/css/styles.css` under the `:root` variables.

## Features

- Bootstrap 5 layout with custom theme variables
- Mobile navigation, smooth scroll, dynamic footer year
- Accessible semantics and form validation on `contact.php`

## Deployment

- Upload to any PHP-capable host, or run behind Apache/Nginx with PHP.

## License

© CashWorth Group. All rights reserved.
