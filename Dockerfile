# Use an official PHP image with Apache
FROM php:8.2-apache

# Install required PHP extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy project files to container
COPY . /var/www/html/

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 for web traffic
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
