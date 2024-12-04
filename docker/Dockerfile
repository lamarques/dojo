FROM php:8.4-cli

# Instalar dependências necessárias
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && docker-php-ext-install pdo pdo_mysql

# Instalar o Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Instalar PHPUnit
RUN composer global require phpunit/phpunit:^10.0

# Adicionar o Composer ao PATH
ENV PATH="/root/.composer/vendor/bin:${PATH}"

# Configurar o ambiente de trabalho
WORKDIR /app
COPY . .

# Instalar dependências do projeto
RUN composer install
