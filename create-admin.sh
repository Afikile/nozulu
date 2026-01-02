#!/bin/bash

echo "=========================================="
echo "Nozulu & Ngonyama Trading Enterprises"
echo "Admin User Setup"
echo "=========================================="
echo ""

# Navigate to project directory
cd /Users/afikilezubenathisikwebu/Desktop/nozulu/construction-website

# Create admin user using artisan tinker
php artisan tinker --execute="
\App\Models\User::create([
    'name' => 'Admin',
    'email' => 'admin@nozulu-ngonyama.com',
    'password' => bcrypt('admin123')
]);
echo 'Admin user created successfully!\n';
echo 'Email: admin@nozulu-ngonyama.com\n';
echo 'Password: admin123\n';
"

echo ""
echo "=========================================="
echo "Admin user has been created!"
echo "Email: admin@nozulu-ngonyama.com"
echo "Password: admin123"
echo ""
echo "IMPORTANT: Change this password after first login!"
echo "=========================================="
