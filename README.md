# twitter-profiles

API para buscar perfiles de Twitter, ordenados por orden de popularidad (segun cantidad de followers)

Ejemplo: 

http://localhost:8080/profiles/invgate

Búsca en Twitter usuarios con la palabra 'invgate', los ordena y retorna una lista de perfiles con: "id", "name", "description", "followers" y "imageUrl".

Instalación:

1- instalar composer:
    https://getcomposer.org/download/

2- ejecutar composer:
    composer.phar install

3- levantar servidor:
    php -S localhost:8080 -t public public/index.php
