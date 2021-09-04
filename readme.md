# e-wallet
Laravel based wallet web app

Wallet is a laravel and Vuejs based wallet web app, integrated with Stripe
for card payments and PayPal APIs.

Clone the repo and have fun.


<img src="screenshots/wallet.png">


<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Project Setup Instructions
1. Clone the repository and cd into the directory
2. Run `composer install`
3. Run `npm install`
4. Copy the `.env.example to .env`
5. Run `php artisan key:generate`
6. Set the following database connection parameters in the .env file according to your server config
    `DB_HOST`
    `DB_PORT`
    `DB_USERNAME`
    `DB_PASSWORD`
    `DB_DATABASE`
7. Run `php artisan migrate --seed` to migrate the database tables and load test data
8. Run `php artisan serve --port {PORT_NUMBER}`
9. Open the app in `http://localhost:{PORT_NUMBER}`