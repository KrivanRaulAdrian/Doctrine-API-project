# php-api-project

An application that lets the user create posts, categories, and posts categories. The application is using the full OOP paradigms. Also this API is having routes to create, read, update, and delete posts and create, read, update, and delete categories.

## App Routes

## Posts

- [POST] /v1/posts/create
- [GET] /v1/posts/all
- [GET] /v1/posts/{post_id}
- [GET] /v1/posts/getSlug/{slug}
- [PUT] /v1/posts/{post_id}
- [DELETE] /v1/posts/{post_id}

## Categories

- [POST] /v1/categories/create
- [GET] /v1/categories/all
- [GET] /v1/categories/{category_id}
- [PUT] /v1/categories/{category_id}
- [DELETE] /v1/categories/{category_id}

## Posts Categories

- [POST] /v1/posts_categories/create
- [GET] /v1/posts_categories/{id_post}

## Instructions for installation

- Clone repository: `git clone git@gitlab.com:KrivanRaulAdrian/php-api-project.git`
- Create the DB: `php cli/create-db.php`
- Install the composer dependencies: `composer install`
- Configure the environment: `cp .env.example .env`
- Add your configuration to the `.env` file
- Run the application in your preferred localhost: `php -S localhost:8000 -t public`
- Run a test using PHPStan to see the code quality: `vendor/bin/phpstan analyse src`
- Run a test using PHP Code Sniffer: `./vendor/bin/phpcs --standard=PSR12 src/`
