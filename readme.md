#Plan It - Recommender System

## Run App

## 1 Setting data on DB
- Run `php artisan migrate` to make table from migration.
- Run `php artisan db::seed` to insert data from seeder to table DB.
- Run `php artisan tinker` -> `factory(App\Destination::class, 40)->create()` to make data from factory

