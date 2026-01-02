# Admin Access Guide
## Nozulu and Ngonyama Trading Enterprises - Backend Dashboard

### 🔐 Discreet Admin Login

The admin login is **hidden from public view** to maintain a clean, professional website appearance. Regular visitors won't see any login links or admin access points.

---

## Admin Access URLs

### Primary Login (Discreet)
```
http://localhost:8000/backend-access
```
This URL redirects to the login page. Bookmark this URL for easy access.

### Direct Login URL
```
http://localhost:8000/login
```

### Admin Dashboard
```
http://localhost:8000/dashboard
```
After logging in, you'll be redirected here automatically.

---

## Default Admin Credentials

```
Email: admin@nozulu-ngonyama.com
Password: admin123
```

**⚠️ IMPORTANT:** Change this password immediately after first login!

---

## Admin Dashboard Features

### 1. **Dashboard Home** (`/dashboard`)
- Quick statistics overview
- Total projects count
- Electrical projects count
- Construction projects count
- Quick access cards to all management areas

### 2. **Manage Projects** (`/admin/projects`)
- ✅ View all projects
- ✅ Add new projects
- ✅ Edit existing projects
- ✅ Delete projects
- ✅ Upload up to 4 images per project
- ✅ Set project category (Electrical/Construction)
- ✅ Manage project details:
  - Name
  - Duration
  - Client
  - Consultant
  - Cost

### 3. **Website Settings** (`/admin/settings`)
Edit all website content from one central location:

#### Company Information
- Company Name
- Tagline (displayed on homepage hero)

#### About Us Page Content
- About Us description
- Mission Statement

#### Contact Information
- Phone Number
- Email Address
- Physical Address

All changes are instantly reflected on the public website!

### 4. **Profile Settings** (`/profile`)
- Update your admin name
- Change your email
- Update your password

---

## How to Access the Admin Panel

### Method 1: Bookmark URL (Recommended)
1. Bookmark: `http://localhost:8000/backend-access`
2. Click bookmark when you need to login
3. Enter your credentials

### Method 2: Type URL Directly
1. In your browser, type: `http://localhost:8000/login`
2. Enter your credentials

### Method 3: After Logout
After logging out, the system will redirect you to the homepage. Simply visit the backend-access URL again.

---

## Security Features

✅ **No Public Login Links** - The login page is not linked anywhere on the public website
✅ **Authentication Required** - All admin pages require login
✅ **Session Management** - Automatic logout after inactivity
✅ **Password Protection** - Strong password hashing
✅ **Discreet Access** - No indication of admin panel to regular visitors

---

## Common Admin Tasks

### Adding a New Project
1. Login to admin panel
2. Click "Manage Projects" or go to `/admin/projects`
3. Click "Add New Project" button
4. Fill in all required fields
5. Upload up to 4 images
6. Click "Create Project"

### Editing Website Content
1. Login to admin panel
2. Click "Website Settings" or go to `/admin/settings`
3. Update any content you want to change
4. Click "Save All Settings"
5. Changes appear immediately on the website

### Changing Contact Information
1. Go to Website Settings (`/admin/settings`)
2. Scroll to "Contact Information" section
3. Update phone, email, or address
4. Click "Save All Settings"

### Updating Company Name or Tagline
1. Go to Website Settings (`/admin/settings`)
2. Update "Company Name" or "Tagline" fields
3. Click "Save All Settings"
4. Changes appear on homepage and throughout site

---

## For Production Deployment

When deploying to a live website:

1. **Change Admin Password**
   - Login to admin panel
   - Go to Profile Settings
   - Update password to a strong, unique password

2. **Update Backend URL (Optional)**
   You can change `/backend-access` to something more secure:
   - Edit `routes/web.php`
   - Change the route path to something unique
   - Example: `/my-secret-admin-portal-2026`

3. **Remove Default Admin**
   After creating your own admin account:
   ```bash
   php artisan tinker
   User::where('email', 'admin@nozulu-ngonyama.com')->delete();
   ```

4. **Update .env Security**
   - Set `APP_DEBUG=false`
   - Set `APP_ENV=production`
   - Use strong `APP_KEY`

---

## Troubleshooting

### Can't Access Admin Panel
- Check you're using the correct URL: `/backend-access` or `/login`
- Verify your credentials
- Clear browser cookies and try again

### Forgot Password
Run this command to reset:
```bash
cd /path/to/construction-website
php artisan tinker
```
Then:
```php
$user = User::where('email', 'admin@nozulu-ngonyama.com')->first();
$user->password = bcrypt('new_password_here');
$user->save();
```

### Settings Not Saving
- Check you're logged in
- Verify all required fields are filled
- Check for error messages on the form

---

## Quick Reference

| Page | URL | Purpose |
|------|-----|---------|
| Discreet Login | `/backend-access` | Hidden admin access point |
| Direct Login | `/login` | Standard login page |
| Dashboard | `/dashboard` | Admin home with statistics |
| Manage Projects | `/admin/projects` | Project CRUD operations |
| Website Settings | `/admin/settings` | Edit website content |
| Profile | `/profile` | Update admin account |
| View Website | `/` | Public homepage |

---

## Support

For technical support or questions about the admin panel, refer to the main README.md or contact your development team.

**Remember:** The admin access is discreet - regular website visitors will never know it exists! 🔒
