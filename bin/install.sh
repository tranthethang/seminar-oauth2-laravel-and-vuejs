#!/bin/sh

cd ./api &&
cp .env.sample .env &&
composer update &&
composer install &&
php artisan key:generate &&
php artisan migrate:fresh --seed &&
php artisan passport:install &&
php artisan passport:client --password &&
php artisan optimize &&
cd .. &&
cd ./client &&
cp .env.sample .env &&
npm install &&
npm run build
