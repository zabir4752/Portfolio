# ==========================================
# PHP + Composer base image
# ==========================================
FROM php:8.4-cli-alpine

WORKDIR /var/www/html

# Install system dependencies + PHP extensions
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

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader --no-interaction

# Laravel permissions
RUN mkdir -p storage bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# Expose port Render uses
EXPOSE 10000

# Start Laravel server (Render requires binding to $PORT)
CMD php artisan serve --host=0.0.0.0 --port=${PORT:-10000}
