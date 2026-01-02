# Quick Start Guide
## Nozulu and Ngonyama Trading Enterprises Website

### Getting Started (First Time Setup)

1. **Open Terminal and navigate to the project:**
   ```bash
   cd /Users/afikilezubenathisikwebu/Desktop/nozulu/construction-website
   ```

2. **Start the development server:**
   ```bash
   php artisan serve
   ```

3. **Access the website:**
   - **Public Website:** http://localhost:8000
   - **Admin Login:** http://localhost:8000/login

### Admin Credentials

```
Email: admin@nozulu-ngonyama.com
Password: admin123
```

**Important:** Change this password after first login!

### Quick Reference

#### Public Pages
- **Home:** http://localhost:8000
- **About Us:** http://localhost:8000/about
- **Contact Us:** http://localhost:8000/contact
- **Gallery - All Projects:** http://localhost:8000/gallery
- **Gallery - Electrical:** http://localhost:8000/gallery/electrical
- **Gallery - Construction:** http://localhost:8000/gallery/construction

#### Admin Pages (Requires Login)
- **Admin Dashboard:** http://localhost:8000/dashboard (redirects to projects)
- **Manage Projects:** http://localhost:8000/admin/projects
- **Add New Project:** http://localhost:8000/admin/projects/create

### Managing Projects

1. **Login** to the admin panel
2. Click on **"Manage Projects"** in the navigation
3. Click **"Add New Project"** to create a new project
4. Fill in the project details:
   - Project Name
   - Category (Electrical or Construction)
   - Duration
   - Client
   - Consultant
   - Cost
   - Upload up to 4 images
5. Click **"Create Project"** to save

### Editing/Deleting Projects

- Click **"Edit"** next to any project to modify it
- Click **"Delete"** to remove a project (confirmation required)

### Viewing Projects on the Website

- All projects appear in the **Gallery** section
- Use the dropdown menu to filter by category:
  - **Electrical Works**
  - **Construction Works**
- Click the arrow buttons on each project to scroll through images

### Troubleshooting

**If the server stops:**
```bash
cd /Users/afikilezubenathisikwebu/Desktop/nozulu/construction-website
php artisan serve
```

**If you forget the admin password:**
Run the admin creation script again:
```bash
cd /Users/afikilezubenathisikwebu/Desktop/nozulu/construction-website
./create-admin.sh
```

**If images don't show:**
```bash
cd /Users/afikilezubenathisikwebu/Desktop/nozulu/construction-website
php artisan storage:link
```

### Features Summary

✅ **Sticky Navigation Bar** - Stays at top while scrolling
✅ **Responsive Design** - Works on mobile and desktop
✅ **Secure Admin Panel** - Only authenticated users can manage content
✅ **Image Gallery** - 4 scrollable images per project
✅ **Project Categories** - Separate electrical and construction work
✅ **Full CRUD** - Create, Read, Update, Delete projects
✅ **Easy Management** - Simple interface for adding/editing projects

### Support

For issues or questions, refer to the main README.md file or contact the development team.
