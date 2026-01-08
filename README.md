# LMS (Library Management System)

A simple **Library Management System** built with **PHP + MySQL** and a front-end layer using **HTML/CSS/JavaScript**.

>This is a learning/project-style LMS with separate pages for signup/login, adding books, checking out books, notifications, and donations.

## ✨ Features

- **Home page** (`home.php`) with slideshow and navigation
- **User signup** (`SignUp.php` → `insertsignup.php`)
- **Login form** (`login.php` → `insertlogin.php`)
- **Add books** (`books.php` → `insertbooks.php`)
- **Book checkout form** (`bookcheck.php` → `insertbookcheck.php`)
- **Cash donation form** (`Donations.php` → `insertdon.php`)
- **Notification UI** (`notification.php`)
- **Terms & Conditions** page (`terms and conditions.php`)

## 🧰 Tech stack

- PHP (mysqli)
- MySQL / MariaDB
- HTML, CSS, JavaScript

## 📁 Project structure

```text
.
├─ CSS/                 # page styles
├─ JS/                  # page scripts
├─ images/              # assets
├─ *.php                # pages + small form handlers
├─ config.php           # DB connection (mysqli)
└─ libraryms.sql        # database schema dump
```

## ✅ Prerequisites

- PHP (8.x recommended)
- MySQL or MariaDB
- A local web server (e.g. XAMPP / WAMP / Laragon) **or** PHP’s built-in server

## 🚀 Setup (local)

### 1) Create the database

Create a database named `libraryms`.

### 2) Import the schema

Import `libraryms.sql` into your MySQL/MariaDB server (phpMyAdmin works fine).

### 3) Configure DB connection

Database connection is initialized in `config.php`. It supports environment variables (recommended for hosting):

- `DB_HOST` (default `localhost`)
- `DB_USER` (default `root`)
- `DB_PASS` (default empty)
- `DB_NAME` (default `libraryms`)

If you’re using XAMPP/WAMP locally and your MySQL user/password differ, set these in your environment or update values in `config.php`.

### 4) Run the site

Put the project folder inside your web server root (e.g. `htdocs`) and open:

- `http://localhost/LMS/home.php`

## 🗄️ Database tables (from `libraryms.sql`)

- `books` — stores book details + checkout dates
- `signup` — stores user registration details
- `login` — stores login credentials
- `donations` — stores donation records

## 🔐 Security notes (important)

This project is intended for learning/demo use.

- Form handlers currently use raw `$_POST` values in SQL queries.
	- For production: use **prepared statements**, validate inputs, and **hash passwords**.
- Avoid committing real credentials. Prefer environment variables.

## 🧭 Pages & flows

- Signup: `SignUp.php` → `insertsignup.php`
- Login: `login.php` → `insertlogin.php`
- Add books: `books.php` → `insertbooks.php`
- Checkout book: `bookcheck.php` → `insertbookcheck.php`
- Donations: `Donations.php` → `insertdon.php`

## 🧩 Troubleshooting

- **Blank page / DB error**: confirm MySQL is running and `libraryms` database exists.
- **Connection failed**: update `DB_HOST/DB_USER/DB_PASS/DB_NAME` in environment or `config.php`.
- **CSS not loading**: check folder name casing (`CSS/` vs `css/`). Some pages use `css/...` in links.

## 📸 Screenshots

Add screenshots to a folder like `docs/screenshots/` and link them here.

## License

No license specified yet. If you want, I can add an open-source license file (MIT is a common choice).
