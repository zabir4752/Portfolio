# ==========================================
# Stage 1: Compile Frontend Assets (Vite)
# ==========================================
FROM node:20-alpine AS node-builder
WORKDIR /app

# Install npm dependencies
COPY package*.json ./
RUN npm ci --quiet

# Copy all source files and compile
COPY . .
RUN npm run build

# ==========================================
# Stage 2: Production PHP Application Image
# ==========================================
FROM php:8.3-fpm-alpine

# Set directory path
WORKDIR /var/www/html

# Copy Composer binary from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install system dependencies and PHP libraries required by Laravel
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    sqlite-dev \
    libzip-dev

# Install PHP extensions
RUN docker-php-ext-install \
    pdo_sqlite \
    bcmath \
    opcache \
    zip

# Copy application source files
COPY . .

# Copy compiled frontend assets from Stage 1
COPY --from=node-builder /app/public/build ./public/build

# Install PHP composer dependencies for production
RUN composer install --no-dev --optimize-autoloader --no-interaction --no-scripts

# Create necessary supervisor and log directories
RUN mkdir -p /etc/supervisor/conf.d/ /var/log/supervisor /var/run

# Copy docker environment configurations
COPY docker/nginx.conf /etc/nginx/http.d/default.conf
COPY docker/supervisord.conf /etc/supervisor/conf.d/supervisord.conf
COPY docker/docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh

# Secure file permissions for Laravel runtime folders
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose HTTP port 80
EXpose 80

# Execute custom entrypoint script
ENTRYPOINT ["/usr/local/bin/docker-entrypoint.sh"]
