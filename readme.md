Laravel 4 Testsuites
===============

This package helps you to organize your tests into smaller testsuites to speed up unit testing in Laravel without having to resort to a heavier testing framework like codeception.

Simply create a folder within your tests folder and name it what you whatever you want.
For a `unit` testsuite, I would create a `unit` folder and run the suite using `art test unit`.
It's that simple!

## Installation Using Laravel 4 Package Installer

If you have [Laravel 4 Package Installer](https://github.com/rtablada/package-installer) installed you can install Laravel 4 Testsuites by running `php artisan package:install rtablada/laravel-testsuites`.

## Installing Using Composer

If you do not have Pacakge Installer, you can install Wardrobe Disqus by running `composer require rtablada/laravel-testsuites` and then modifying your `providers` in `app/config/app.php` to include `Rtablada\Testsuites\TestsuitesServiceProvider`.

## Using This Package

Laravel 4 Testsuites gives you two options when running tests:

1. `php artisan test` - Runs all of your tests a shorthand for running phpunit
2. `php artisan test suiteName` - Runs all of the tests within a folder with `suiteName` within your tests directory in a standard Laravel 4 installation.
