#!/usr/bin/env bash
set -e

# prepare.sh
# Usage: run from repository root (or from midproj) to scaffold a Laravel app in midproj/laravel-app
# Requirements: composer, php 8.1+, unzip

STUBS_DIR="$(cd "$(dirname "$0")" && pwd)"
MIDPROJ_DIR="$(dirname "$STUBS_DIR")"
TARGET_DIR="$MIDPROJ_DIR/laravel-app"

echo "Stubs dir: $STUBS_DIR"
echo "Target Laravel app: $TARGET_DIR"

if [ -d "$TARGET_DIR" ]; then
  echo "Warning: target dir $TARGET_DIR already exists. Aborting to avoid overwrite."
  echo "Remove or rename it if you want to re-run this script."
  exit 1
fi

# Create Laravel 10 project
if ! command -v composer >/dev/null 2>&1; then
  echo "Composer is required but not installed. Install composer and re-run."
  exit 1
fi

echo "Creating Laravel project (this may take a minute)..."
composer create-project laravel/laravel:"^10.0" "$TARGET_DIR" --prefer-dist --no-interaction

echo "Copying stubs into the new app..."
# Copy controllers, routes, views and public assets (preserve existing files)
rsync -av --ignore-existing "$STUBS_DIR/app/" "$TARGET_DIR/app/"
rsync -av --ignore-existing "$STUBS_DIR/routes/" "$TARGET_DIR/routes/"
rsync -av --ignore-existing "$STUBS_DIR/resources/" "$TARGET_DIR/resources/"
rsync -av --ignore-existing "$STUBS_DIR/public/" "$TARGET_DIR/public/"
cp -n "$STUBS_DIR/.env.example" "$TARGET_DIR/.env.example"

# Make sure storage/logs exists and is writable
mkdir -p "$TARGET_DIR/storage/logs"
chmod -R ug+rw "$TARGET_DIR/storage"

echo "Done. Next steps:"
echo "  cd $TARGET_DIR"
echo "  composer install"
echo "  cp .env.example .env"
echo "  php artisan key:generate"
echo "  touch database/database.sqlite"
echo "  # in .env set: DB_CONNECTION=sqlite and DB_DATABASE=/full/path/to/$TARGET_DIR/database/database.sqlite"
echo "  php artisan migrate"
echo "  php artisan serve --host=127.0.0.1 --port=8000"
echo ""
echo "If you want me to commit these stubs to a branch, tell me and I will prepare a branch patch (or run the commit locally)."
