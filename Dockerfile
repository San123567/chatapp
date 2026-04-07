FROM php:8.2-apache
COPY . /var/www/html/
# Apache port
EXPOSE 80