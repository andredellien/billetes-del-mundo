FROM richarvey/nginx-php-fpm:latest

WORKDIR /var/www/html

COPY . .

RUN composer install --no-dev --optimize-autoloader

# ELIMINA ESTAS LÍNEAS DEL DOCKERFILE:
# RUN php artisan migrate --force && php artisan db:seed --force

RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

EXPOSE 80