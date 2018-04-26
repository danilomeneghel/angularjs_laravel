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

Back to terminal and run Artisan:

```artisan

$ php artisan migrate

$ php artisan seed

```

After everything is done, run the project:

```shell

$ php artisan serve

```

Finally open `http://localhost:8000/` in your browser.


## License

MIT
