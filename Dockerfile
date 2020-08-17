FROM php:7.0-apache
COPY . /var/www/html
RUN apt update -y && apt-get upgrade -y
RUN apt install php7.0-mysql -y
RUN a2enmod rewrite
EXPOSE 80
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
