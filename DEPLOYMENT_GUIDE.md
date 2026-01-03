# Deployment Guide for beta.nozuluandngonyama.co.za

## Prerequisites

Before starting, ensure you have:
- Access to your hosting server (SSH/FTP/cPanel)
- Database credentials from your hosting provider
- Domain pointing to your server IP address

## Step-by-Step Deployment Process

### Step 1: Prepare Your Local Project

1. **Build production assets:**
```bash
cd /Users/afikilezubenathisikwebu/Desktop/nozulu
npm run build
```

2. **Clear local caches:**
```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
```

### Step 2: Create Database on Server

1. Log into your hosting control panel (cPanel/Plesk)
2. Create a new MySQL database:
   - Database name: `nozulu_beta`
   - Database user: Create a user with a strong password
   - Grant ALL privileges to the user on this database
3. **Note down these credentials** - you'll need them for the .env file

### Step 3: Upload Files to Server

#### Option A: Using cPanel File Manager
1. Compress your project into a zip file (excluding node_modules and vendor)
2. Upload to your server's web directory
3. Extract the files

#### Option B: Using FTP/SFTP
1. Connect to your server using an FTP client (FileZilla, Cyberduck)
2. Upload all files to the web root directory (usually `public_html` or `www`)
3. **Important folder structure on server:**
   ```
   /home/yourusername/
   ├── public_html/          (This is where public/ contents go)
   └── laravel/              (This is where everything else goes)
       ├── app/
       ├── bootstrap/
       ├── config/
       ├── database/
       ├── resources/
       ├── routes/
       ├── storage/
       └── vendor/
   ```

#### Option C: Using Git (Recommended)
```bash
# On your server via SSH
cd /home/yourusername/
git clone YOUR_REPOSITORY_URL laravel
cd laravel
```

### Step 4: Configure Server (Important!)

**If you can't move Laravel files outside public_html:**

1. Upload all Laravel files to `public_html`
2. Move the contents of the `public` folder to the root of `public_html`
3. Delete the now-empty `public` folder
4. Edit `index.php` in `public_html`:

Find this line:
```php
require __DIR__.'/../vendor/autoload.php';
```
Change to:
```php
require __DIR__.'/vendor/autoload.php';
```

Find this line:
```php
$app = require_once __DIR__.'/../bootstrap/app.php';
```
Change to:
```php
$app = require_once __DIR__.'/bootstrap/app.php';
```

### Step 5: Set Up Environment File

1. Copy `.env.production` to `.env` on your server
2. Edit `.env` with your actual database credentials:
```bash
nano .env  # or use cPanel file editor
```

Update these values:
```
DB_DATABASE=nozulu_beta
DB_USERNAME=your_actual_username
DB_PASSWORD=your_actual_password
DB_HOST=localhost  # or your hosting provider's database host
```

3. Generate a new application key:
```bash
php artisan key:generate
```

### Step 6: Install Dependencies

```bash
# Install Composer dependencies
composer install --optimize-autoloader --no-dev

# If npm/node is available, build assets
npm install
npm run build
```

### Step 7: Set Up Database

```bash
# Run migrations to create tables
php artisan migrate --force

# Create storage link
php artisan storage:link
```

### Step 8: Create Admin User

```bash
chmod +x create-admin.sh
./create-admin.sh
```

Or manually:
```bash
php artisan tinker
```
Then in tinker:
```php
$user = new App\Models\User();
$user->name = 'Admin';
$user->email = 'admin@nozuluandngonyama.co.za';
$user->password = bcrypt('YourSecurePassword123!');
$user->email_verified_at = now();
$user->save();
exit
```

### Step 9: Set File Permissions

```bash
# Set correct permissions
chmod -R 755 storage bootstrap/cache
chown -R www-data:www-data storage bootstrap/cache  # or your web server user
```

Or via cPanel:
- Set `storage/` folders to 755
- Set `bootstrap/cache/` to 755

