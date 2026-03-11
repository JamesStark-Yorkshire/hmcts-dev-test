## About hmcts-dev-test

It is a solution to https://github.com/hmcts/dts-developer-challenge

## Backend

Framework: Laravel (PHP)

Directory: hmcts-dev-test-backend

### How to run the project in Docker?
Copy `.env.sail` as `.env` in the root directory of `hmcts-dev-test-backend` to setup the environment variable.

1. Use should have [Docker](https://www.docker.com), [PHP](https://www.php.net) and [Composer](https://getcomposer.org) already configured and installed on your machine
2. Run `composer install` in the root of the backend directory
3. Run the following command to start the project `./vendor/bin/sail up`
4. Run `./vendor/bin/sail sail artisan migrate` to create necessary database tables
5. Run `./vendor/bin/sail sail artisan db:seed` to create seeded data in the database
6. Test the API GET path http://localhost/api/tasks for listing Tasks

Refer to [Laravel Sail](https://laravel.com/docs/12.x/sail) for troubleshooting.

## Frontend

WIP


