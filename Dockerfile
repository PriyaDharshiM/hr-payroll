# Use official PHP image with extensions
FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git unzip libzip-dev libonig-dev libpq-dev \
    && docker-php-ext-install pdo_mysql mbstring zip \
    && a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy project files
COPY . .

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Set file permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Expose port 80
EXPOSE 80

# Start Apache
CMD ["apache2-foreground"]
