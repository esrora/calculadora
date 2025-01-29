FROM php:8.2-cli

WORKDIR /app

RUN apt update && apt install -y zip git libzip-dev && \
    docker-php-ext-install zip

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

CMD [ "php", "-S", "0.0.0.0:8000", "-t", "public" ]