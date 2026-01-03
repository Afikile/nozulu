# Pre-Deployment Checklist for beta.nozuluandngonyama.co.za

## Before Uploading to Server

### Local Preparation
- [x] Production assets built (`npm run build`)
- [x] `.env.production` file created with production settings
- [x] Deployment scripts created and made executable
- [ ] Test everything works locally
- [ ] Commit all changes to Git (if using version control)

### Files to Upload
Upload ALL files EXCEPT:
- ❌ `.env` (create new on server)
- ❌ `node_modules/` folder
- ❌ `.git/` folder (unless using Git deployment)
- ✅ Everything else including `vendor/` folder

### Required Files Checklist
- [x] `public/nozlogo.jpg` - Logo file
- [x] `public/build/` - Built assets
- [x] `vendor/` - Composer dependencies
- [x] `deploy.sh` - Deployment script
- [x] `create-admin.sh` - Admin creation script

## Server Setup

### 1. Database Setup
- [ ] Create MySQL database: `nozulu_beta`
- [ ] Create database user with strong password
- [ ] Grant ALL privileges to user
- [ ] Note credentials:
  - Database: ________________
  - Username: ________________
  - Password: ________________
  - Host: ________________ (usually localhost)

### 2. File Upload
Choose your method:
- [ ] Method A: FTP/SFTP (FileZilla, Cyberduck)
- [ ] Method B: cPanel File Manager
- [ ] Method C: Git clone (if repository is set up)

### 3. Server Configuration
- [ ] Files uploaded to correct directory
- [ ] `.env` file created on server
- [ ] Database credentials added to `.env`
- [ ] Run: `php artisan key:generate`

### 4. Dependencies & Database
- [ ] Run: `composer install --no-dev --optimize-autoloader`
- [ ] Run: `php artisan migrate --force`
- [ ] Run: `php artisan storage:link`

### 5. Permissions
- [ ] Set `storage/` permissions to 755
- [ ] Set `bootstrap/cache/` permissions to 755
- [ ] Set correct ownership (www-data or your web server user)

### 6. Optimization
- [ ] Run: `php artisan config:cache`
- [ ] Run: `php artisan route:cache`
- [ ] Run: `php artisan view:cache`
- [ ] Run: `php artisan optimize`

Or simply run:
- [ ] `./deploy.sh` (runs all deployment commands)

### 7. Create Admin Account
- [ ] Run: `./create-admin.sh`
- [ ] Or manually create admin user via tinker
- [ ] Save admin credentials securely:
  - Email: ________________
  - Password: ________________

### 8. Testing
- [ ] Visit: http://beta.nozuluandngonyama.co.za
- [ ] Test home page loads
- [ ] Test About Us page
- [ ] Test Contact Us page
- [ ] Test Gallery pages
- [ ] Test admin login: http://beta.nozuluandngonyama.co.za/backend-access
- [ ] Test admin can add projects
- [ ] Test admin can update settings
- [ ] Check logo displays correctly
- [ ] Test on mobile devices

### 9. SSL Certificate (HTTPS)
- [ ] Install SSL certificate (Let's Encrypt via cPanel)
- [ ] Update `.env`: `APP_URL=https://beta.nozuluandngonyama.co.za`
- [ ] Run: `php artisan config:cache`
- [ ] Test HTTPS works
- [ ] Ensure HTTP redirects to HTTPS

### 10. Security Final Check
- [ ] `APP_ENV=production` in `.env`
- [ ] `APP_DEBUG=false` in `.env`
- [ ] `.env` file not publicly accessible
- [ ] Strong admin password
- [ ] Regular backups configured

## Quick Server Commands Reference

```bash
# SSH into server
ssh user@beta.nozuluandngonyama.co.za

# Navigate to Laravel directory
cd /path/to/laravel

# Deploy/Update
./deploy.sh

# Create admin
./create-admin.sh

# Check logs
tail -f storage/logs/laravel.log

# Clear all cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Maintenance mode
php artisan down
php artisan up
```

## Emergency Contacts

### Hosting Provider Support
- Provider: ________________
- Support URL: ________________
- Account Login: ________________

### Domain Registrar
- Registrar: ________________
- Account Login: ________________

## Backup Information

### Database Backup Command
```bash
mysqldump -u [username] -p nozulu_beta > backup_$(date +%Y%m%d).sql
```

### Restore Database
```bash
mysql -u [username] -p nozulu_beta < backup_20260102.sql
```

### Files Backup
```bash
tar -czf storage_backup_$(date +%Y%m%d).tar.gz storage/app/public/
```

## Post-Deployment

- [ ] Monitor error logs for first 24 hours
- [ ] Test all features thoroughly
- [ ] Share site with stakeholders
- [ ] Set up monitoring/uptime checker
- [ ] Document any custom configurations
- [ ] Schedule regular backups

## Notes

_Add any deployment-specific notes here_

---

Date Deployed: ________________
Deployed By: ________________
Server IP: ________________
