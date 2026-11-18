# Seerat Club Laravel 13 Production Setup

This project uses Laravel 13 and MySQL. All application tables and schema changes are defined in Laravel migrations. Do not manually create application tables.

## 1. Requirements

- PHP 8.3 or newer with the extensions Laravel requires, including PDO MySQL, mbstring, openssl, tokenizer, xml, ctype, fileinfo and DOM/XML.
- MySQL 8.x or compatible MariaDB.
- Composer 2.x.
- A web server whose document root points to the Laravel `public` directory.

## 2. Environment

Copy `.env.example` to `.env` and set your own values. Never commit `.env`.

```env
APP_NAME="Seerat Club"
APP_ENV=local
APP_DEBUG=true
APP_URL=http://127.0.0.1:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=seerat_club
DB_USERNAME=root
DB_PASSWORD=

MAIL_MAILER=smtp
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=YOUR_MAILTRAP_USERNAME
MAIL_PASSWORD=YOUR_MAILTRAP_PASSWORD
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS=noreply@seeratclub.pk
MAIL_FROM_NAME="Seerat Club"
MAIL_FORMS_TO=YOUR_NOTIFICATION_EMAIL

SUPER_ADMIN_NAME="Seerat Club Super Admin"
SUPER_ADMIN_EMAIL=admin@example.com
SUPER_ADMIN_PASSWORD=USE_A_LONG_UNIQUE_PASSWORD
```

Only the empty MySQL database itself needs to exist before migration. The tables, indexes and foreign keys are created by migrations.

## 3. Windows XAMPP commands

From `C:\xampp\htdocs\Seerat-Club`:

```cmd
E:\php\php.exe artisan key:generate
E:\php\php.exe artisan migrate --seed
E:\php\php.exe artisan storage:link
E:\php\php.exe artisan optimize:clear
```

If your PHP executable has another path, use that path instead.

Admin login:

```text
/admin/login
```

The Super Admin account is created only when `SUPER_ADMIN_EMAIL` and `SUPER_ADMIN_PASSWORD` are supplied. Passwords are hashed through Laravel before storage.

## 4. Mailtrap

Form submissions are stored in MySQL before any email is attempted. If Mailtrap is temporarily unavailable, the database record remains saved and the mail error is logged.

## 5. Cycle 1 photographs

Cycle 1 gallery folders are already prepared under:

```text
public/assets/images/cycle-1/<event-slug>/
```

Add numbered images such as `1.jpg`, `2.jpg`, `3.png` or `4.webp`. The event page scans the local folder and displays the files automatically. An empty folder shows the normal gallery section without a developer message or a `0 images` badge.

## 6. Production

Use production values before deployment:

```env
APP_ENV=production
APP_DEBUG=false
```

Then run:

```cmd
E:\php\php.exe artisan optimize:clear
E:\php\php.exe artisan config:cache
E:\php\php.exe artisan route:cache
E:\php\php.exe artisan view:cache
```

Keep the web server document root pointed at `/public`. Restrict `.env` and storage permissions appropriately and use HTTPS.
