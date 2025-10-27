# Imagen base con PHP 8.2 y Apache
FROM php:8.2-apache

# Instalar extensiones necesarias para MariaDB
RUN docker-php-ext-install pdo pdo_mysql

# Directorio de trabajo dentro del contenedor
WORKDIR /var/www/html/draftosaurus/public

# Copiar los archivos del proyecto
COPY . .

# Habilitar mod_rewrite (útil para .htaccess)
RUN a2enmod rewrite
