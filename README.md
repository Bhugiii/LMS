# LMS (PHP)

A simple Library Management System (LMS) built with PHP, HTML/CSS, JavaScript, and MySQL.

## Quick start (local)

1. Create a MySQL database named `libraryms`.
2. Import `libraryms.sql` into that database.
3. Configure DB connection via environment variables (recommended):

- `DB_HOST` (default: `localhost`)
- `DB_USER` (default: `root`)
- `DB_PASS` (default: empty)
- `DB_NAME` (default: `libraryms`)

The connection is initialized in `config.php`.

## Notes

- This repository includes `libraryms.sql` as the initial schema/data export.
- If you deploy to a hosted environment, set environment variables in your hosting panel and avoid committing real credentials.
