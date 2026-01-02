# Deployment Checklist
## Nozulu and Ngonyama Trading Enterprises Website

### Before Deploying to Production

- [ ] Update `.env` file with production database credentials
- [ ] Change `APP_ENV=production` in `.env`
- [ ] Change `APP_DEBUG=false` in `.env`
- [ ] Update `APP_URL` to your production domain
- [ ] Generate a new application key: `php artisan key:generate`
- [ ] Run database migrations: `php artisan migrate --force`
- [ ] Create storage link: `php artisan storage:link`
- [ ] Build assets for production: `npm run build`
- [ ] Clear and cache configuration: `php artisan config:cache`
- [ ] Clear and cache routes: `php artisan route:cache`
- [ ] Clear and cache views: `php artisan view:cache`
- [ ] Set proper file permissions on `storage/` and `bootstrap/cache/`
- [ ] Create admin user with secure password
- [ ] Update contact information in [contact.blade.php](resources/views/contact.blade.php)
- [ ] Test all features in production environment
- [ ] Set up SSL certificate (HTTPS)
- [ ] Configure backup strategy for database and images
- [ ] Set up email configuration for contact form (if implementing)

### Security Reminders

✅ **Never commit `.env` file to version control**
✅ **Use strong passwords for admin accounts**
✅ **Keep Laravel and dependencies updated**
✅ **Enable HTTPS in production**
✅ **Regular backups of database and uploads**

### Maintenance Commands

```bash
# Clear all cache
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Optimize for production
php artisan optimize

# Run migrations
php artisan migrate

# Create storage link
php artisan storage:link
```

### Contact Information Update

Before going live, update the contact information in:
- [resources/views/contact.blade.php](resources/views/contact.blade.php)

Replace placeholder text:
- Phone number
- Email address
- Physical address

### Customization Tips

**Logo/Branding:**
- Update company name in navbar (layouts/main.blade.php)
- Add company logo if needed

**Colors:**
- Primary color: `#f59e0b` (amber/orange)
- Dark color: `#1f2937` (dark gray)
- Update in CSS if different branding needed

**Content:**
- About page: Update company history/mission
- Home page: Customize service descriptions
- Contact page: Add map embed if needed
