FROM php:7.0-apache
COPY . /var/www/html
RUN apt-get install php7.0-mysqli
RUN a2enmod rewrite
EXPOSE 80
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
