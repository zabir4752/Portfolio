# ==========================================
# PHP Base Image
# ==========================================
FROM php:8.4-cli-alpine

WORKDIR /var/www/html

# Install system dependencies
RUN apk add --no-cache \
    git \
    curl \
    unzip \
    zip \
    sqlite-dev \
    libzip-dev \
    oniguruma-dev \
    $PHPIZE_DEPS

# Install PHP extensions
RUN docker-php-ext-install \
    pdo \
    pdo_sqlite \
    bcmath \
    zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project FIRST
COPY . .

# Create SQLite DB (only if using sqlite)
RUN mkdir -p database \
    && touch database/database.sqlite

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Fix permissions
RUN mkdir -p storage bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# Expose Render port
EXPOSE 10000

# Start Laravel
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
