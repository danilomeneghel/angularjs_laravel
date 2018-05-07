# Laravel AngularJS

Project of an CRUD developed with the Laravel Framework 5 and AngularJS 1.5.

## Features

- CRUD
- Grid View
- Filter
- Pagination
- View Blade

## Tecnologies

- PHP 7
- JS
- Jquery
- Json
- CSS and SCSS
- Bootstrap
- Composer
- Artisan

## Installation

```shell

$ git clone https://github.com/danilomeneghel/angularjs_laravel.git

$ cd angularjs_laravel

$ composer install

```

Then create a database with name `angularjs_laravel` in your mysql.<br>
Then run the following commands:

```sql

$ mysql -u <your user> -p <your password>

mysql> create database `angularjs_laravel`;

```

Back to terminal, check if the .env file has the correct data to connect to the database and run Artisan:

```artisan

$ php artisan key:generate

$ php artisan migrate

$ php artisan db:seed

```

After everything is done, run the project:

```shell

$ php artisan serve

```

Finally open `http://localhost:8000/` in your browser.

## License

Laravel Admin is licensed under <a href="LICENSE">The MIT License (MIT)</a>.

## Screenshots

![Screenshots](screenshots/screenshot01.png)<br><br>
![Screenshots](screenshots/screenshot02.png)<br><br>
![Screenshots](screenshots/screenshot03.png)<br><br>
