FROM php:8.2-fpm
RUN apt update
RUN apt-get update && apt-get install -y \
	libfreetype-dev \
	libjpeg62-turbo-dev \
	libpng-dev \
	libwebp-dev \
	libzip-dev \
	&& docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp \
	&& docker-php-ext-install -j$(nproc) gd
RUN docker-php-ext-install pdo_mysql
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install zip
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
RUN php composer-setup.php --install-dir=/usr/local/bin --filename=composer
RUN php -r "unlink('composer-setup.php');"