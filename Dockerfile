FROM php:7.4-fpm

WORKDIR /www

RUN apt update \
    &&  apt install -y zip \
    && docker-php-ext-install mysqli pdo pdo_mysql

RUN curl -s https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer

COPY . .
RUN composer install \
    && composer dump-autoload
