# Calorie Calculator

This calorie calculator has several features.
- Users can fill in their information and system returns their target calorie plan.
- Administrator can login to a dashboard.
- Administrator can export database records in csv or xls format.

## Initial set up

1. Set up mysql database.
2. Create `.env` file with own environment variables (see .env.example).
3. Run `php artisan migrate` to run migration files, to create database table structures.
4. Run `php artisan db:seed` to run seed files, to popular database tables.
5. Run `php artisan serve` to host locally.

## Others

This calorie calculator uses Laravel PHP Framework. Official documentation for the framework can be found on the [Laravel website](http://laravel.com/docs).