# UMS

Admin panel and api for mobile applications of mobile operator UMS

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

 * PHP >= 7.1.3
 * OpenSSL PHP Extension
 * PDO PHP Extension
 * Mbstring PHP Extension
 * Tokenizer PHP Extension
 * XML PHP Extension
 * Ctype PHP Extension
 * JSON PHP Extension

### Installing

What things you need to install the software and how to install them

1. Download the project with `git clone https://github.com/BotirovE/ums.git`

2. Run in the project folder `composer install`

3. Configure the `.env` file. Run `php artisan key:generate`

4. Run `php artisan migrate`

5. Create admin `php artisan voyager:admin your@email.com --create` and you will be prompted for the users name and password.

## Running

1. Open project folder in command line

2. Run `php artisan serve` which starts a development server at http://localhost:8000

## Built With

* [Laravel](https://laravel.com/docs/5.6) - The web framework used
* [Voyager](https://voyager.readme.io/docs) - An admin for Laravel app

## Authors

See the list of [contributors](https://github.com/BotirovE/ums/graphs/contributors) who participated in this project.

