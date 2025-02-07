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

# Design & Performance Write-up

## Design Choices

MVC Designing organizes code into models, sees, and controllers for superior viability. Store Plan confines database rationale from controllers, making the code cleaner and more reusable. Influential ORM streamlines database operations utilizing object-oriented sentence structure. Peaceful API Measures guarantee consistency, versatility, and best hones in API plan. Middleware & Endorsement include security and guarantee that approaching demands meet required criteria some time recently handling.

## Performance Optimizations

Request Optimization utilizes energetic stacking (with()) to dodge over the top database inquiries. Caching executes Redis to store habitually gotten to information, lessening database stack. Ordering speeds up looks by including lists on commonly questioned columns like outside keys. Pagination limits the number of comes about per API ask to move forward reaction time. Database Association Pooling arranges MySQL to handle different demands productively.

# Performance Scaling Plan

Plans on how to make strides execution once the libraries contain millions of books and creators:
Database Sharding & Examined Reproductions disseminate information over numerous servers and adjust read-heavy workloads. Elasticsearch gives quick and effective full-text rummage around for books and creators. Line Handling employments Laravel Lines (e.g., RabbitMQ, Redis) to handle foundation assignments like notices and bulk handling. CDN for Inactive Assets offloads the conveyance of pictures, scripts, and stylesheets to diminish server stack. Microservices Engineering isolates book and creator administration into free administrations for way better adaptability.

These procedures will guarantee that the application remains performant indeed with a expansive dataset.

 

