FROM php:8.2-apache
COPY . /var/www/html
EXPOSE 80
RUN a2enmod rewrite

RUN apt-get update
RUN apt-get install -y libcurl4-openssl-dev pkg-config libssl-dev \
    && pecl install mongodb \
    && docker-php-ext-enable mongodb.so \
    && docker-php-ext-install pdo

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
    
CMD ["/usr/sbin/apache2ctl", "-D", "FOREGROUND"]
