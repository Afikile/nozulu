#!/bin/bash

# Quick deployment preparation script
# Run this before uploading to server

echo "=========================================="
echo "Pre-Deployment Preparation"
echo "=========================================="
echo ""

# Check if we're in Laravel directory
if [ ! -f "artisan" ]; then
    echo "❌ Error: Not in Laravel directory"
    exit 1
fi

echo "📦 Building production assets..."
npm run build

if [ $? -ne 0 ]; then
    echo "⚠️  Asset build failed. Fix errors and try again."
    exit 1
fi

echo ""
echo "✅ Assets built successfully!"
echo ""
echo "📋 Next Steps:"
echo "----------------------------------------"
echo "1. Create database on your hosting server:"
echo "   - Database name: nozulu_beta"
echo "   - Create user with strong password"
echo ""
echo "2. Upload these files to your server:"
echo "   ✅ All files EXCEPT:"
echo "   ❌ node_modules/"
echo "   ❌ .env (create new on server)"
echo "   ❌ .git/"
echo ""
echo "3. On server, create .env file:"
echo "   - Copy .env.production to .env"
echo "   - Update database credentials"
echo ""
echo "4. Run deployment script on server:"
echo "   ./deploy.sh"
echo ""
echo "5. Create admin user:"
echo "   ./create-admin.sh"
echo ""
echo "6. Visit: http://beta.nozuluandngonyama.co.za"
echo ""
echo "📚 Read DEPLOYMENT_GUIDE.md for detailed instructions"
echo "=========================================="
