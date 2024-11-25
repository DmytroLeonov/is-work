FROM php:8.2-apache

RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
RUN echo '<Directory /var/www/html>' >> /etc/apache2/apache2.conf \
    && echo '    AllowOverride All' >> /etc/apache2/apache2.conf \
    && echo '</Directory>' >> /etc/apache2/apache2.conf
