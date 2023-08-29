## About emLaravel

emLaravel is a snippet project using Vue, tailwindcss, laravel & inertia
> more info on package.json & composer.json
Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Info

- js bundler is vite, 
- router is inertia.js
- mysql is docker container  

## to setup development environment

- create .env file using .env.example
- `composer install` 
- `npm install`
- install docker desktop, when open run `docker compose up`
- create a database using docker container app `adminer`. for more info see docker-compose.yml
- insert db information to .env
- test db connection using `php artisan db:show`
- for db seed use `php artisan db:seed` 
- for db refresh : `php artisan migrate:refresh --seed`
- after that `npm run dev` && `php artisan serve`

> see sample.vscode for vscode settings.