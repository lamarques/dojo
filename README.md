# PHP Dojo Template

Este é um template básico para um dojo de desenvolvimento em PHP com PHPUnit, incluindo um ambiente Docker.

## Pré-requisitos

- Docker
- Docker Compose

## Configuração

1. Construa o ambiente Docker:
   ```bash
   docker-compose build
    ```
    ```
    php-dojo-template/
    ├── src/
    │   └── Example.php
    ├── tests/
    │   └── ExampleTest.php
    ├── docker/
    │   ├── Dockerfile
    │   └── php.ini
    ├── docker-compose.yml
    ├── composer.json
    ├── phpunit.xml
    ├── README.md
   ```
   