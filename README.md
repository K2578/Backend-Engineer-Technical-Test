## Setup Instructions

Prerequisities:

- [PHP 8.x](https://www.php.net/downloads.php).
- [Composer](https://getcomposer.org/download/).
- MySQL
- [Laravel 10.x](https://laravel.com/docs/10.x/installation).

## Installation Steps

1. Clone the repository:
   git clone <repository_url>
   cd <project_directory>
2. Install dependencies:
   composer install
3. Configure environment variables:
   cp .env.example .env
   - Update database credentials in .env file.
4. Generate application key:
  php artisan key:generate
5. Run migrations and seed database:
  php artisan migrate --seed
6. Start the application:
   php artisan serve

Your Laravel application should now be running on http://127.0.0.1:8000. You can access the API endpoints using Postman or any API testing tool.

## Running Unit Tests

To run the unit tests, use:
php artisan test

Ensure PHPUnit or Pest is properly configured in the project.

- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**
