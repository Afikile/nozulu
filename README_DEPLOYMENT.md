# Quick Deploy Package for beta.nozuluandngonyama.co.za

This folder contains everything needed to deploy the Nozulu & Ngonyama website.

## Files Included

1. **DEPLOYMENT_GUIDE.md** - Complete step-by-step deployment instructions
2. **DEPLOYMENT_CHECKLIST.md** - Checklist to track deployment progress
3. **.env.production** - Production environment configuration template
4. **deploy.sh** - Automated deployment script for server
5. **create-admin.sh** - Script to create admin user

## Quick Start

### Step 1: Get Your Database Credentials
1. Log into your hosting control panel
2. Create a MySQL database named `nozulu_beta`
3. Create a database user with a strong password
4. Note down: database name, username, password, and host

### Step 2: Upload Files to Server
Upload ALL project files to your server EXCEPT:
- `node_modules/` folder
- `.env` file (you'll create a new one)
- `.git/` folder

### Step 3: Configure on Server
1. Copy `.env.production` to `.env` on the server
2. Edit `.env` and add your database credentials
3. Run: `./deploy.sh`
4. Run: `./create-admin.sh`

### Step 4: Visit Your Site
Open http://beta.nozuluandngonyama.co.za in your browser

## Need Help?

Read the detailed guides:
- **DEPLOYMENT_GUIDE.md** - Full instructions with troubleshooting
- **DEPLOYMENT_CHECKLIST.md** - Step-by-step checklist

## Support

For hosting-specific issues, contact your hosting provider's support team with any error messages from `storage/logs/laravel.log`
