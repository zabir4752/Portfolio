#!/bin/sh
set -e

echo "🚀 Starting Zabir Portfolio Boot Sequence..."

# 1. Ensure .env file exists
if [ ! -f "/var/www/html/.env" ]; then
    echo "📄 Creating .env from .env.example..."
    cp /var/www/html/.env.example /var/www/html/.env
fi

# 2. Ensure SQLite database exists
if [ ! -f "/var/www/html/database/database.sqlite" ]; then
    echo "🗄️ Database file not found. Creating database/database.sqlite..."
    mkdir -p /var/www/html/database
    touch /var/www/html/database/database.sqlite
fi

# 3. Ensure permissions are strictly aligned for web server
echo "🔑 Aligning directory permissions..."
chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache /var/www/html/database

# 4. Generate application key if empty
if ! grep -q "APP_KEY=base64:" /var/www/html/.env; then
    echo "🔑 Generating Laravel Application Encryption Key..."
    php artisan key:generate --force
fi

# 5. Run Database Migrations
echo "⚡ Running Database Migrations..."
php artisan migrate --force

# 6. Optimize Caches for Production Performance
echo "⚡ Optimizing Configurations, Routes, and Templates Caches..."
php artisan config:cache
php artisan route:cache
php artisan view:cache

echo "🎉 Boot sequence complete! Handing over to Supervisor..."

# 7. Start Supervisor (Nginx + PHP-FPM)
exec /usr/bin/supervisord -c /etc/supervisor/conf.d/supervisord.conf
