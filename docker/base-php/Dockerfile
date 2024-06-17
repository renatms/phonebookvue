FROM php:8.1.0-fpm

RUN \
    apt-get update && \
    apt-get -y --no-install-recommends install \
        libicu-dev \
        unzip \
        curl\
        mc && \
    apt-get clean && \
    rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/*

RUN \
    docker-php-ext-install \
        pdo_mysql \
        intl

#redis:7.0.11
RUN pecl install redis-5.3.7 \
    && docker-php-ext-enable redis

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
