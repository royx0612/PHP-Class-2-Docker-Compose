FROM php:8.3-fpm

# 安装 PDO 模組
RUN docker-php-ext-install pdo pdo_mysql
