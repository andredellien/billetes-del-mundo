#!/usr/bin/env bash

# Ejecuta las migraciones
php artisan migrate --force

# Ejecuta los seeders para poblar la base de datos
php artisan db:seed --force

# Inicia el servidor de Laravel
# La imagen richarvey/nginx-php-fpm espera que PHP-FPM y Nginx ya estén corriendo
# y el start command es para tu aplicación específica.
# En este caso, no necesitamos php artisan serve porque la imagen base ya maneja PHP-FPM y Nginx.
# Solo necesitamos asegurar que el directorio de trabajo es correcto y que el proceso se mantenga vivo.
# La imagen richarvey ya tiene un CMD que mantiene el proceso vivo.
# Por lo tanto, si las migraciones y seeders son lo último que necesitas, no hay un comando 'serve' explícito aquí.

# Si por alguna razón la imagen base no inicia Nginx/PHP-FPM automáticamente con el CMD,
# y necesitas que el proceso principal del contenedor sea tu Laravel, entonces sí usarías:
# php artisan serve --host=0.0.0.0 --port=$PORT
# Pero con richarvey/nginx-php-fpm, usualmente no es necesario y puede causar conflictos.

# Si solo necesitas que el script termine después de las migraciones/seeders
# y la imagen base se encargue del servicio web:
exit 0