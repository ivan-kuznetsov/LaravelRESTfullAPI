FROM php:7.1-fpm

RUN apt-get update && apt-get install -y libmcrypt-dev libpq-dev libicu-dev libmagickwand-dev\
    && docker-php-ext-configure pgsql -with-pgsql=/usr/local/pgsql \
    && docker-php-ext-configure intl \
    && docker-php-ext-install mcrypt pdo_pgsql pgsql intl \
    && pecl install imagick \
    && docker-php-ext-enable imagick \
    && pecl install xdebug-2.6.1 \
    && docker-php-ext-enable xdebug

WORKDIR /var/www

RUN groupadd -r app -g 1000 && useradd -u 1000 -r -g app -m app && chmod 755 /var/www

USER app