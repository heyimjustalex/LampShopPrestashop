# Install php
FROM php:7.3-apache

# Listen at 80
EXPOSE 80

# Updatae apt-get
RUN apt-get update && apt-get upgrade -y

# Install needed php zip extension
RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip

# install php mysql extension
RUN docker-php-ext-install mysqli \
    && docker-php-ext-enable mysqli


# Install PostgreSQL PDO
# RUN apt-get install -y libpq-dev \
#    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
#    && docker-php-ext-install pdo pdo_pgsql pgsql