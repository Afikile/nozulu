# Nozulu and Ngonyama Trading Enterprises Website

A Laravel-based construction website for managing building and electrical construction projects.

## Features

### Public Website
- **Sticky Navigation Bar** with Home, About Us, Contact Us, and Gallery dropdown
- **Gallery** with two categories:
  - Electrical Works
  - Construction Works
- **Project Display** with:
  - 4 scrollable images per project
  - Project name, duration, client, consultant, and cost
  - Responsive design

### Admin Panel
- Secure authentication (only administrators can login)
- **CRUD Operations** for projects:
  - Create new projects
  - Edit existing projects
  - Delete projects
  - View all projects
- Image upload functionality (up to 4 images per project)

## Installation

1. **Navigate to the project directory:**
   ```bash
   cd construction-website
   ```

2. **Install dependencies:**
   ```bash
   composer install
   npm install
   ```

3. **Set up environment file:**
   The .env file is already configured with SQLite database.

4. **Run migrations:**
   ```bash
   php artisan migrate
   ```

5. **Create storage symlink:**
   ```bash
   php artisan storage:link
   ```

6. **Build frontend assets:**
   ```bash
   npm run build
   ```

## Running the Application

1. **Start the development server:**
   ```bash
   php artisan serve
   ```

2. **Visit the website:**
   - Public website: http://localhost:8000
   - Admin login: http://localhost:8000/login

## Creating an Admin User

To create an admin account, use Laravel Tinker:

```bash
php artisan tinker
```

Then run:
```php
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@nozulu-ngonyama.com',
    'password' => bcrypt('password123')
]);
```

## Admin Access

1. Go to http://localhost:8000/login
2. Login with your admin credentials
3. Manage projects from the admin dashboard

## Project Structure

- `/resources/views/layouts/main.blade.php` - Main public layout with sticky navbar
- `/resources/views/home.blade.php` - Home page
- `/resources/views/about.blade.php` - About page
- `/resources/views/contact.blade.php` - Contact page
- `/resources/views/gallery.blade.php` - Gallery with scrollable images
- `/resources/views/admin/projects/` - Admin CRUD views
- `/app/Http/Controllers/HomeController.php` - Public pages controller
- `/app/Http/Controllers/Admin/ProjectController.php` - Admin CRUD controller
- `/app/Models/Project.php` - Project model

## Technologies Used

- Laravel 12
- Laravel Breeze (Authentication)
- Tailwind CSS
- SQLite Database
- Blade Templates

## Company Information

**Nozulu and Ngonyama Trading Enterprises**
- Specialists in Building and Electrical Construction
- Professional construction and electrical services
- Quality workmanship and reliable service

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

