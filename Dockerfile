FROM php:7.0-apache
COPY . /var/www/html
RUN apt-get update && apt-get upgrade
RUN apt-get install php7.0-mysql
RUN a2enmod rewrite
EXPOSE 80
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
