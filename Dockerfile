# Usa una imagen base de PHP con Nginx (o Apache, pero Nginx es común para Laravel)
# Esta imagen es una buena base para Laravel, incluyendo PHP-FPM y Nginx
FROM richarvey/nginx-php-fpm:latest

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia los archivos de tu aplicación al contenedor
COPY . .

# Instala las dependencias de Composer (se ejecuta en la fase de construcción)
# Cuidado con los permisos: Composer debe poder escribir.
RUN composer install --no-dev --optimize-autoloader

# Ejecuta las migraciones y seeders (también en la fase de construcción)
# Esto asegurará que tu base de datos esté lista y poblada.
RUN php artisan migrate --force && php artisan db:seed --force

# Limpia la caché de Laravel para producción
RUN php artisan config:cache && php artisan route:cache && php artisan view:cache

# Expone el puerto 80 para Nginx
EXPOSE 80

# El comando por defecto cuando el contenedor arranca
# Esto es manejado por la imagen richarvey/nginx-php-fpm que ya tiene su propio ENTRYPOINT/CMD
# No necesitas un 'CMD' explícito aquí a menos que quieras anular el de la imagen base.
# La imagen ya inicia Nginx y PHP-FPM automáticamente.