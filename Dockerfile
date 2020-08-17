FROM php:7.3-apache
COPY . /var/www/html
RUN apt update -y && apt-get upgrade -y
RUN mysql --version
RUN a2enmod rewrite
EXPOSE 80
COPY 000-default.conf /etc/apache2/sites-available/000-default.conf
