# Usar la imagen base de PHP con Apache
FROM php:8.2-apache

# Instalar extensiones necesarias
# RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo pdo_mysql

# Establecer el directorio de trabajo dentro del contenedor a la carpeta de tu app
WORKDIR /var/www/html/draftosaurus

# Copiar solo el contenido de tu app al directorio de trabajo
COPY . .

# Configurar Apache para que use el archivo .htaccess
RUN a2enmod rewrite
