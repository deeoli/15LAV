

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
 - Set up DB:
   1. Create DB in PHP Admin
   2. Create Seed -> php artisan make:seeder UsersTablesSeeder
   3. Run migrations -> php artisan migrate
   4. Change DB name in .env file
 - Install chrome driver -> php artisan dusk:chrome-driver  

## To run
 - Start app -> php artisan serve
 - Run Test ->  php artisan dusk  
   
