#!/bin/bash;

echo "Instalando dependências do projeto: ";

composer install || {
    echo "Composer nao encontrado. Instalando Composer...";
    php -r "readfile('https://getcomposer.org/installer');" | php;
    php composer.phar install;
};

echo -e "Gerando migrations e seeds: \n ";
php artisan migrate;
php artisan db:seed;
php artisan serve --port=3000 --host localhost;

