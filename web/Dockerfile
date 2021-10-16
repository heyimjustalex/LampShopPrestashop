# Install php
FROM php:7.3-apache

# Set time zone environment variable
ENV TZ="Europe/Warsaw"

# Set php.ini local file as default server php init file
COPY ./config/php.ini /usr/local/etc/php/php.ini

# Enable mod_rewrite in apache server
RUN a2enmod rewrite

# Updatae apt-get
RUN apt-get update && apt-get upgrade -y

# Install needed php extensions
RUN apt-get install -y \
        libzip-dev \
        libpng-dev \
        libicu-dev \
        zip \
  && docker-php-ext-install zip \
  && docker-php-ext-install gd \
  && docker-php-ext-install intl

# Install opcache extension for PHP accelerator
RUN docker-php-ext-install opcache \
    && docker-php-ext-enable opcache

# install php mysql extension
RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli \
    && docker-php-ext-install pdo pdo_mysql

# Listen at 80
EXPOSE 80