#!/bin/bash

# Deployment script for beta.nozuluandngonyama.co.za
# Run this script on your server after uploading files

echo "================================================"
echo "Nozulu & Ngonyama Deployment Script"
echo "================================================"
echo ""

# Check if we're in the right directory
if [ ! -f "artisan" ]; then
    echo "❌ Error: artisan file not found. Please run this script from the Laravel root directory."
    exit 1
fi

echo "📦 Installing Composer dependencies..."
composer install --optimize-autoloader --no-dev

echo ""
echo "🔑 Checking application key..."
if grep -q "APP_KEY=$" .env || grep -q "APP_KEY=\"\"" .env; then
    echo "Generating new application key..."
    php artisan key:generate --force
fi

echo ""
echo "📊 Running database migrations..."
php artisan migrate --force

echo ""
echo "🔗 Creating storage link..."
php artisan storage:link

echo ""
echo "🎨 Building frontend assets..."
if command -v npm &> /dev/null; then
    npm install
    npm run build
else
    echo "⚠️  npm not found. Please build assets manually: npm run build"
fi

echo ""
echo "🗂️  Setting file permissions..."
chmod -R 755 storage bootstrap/cache
echo "✅ Permissions set (you may need to adjust owner with chown)"

echo ""
echo "⚡ Optimizing application..."
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

echo ""
echo "================================================"
echo "✅ Deployment Complete!"
echo "================================================"
echo ""
echo "Next steps:"
echo "1. Visit http://beta.nozuluandngonyama.co.za to verify"
echo "2. Create admin user: ./create-admin.sh"
echo "3. Set up SSL certificate for HTTPS"
echo "4. Update APP_URL in .env if using HTTPS"
echo ""
echo "For troubleshooting, check: storage/logs/laravel.log"
echo "================================================"
