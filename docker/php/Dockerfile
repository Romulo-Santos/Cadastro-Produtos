
FROM php:8.1-fpm

# Instala dependências e extensões
RUN apt-get update && \
    apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    libpq-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo_pgsql \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

    RUN chown -R www-data:www-data /var/www/html/storage

# Copia configurações personalizadas
COPY local.ini /usr/local/etc/php/conf.d/

WORKDIR /var/www/html

CMD ["php-fpm"]
