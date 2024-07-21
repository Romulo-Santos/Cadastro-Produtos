FROM php:8.1-fpm

# Instalar dependências e extensões do PHP
RUN apt-get update && apt-get install -y \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libxml2-dev \
    libcurl4-openssl-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd \
    && docker-php-ext-install pdo pdo_mysql xml curl

# Instalar o Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar configurações PHP
COPY ./docker/php/local.ini /usr/local/etc/php/conf.d/
<<<<<<< HEAD
=======
COPY fastcgi-php.conf /etc/nginx/snippets/fastcgi-php.conf
>>>>>>> temp-branch
