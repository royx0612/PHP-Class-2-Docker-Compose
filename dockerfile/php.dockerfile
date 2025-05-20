FROM php:8.3-fpm

# 安装 PDO 模組
RUN docker-php-ext-install pdo pdo_mysql
RUN pecl install xdebug && docker-php-ext-enable xdebug
COPY ./dockerfile/xdebug.ini /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini