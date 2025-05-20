# Laravel Authentication

This is a basic example of user **registration** and **login** using [Laravel](https://laravel.com) and [Tailwind CSS](https://tailwindcss.com).

## Features

- User registration  
- User login and logout  
- Form validation  
- Tailwind CSS styling

## Requirements

- PHP >= 8.1  
- Composer  
- MySQL or other supported database  
- Node.js and NPM (for frontend)

## Installation

```bash
git clone https://github.com/gustavocoimbradev/laravel-authentication.git
cd laravel-authentication
```

### 1. Install dependencies

```bash
composer install
npm install && npm run dev
```

### 2. Environment setup

Copy the `.env` file:

```bash
cp .env.example .env
```

Generate app key:

```bash
php artisan key:generate
```

### 3. Configure database

Edit the `.env` file with your DB credentials if needed:

```
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

Or simply use SQLite as configured:
DB_CONNECTION=sqlite

### 4. Run migrations

```bash
php artisan migrate
```

### 5. Start the server

```bash
php artisan serve
```

Open your browser and go to `http://localhost:8000`.

## License

This project is open-source and free to use.
