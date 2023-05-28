Laravel Concepts Assessment
This repository contains solutions to the Laravel Concepts Assessment, covering various concepts and features of the Laravel framework.

Task 1: Request Validation
Implement request validation for a registration form that contains the following fields: name, email, and password. Validate the following rules:

name: required, string, minimum length 2.
email: required, valid email format.
password: required, string, minimum length 8.
Solution
bash
Copy code
php artisan make:request RegistrationRequest
Create a new request class called RegistrationRequest using the make:request artisan command. Inside the RegistrationRequest class, define the validation rules for the registration form fields.

Task 2: Request Redirect
Create a route /home that redirects to /dashboard using a 302 redirect.

Solution
bash
Copy code
// Add the following route in routes/web.php
Route::get('/home', function () {
    return redirect('/dashboard');
});
Define a route for /home in the routes/web.php file. Use the redirect() function to redirect to /dashboard with a 302 status code.

Task 3: Global Middleware
Create a global middleware that logs the request method and URL for every incoming request. Log the information to the Laravel log file.

Solution
bash
Copy code
php artisan make:middleware LogRequestMiddleware
Create a new middleware class called LogRequestMiddleware using the make:middleware artisan command. Inside the handle() method of the middleware, log the request method and URL using the Laravel logging system.

Task 4: Route Middleware
Create a route group for authenticated users only. This group should include routes for /profile and /settings. Apply a middleware called AuthMiddleware to the route group to ensure only authenticated users can access these routes.

Solution
bash
Copy code
// Add the following route group in routes/web.php
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', 'ProfileController@index');
    Route::get('/settings', 'SettingsController@index');
});
Define a route group using the middleware() method in the routes/web.php file. Inside the group, specify the auth middleware to ensure only authenticated users can access the routes /profile and /settings. Map the routes to their respective controllers and methods.

Task 5: Controller
Create a controller called ProductController that handles CRUD operations for a resource called Product. Implement the following methods:

index(): Display a list of all products.
create(): Display the form to create a new product.
store(): Store a newly created product.
edit($id): Display the form to edit an existing product.
update($id): Update the specified product.
destroy($id): Delete the specified product.
Solution
bash
Copy code
php artisan make:controller ProductController --resource
Create a resource controller called ProductController using the make:controller artisan command with the --resource option. This will generate the controller file with the necessary methods for CRUD operations.

Task 6: Single Action Controller
Create a single action controller called ContactController that handles a contact form submission. Implement the __invoke() method to process the form submission and send an email to a predefined address with the submitted data.

Solution
bash
Copy code
php artisan make:controller ContactController --invokable
Create a single action controller called ContactController using the make:controller artisan command with the --invokable
