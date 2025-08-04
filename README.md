# MAK Law Associates - Laravel Website

A professional law firm website built with Laravel for MAK Law Associates, featuring comprehensive legal services information, team profiles, and contact forms.

## Features

- **Professional Design**: Modern, responsive design with Bootstrap 5
- **Multiple Pages**: Home, About, Practice Areas, Team, and Contact pages
- **Contact Form**: Functional contact form with validation
- **Team Profiles**: Detailed information about the legal team
- **Practice Areas**: Comprehensive coverage of legal services
- **Office Locations**: Information about main office and sub-offices
- **Mobile Responsive**: Optimized for all device sizes

## Technology Stack

- **Backend**: Laravel 10.x
- **Frontend**: Bootstrap 5, Font Awesome, Google Fonts
- **PHP**: 8.2+
- **Database**: MySQL/SQLite (configurable)

## Installation

### Prerequisites

- PHP 8.2 or higher
- Composer
- Node.js and NPM (for asset compilation)

### Setup Instructions

1. **Clone the repository**
   ```bash
   git clone <repository-url>
   cd mak-law-associates
   ```

2. **Install PHP dependencies**
   ```bash
   composer install
   ```

3. **Install Node.js dependencies**
   ```bash
   npm install
   ```

4. **Environment setup**
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. **Configure database** (optional for basic setup)
   ```bash
   # Edit .env file with your database credentials
   # For SQLite (recommended for development):
   touch database/database.sqlite
   # Update .env: DB_CONNECTION=sqlite, DB_DATABASE=/absolute/path/to/database.sqlite
   ```

6. **Run migrations** (if using database)
   ```bash
   php artisan migrate
   ```

7. **Compile assets**
   ```bash
   npm run dev
   # or for production:
   npm run build
   ```

8. **Start the development server**
   ```bash
   php artisan serve
   ```

9. **Access the website**
   Open your browser and navigate to `http://localhost:8000`

## Project Structure

```
mak-law-associates/
├── app/Http/Controllers/     # Controllers
│   ├── HomeController.php
│   ├── AboutController.php
│   ├── PracticeAreasController.php
│   ├── TeamController.php
│   └── ContactController.php
├── resources/views/          # Blade templates
│   ├── layouts/
│   │   └── app.blade.php     # Main layout
│   ├── home.blade.php        # Home page
│   ├── about.blade.php       # About page
│   ├── practice-areas.blade.php
│   ├── team.blade.php        # Team page
│   └── contact.blade.php     # Contact page
├── routes/
│   └── web.php              # Web routes
└── public/                  # Public assets
```

## Pages

### Home Page (`/`)
- Hero section with firm introduction
- About summary
- Practice areas overview
- Founder profile
- Contact information

### About Page (`/about`)
- Detailed firm information
- Philosophy and values
- Expertise areas
- Founder's complete profile
- Why choose us section

### Practice Areas (`/practice-areas`)
- Comprehensive legal services
- Detailed descriptions of each practice area
- Specialized expertise
- Contact CTA

### Team Page (`/team`)
- Founder profile
- Associate profiles
- Sub-office information
- Contact details for each office

### Contact Page (`/contact`)
- Contact form with validation
- Office locations and hours
- Multiple contact methods
- Emergency contact information

## Customization

### Styling
The website uses CSS custom properties for easy theming:
- Primary color: `#1a365d`
- Secondary color: `#c53030`
- Accent color: `#f7fafc`

### Content
Update the following files to modify content:
- `resources/views/home.blade.php` - Home page content
- `resources/views/about.blade.php` - About page content
- `resources/views/practice-areas.blade.php` - Practice areas
- `resources/views/team.blade.php` - Team information
- `resources/views/contact.blade.php` - Contact information

### Contact Form
The contact form is handled by `ContactController@submit`. You can:
- Add email functionality using Laravel's Mail facade
- Store submissions in database
- Add additional validation rules

## Deployment

### Production Setup

1. **Environment configuration**
   ```bash
   # Set APP_ENV=production in .env
   # Configure database for production
   # Set APP_DEBUG=false
   ```

2. **Optimize for production**
   ```bash
   php artisan config:cache
   php artisan route:cache
   php artisan view:cache
   npm run build
   ```

3. **Web server configuration**
   - Point document root to `public/` directory
   - Configure URL rewriting for Laravel
   - Set proper permissions

### Recommended Hosting
- Shared hosting with PHP 8.2+ support
- VPS with LAMP/LEMP stack
- Cloud platforms (AWS, DigitalOcean, etc.)

## Support

For technical support or customization requests, please contact the development team.

## License

This project is proprietary software developed for MAK Law Associates.

---

**MAK Law Associates**  
Advocates | Legal Consultants | Corporate Advisors  
Suite # 612, 6th Floor, Panorama Centre #1, Fatima Jinnah Road, Saddar, Karachi, Pakistan  
📞 +92 21 35651637-38 | 📱 0321-2302173  
Email: mukhtarahmed.lawassociates@gmail.com
