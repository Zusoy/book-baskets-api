FROM composer:1.10.6 AS composer

########################################################################

FROM php:7.4.6-fpm-alpine3.11 AS common

ARG APP_ENV=prod

RUN \
  adduser php -u 1000 -s /usr/bin/nologin -D -g '' && \
  mkdir /usr/src/app

COPY config/php.ini /usr/local/etc/php/php.ini

COPY --from=composer /usr/bin/composer /usr/bin/composer

RUN \
  apk add --no-cache \
    git=2.24.3-r0 \
    icu-dev=64.2-r1 \
    autoconf=2.69-r2 \
    make=4.2.1-r2 \
    g++=9.2.0-r4

RUN \
  docker-php-ext-install \
    pdo_mysql \
    fileinfo \
    intl

COPY . /usr/src/app

RUN chown -R 1000:1000 /usr/src/app

WORKDIR /usr/src/app
USER 1000:1000

RUN \
  mkdir -p \
    var/cache \
    var/log

RUN composer global require hirak/prestissimo

# CMD composer run-script post-install-cmd && php-fpm

########################################################################

FROM common AS dev

ARG APP_ENV=dev

########################################################################

FROM common AS prod

# RUN composer install --no-dev --no-scripts --optimize-autoloader