### Step 10: Optimize for Production

```bash
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize
```

### Step 11: Configure Web Server

#### For Apache (.htaccess should work automatically)
Create/verify `.htaccess` in your public folder:
```apache
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^(.*)$ public/$1 [L]
</IfModule>
```

#### For Nginx
Your hosting provider should configure this, but the config should look like:
```nginx
server {
    listen 80;
    server_name beta.nozuluandngonyama.co.za;
    root /path/to/your/laravel/public;

    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";

    index index.php;

    charset utf-8;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }

    error_page 404 /index.php;

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
```

### Step 12: Test Your Deployment

1. Visit http://beta.nozuluandngonyama.co.za
2. Test all pages:
   - Home page
   - About Us
   - Contact Us
   - Gallery pages
3. Test admin access:
   - Go to http://beta.nozuluandngonyama.co.za/backend-access
   - Login with your admin credentials
   - Test project management
   - Test settings management

### Step 13: Set Up SSL Certificate (HTTPS)

**If using cPanel:**
1. Go to SSL/TLS in cPanel
2. Use "Let's Encrypt" or "AutoSSL"
3. Enable SSL for beta.nozuluandngonyama.co.za

**Update .env after SSL is active:**
```
APP_URL=https://beta.nozuluandngonyama.co.za
```

Then run:
```bash
php artisan config:cache
```

## Quick Deploy Script

Create this script on your server as `deploy.sh`:

```bash
#!/bin/bash

echo "Starting deployment..."

# Pull latest changes (if using Git)
git pull origin main

# Install/update dependencies
composer install --optimize-autoloader --no-dev

# Build assets
npm install
npm run build

# Run migrations
php artisan migrate --force

# Clear and cache everything
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan optimize

# Set permissions
chmod -R 755 storage bootstrap/cache

echo "Deployment complete!"
```

Make it executable:
```bash
chmod +x deploy.sh
```

## Troubleshooting

### Issue: 500 Internal Server Error
- Check `.env` file is configured correctly
- Check `storage/` and `bootstrap/cache/` permissions
- Check error logs: `storage/logs/laravel.log`

### Issue: Database Connection Error
- Verify database credentials in `.env`
- Ensure database exists
- Check if database host is correct (might be localhost or an IP)

### Issue: Missing Assets
- Run `npm run build` locally
- Upload the `public/build/` folder to server
- Clear cache: `php artisan cache:clear`

### Issue: Routes Not Working
- Check `.htaccess` file exists in public folder
- Ensure mod_rewrite is enabled on Apache
- Clear route cache: `php artisan route:clear`

## Backup Strategy

### Database Backup
```bash
# Create backup
mysqldump -u username -p nozulu_beta > backup_$(date +%Y%m%d).sql

# Restore backup
mysql -u username -p nozulu_beta < backup_20260102.sql
```

### Files Backup
```bash
# Backup uploaded images and files
tar -czf storage_backup_$(date +%Y%m%d).tar.gz storage/app/public/
```

## Maintenance Mode

When updating:
```bash
# Enable maintenance mode
php artisan down --secret="your-secret-token"

# Update files, run migrations, etc.

# Disable maintenance mode
php artisan up
```

Access site during maintenance: `http://beta.nozuluandngonyama.co.za/your-secret-token`

## Support Contacts

For hosting-specific issues:
- Contact your hosting provider's support
- Provide them with error messages from `storage/logs/laravel.log`

## Security Checklist

- ✅ `.env` file is not publicly accessible
- ✅ `APP_DEBUG=false` in production
- ✅ Strong admin password
- ✅ SSL certificate installed
- ✅ Regular backups configured
- ✅ File permissions set correctly
- ✅ Keep Laravel and dependencies updated

## Post-Deployment

After successful deployment:
1. Remove or secure `.env.production` file
2. Document your database credentials safely
3. Set up regular backup schedule
4. Monitor error logs regularly
5. Test all functionality thoroughly
