FROM php:8.1-fpm

# Installer les extensions nécessaires
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip unzip \
    && docker-php-ext-install pdo pdo_mysql
