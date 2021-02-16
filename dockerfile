FROM php:7.4-apache

RUN docker-php-ext-install mysqli
RUN chown -R www-data:www-data /var/www && \
chmod -R u=rwx /var/www && \
chmod -R g=rwx /var/www && \
chmod -R o=r /var/www 
 
COPY index.php .
COPY count_user.php .

EXPOSE 80
