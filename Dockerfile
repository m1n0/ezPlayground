FROM php:5.6-apache

MAINTAINER Samuel ROZE <samuel.roze@gmail.com>

# PHP extension
RUN requirements="libfreetype6-dev libxml2 libxml2-dev libxslt1-dev libjpeg62-turbo-dev libpng12-dev libssl-dev zlib1g-dev libicu-dev libmcrypt-dev zlib1g-dev libicu-dev git curl" \
    && apt-get update && apt-get install -y $requirements && rm -rf /var/lib/apt/lists/* \
    && docker-php-ext-install mysqli\
    && docker-php-ext-install mbstring iconv opcache mcrypt bcmath xsl\
    && docker-php-ext-install intl \
    && docker-php-ext-install zip \
    && docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ \
    && docker-php-ext-install gd \
    && apt-get purge --auto-remove -y

# Apache & PHP configuration
RUN a2enmod rewrite
ADD docker/apache/vhost.conf /etc/apache2/sites-enabled/default.conf
ADD docker/php/php.ini /usr/local/etc/php/php.ini

# Install composer
RUN curl -sS https://getcomposer.org/installer | php \
    && mv composer.phar /usr/bin/composer

# Add the application
ADD . /app
WORKDIR /app

# Install dependencies
#RUN composer install -o

# Ensure that the production container will run with the www-data user
RUN chown www-data /app

CMD ["/app/docker/apache/run.sh"]
