FROM php:7.4-fpm

RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip libzip-dev zip \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && apt-get update && apt-get install -y \
               libfreetype6-dev \
               libjpeg62-turbo-dev \
               libpng-dev \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && apt-get install -y procps && rm -rf /var/lib/apt/lists/*

WORKDIR /var/www/app