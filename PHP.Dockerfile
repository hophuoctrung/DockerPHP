FROM php:fpm

WORKDIR /app

RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        libicu-dev \
        curl \
        libpq-dev \
    && docker-php-ext-install pdo_mysql mysqli pdo intl zip

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install xdebug && docker-php-ext-enable xdebug
