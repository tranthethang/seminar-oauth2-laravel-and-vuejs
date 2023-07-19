#!/bin/sh

cd ./api &&
cp .env.sample .env &&
composer install &&
php artisan key:generate &&
php artisan migrate &&
php artisan passport:install &&
php artisan passport:client --password &&
php artisan optimize &&
cd ..