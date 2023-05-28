<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Laravel Concepts Assessment

This repository contains solutions to the Laravel Concepts Assessment, covering various concepts and features of the Laravel framework.

## Task 1: Request Validation

Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:

- name: required, string, minimum length 2.
- email: required, valid email format.
- password: required, string, minimum length 8.

php artisan make:request RegistrationRequest

## Task 2: Request Redirect

Create a route /home that redirects to /dashboard using a 302 redirect.

// Add the following route in routes/web.php

Route::get('/home', function () {
    return redirect('/dashboard');
});

Define a route for /home in the routes/web.php file. Use the redirect() function to redirect to /dashboard with a 302 status code.

## Task 3: Global Middleware

Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.

php artisan make:middleware LogRequestMiddleware


## Task 4: Route Middleware

// Add the following route group in routes/web.php

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', 'ProfileController@index');
    Route::get('/settings', 'SettingsController@index');
});


## Task 5: Controller

php artisan make:controller ProductController --resource


## Task 6: Single Action Controller

php artisan make:controller ContactController --invokable

## Created by Md Nur Alam Prodhan
