# Seerat Club — XAMPP Setup

This project is Laravel 13 and uses MySQL. Do **not** create tables manually in phpMyAdmin; only create an empty database named `seerat_club` (or another name you put in `.env`).

## 1. Environment

Copy `.env.xampp.example` to `.env`, then fill in your MySQL, Mailtrap and Super Admin values.

Required before seeding:

```env
SUPER_ADMIN_NAME="Seerat Club Super Admin"
SUPER_ADMIN_EMAIL=your@email.com
SUPER_ADMIN_PASSWORD=use-a-strong-password-at-least-12-characters
```

For production use `.env.example` as the secure baseline and keep `APP_DEBUG=false` and `SESSION_SECURE_COOKIE=true` on HTTPS.

## 2. Install PHP dependencies

From the project directory:

```cmd
composer install
```

If PHP is at `E:\php\php.exe`, use your normal Composer command configured for that PHP installation.

## 3. Create application key and database

```cmd
E:\php\php.exe artisan key:generate
E:\php\php.exe artisan migrate --seed
E:\php\php.exe artisan storage:link
E:\php\php.exe artisan optimize:clear
```

## 4. Admin

Open:

`http://127.0.0.1:8000/admin/login`

The Super Admin credentials are the values from your `.env`.

## 5. Run locally

```cmd
E:\php\php.exe artisan serve
```

Or point Apache/XAMPP document root to the Laravel `public` directory.

## Dynamic backend modules

- Dashboard with statistics and submission trend
- Admin users
- Roles and permissions
- Website content blocks
- Website settings / logo / favicon / contact details / social links
- Page SEO
- Events and event cycles
- Event gallery media
- General registrations
- Girls registrations
- Contact inbox
- Volunteer requests
- Media library
- Activity log
- Admin profile/password

Public form submissions are saved to MySQL first. Mailtrap errors are caught and logged, so a temporary SMTP failure does not discard the database record.
