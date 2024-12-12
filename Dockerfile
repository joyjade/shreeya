  # Use an official PHP image as a base with Apache
FROM php:8.1-apache

# Install dependencies (e.g., for MySQL or other libraries)
RUN docker-php-ext-install pdo pdo_mysql

# Install necessary PHP extensions (e.g., GD for image processing, pdo, pdo_mysql), which are often required by Kirby (e.g., for image manipulation and database connections if you choose to enable a database)
RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql  

# Enable Apache modules (e.g., mod_rewrite for clean URLs and is commonly required)
RUN a2enmod rewrite

# Copy your application files to the container's web root 
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html/

# Set permissions for Apache to serve the files (Apache user/group)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80 to access the app
EXPOSE 80