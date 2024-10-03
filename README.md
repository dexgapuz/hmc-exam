# HMC Exam

## Getting Started

### Prerequisites

-   [Composer](https://getcomposer.org/)

### Installation

1. Install composer dependencies `composer install`
2. Setup `.env` file
3. Generate an app encryption key `php artisan key:generate`
4. Migrate database `php artisan migrate`

### For Docker

1. Go to `docker` directory
2. Execute `docker-compose up -d`
3. Set `DB_HOST` to `mysql` in `.env` file.
4. Set `DB_PASSWORD` to `root` in `.env` file.
5. And then proceed to installation.

## User Credential

email: admin@email.com\
Password: Qwerty123!

## Technologies used

-   [Laravel 11](https://laravel.com/)
-   [MySQL](https://www.mysql.com/)

## Developed and tested in:

-   [Docker](https://www.docker.com/)
