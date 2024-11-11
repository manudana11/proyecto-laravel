FROM php:8.2-fpm

# Instalación de dependencias de PHP
RUN apt-get update && apt-get install -y \
    zip unzip git libpq-dev libicu-dev curl \
    && docker-php-ext-install pdo pdo_mysql intl

# Instalación de Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalación de Node.js y npm (versión 18 LTS)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Crear el grupo y el usuario www-data (si no existe)
RUN getent group www-data || groupadd -g 82 www-data && getent passwd www-data || useradd -u 82 -g www-data -m -s /bin/bash www-data

# Establece el directorio de trabajo
WORKDIR /application
