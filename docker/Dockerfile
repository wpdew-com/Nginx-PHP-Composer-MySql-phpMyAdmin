# Используем образ PHP-FPM
FROM php:8-fpm

# Устанавливаем необходимые зависимости и PHP-расширения
RUN apt-get update && apt-get install -y \
    libmcrypt-dev \
    mariadb-client \
    curl \
    && docker-php-ext-install pdo_mysql

# Устанавливаем дополнительные PHP-расширения
RUN docker-php-ext-configure exif \
    && docker-php-ext-install exif \
    && docker-php-ext-enable exif

# Устанавливаем Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Копируем файлы вашего приложения, включая composer.json
COPY public/composer.json /var/www/public/composer.json
COPY public /var/www/public

# Устанавливаем рабочую директорию
WORKDIR /var/www/public

# Устанавливаем зависимости через Composer
RUN composer install --no-interaction --optimize-autoloader

# Открываем порт 80 для nginx
EXPOSE 80