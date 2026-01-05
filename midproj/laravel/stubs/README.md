# Laravel scaffold stubs (midproj/laravel/stubs)

This folder contains stubs used to bootstrap a Laravel application for the `midproj` static site.

How it works
1. Run `prepare.sh` (make executable first) from `midproj/laravel/stubs` or from the `midproj` directory as instructed.
2. The script creates a fresh Laravel 10 app in `midproj/laravel-app` using Composer, then copies these stubs into it (controllers, routes, views, public assets).
3. After that you must run `composer install` in `midproj/laravel-app`, create `.env`, configure SQLite, run migrations and serve the app.

Files included in stubs:
- app/Http/Controllers/PageController.php
- routes/web.php
- resources/views/layouts/app.blade.php
- resources/views/home.blade.php
- resources/views/courses.blade.php
- resources/views/about.blade.php
- resources/views/contact.blade.php
- public/css/style.css (copied from original static site)
- public/t.html (demo)
- .env.example (configured for sqlite)

Notes
- The script will refuse to overwrite an existing `midproj/laravel-app` directory.
- Vendor is not committed — run `composer install` after scaffolding.
- If you need authentication, DB models, or GitHub Actions CI, tell me and I can add them.
