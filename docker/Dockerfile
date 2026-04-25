FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y unzip curl \
    && docker-php-ext-install mysqli pdo pdo_mysql

# Enable Apache rewrite
RUN a2enmod rewrite

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy app
COPY app/ /var/www/html/

# Install PHP dependencies (for S3)
WORKDIR /var/www/html
RUN composer require aws/aws-sdk-php

# Fix permissions
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
