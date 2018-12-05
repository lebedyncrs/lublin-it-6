#!/usr/bin/env bash

cd laradock && docker-compose up -d workspace
sleep 1
docker-compose exec workspace composer global require hirak/prestissimo
docker-compose exec workspace composer install
docker-compose up -d mysql
sleep 3
docker-compose exec workspace php artisan migrate:refresh
docker-compose up -d apache2 redis phpmyadmin
echo "Finished. Please follow instructions from Installation guide on Github"