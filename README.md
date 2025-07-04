<img src="https://github.com/user-attachments/assets/9bb08b29-b35b-4094-b49d-6642bd7ce705" alt="Imagem" height="80">

## About the project

This is a basic user authentication system built with Laravel. Created for portfolio purposes to practice auth flow and form validation.

#### Features

- User registration  
- User login and logout  
- Form validation  
- Tailwind CSS styling  

#### Technologies

- Laravel  
- PHP  
- Tailwind CSS  
- SQLite  

## Main files

#### Routes

- [routes/web.php](routes/web.php) - Application route definitions

#### Middlewares

- [app/Http/Middleware/AuthMiddleware.php](app/Http/Middleware/AuthMiddleware.php) - Authentication middleware  

#### Migrations

- [database/migrations/0001_01_01_000000_create_users_table.php](database/migrations/0001_01_01_000000_create_users_table.php) – Creates the `users` table   

#### Models

- [app/Models/User.php](app/Models/User.php) - User model

#### Views

- [resources/views/login/index.blade.php](resources/views/login/index.blade.php) - Login form view  
- [resources/views/register/index.blade.php](resources/views/register/index.blade.php) - Registration form view  
- [resources/views/dashboard/index.blade.php](resources/views/dashboard/index.blade.php) - Dashboard view
- [resources/views/components/button.blade.php](resources/views/components/button.blade.php) - Button component 
- [resources/views/components/alert.blade.php](resources/views/components/alert.blade.php) - Alert messages component
- [resources/views/components/link.blade.php](resources/views/components/link.blade.php) - Link component  
- [resources/views/components/box.blade.php](resources/views/components/box.blade.php) - Box container  
- [resources/views/components/field.blade.php](resources/views/components/field.blade.php) - Form field component
- [resources/views/components/youtube-video.blade.php](resources/views/components/youtube-video.blade.php) - YouTube video embed component
- [resources/views/components/form.blade.php](resources/views/components/form.blade.php) - Form wrapper component 

#### Controllers

- [app/Http/Controllers/LoginController.php](app/Http/Controllers/LoginController.php) - Login controller  
- [app/Http/Controllers/RegisterController.php](app/Http/Controllers/RegisterController.php) - Registration controller  
- [app/Http/Controllers/DashboardController.php](app/Http/Controllers/DashboardController.php) - Dashboard controller  
- [app/Http/Controllers/LogoutController.php](app/Http/Controllers/LogoutController.php) - Logout controller 