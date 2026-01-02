# Stage 0: PHP + Apache
FROM php:8.2-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Install system dependencies and PHP extensions
RUN apt-get update && apt-get install -y \
    libzip-dev unzip git && docker-php-ext-install zip pdo pdo_mysql

# Set working directory to /var/www/html
WORKDIR /var/www/html

# Copy the entire project to /var/www/html
COPY . .

# Set Apache to serve from Laravel public folder
RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf
RUN sed -i 's|<Directory /var/www/>|<Directory /var/www/html/public/>|' /etc/apache2/apache2.conf

# Copy Composer from official image
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Install Laravel dependencies
RUN composer install --no-dev --optimize-autoloader

# Expose port 80
EXPOSE 80

# Start Apache in foreground
CMD ["apache2-foreground"]
