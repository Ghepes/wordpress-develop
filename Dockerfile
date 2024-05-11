# Setează imaginea de bază
FROM php:7.4-apache

# Instalează dependențele utilizând composer
RUN apt-get update && apt-get install -y git zip unzip
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
WORKDIR /app
COPY composer.json .
RUN composer install

# Setează directoarele și fișierele pentru Apache
COPY . /var/www/html/

