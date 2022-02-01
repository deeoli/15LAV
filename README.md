

## About

Basic Laravel Login App and a UI test in Dusk.

## Pre-requisites

1. XAMPP
2. COMPOSER
3. LARAVEL
4. NODE.JS


## Installation
 - Clone project -> git clone https://github.com/deeoli/15LAV.git
 - Create .env file -> Copy paste .env.example, rename to .env
 - Update Dependencies -> composer update
 - Set up DB:
   1. Create DB in PHP Admin
   2. Change DB name in .env file
   3. Update dependencies -> composer update
   4. Create Seed -> php artisan make:seeder UsersTablesSeeder
   5. Run migrations -> php artisan migrate
 - Install chrome driver -> php artisan dusk:chrome-driver  
 - Install Dusk -> composer require --dev laravel/dusk
## To run
 - Start app -> php artisan serve
 - Update .env change value of APP_URL=http://127.0.0.1:8000
 - Run Test ->  php artisan dusk  
   
