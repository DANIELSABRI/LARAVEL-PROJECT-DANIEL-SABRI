# 🚀 Job Portal: Professional UI/UX Overhaul

A high-performance, aesthetically premium Job Portal built with Laravel. This project has been transformed from a basic CRUD application into a production-ready recruitment ecosystem with a focus on visual excellence and seamless user workflows.

## ✨ Core Features

### 🎨 Design & UX
- **Premium Aesthetics**: Utilizes **Outfit** (headings) and **Inter** (body) typography for a modern look.
- **Blade Component System**: Custom-built reusable components including `x-card`, `x-button`, `x-badge`, and `x-table`.
- **Responsive Layout**: Fully mobile-optimized design with a glassmorphic navbar and refined footer.

### 🏠 Homepage
- **Dynamic Hero Section**: High-impact introduction with an integrated job search bar.
- **Featured Jobs**: Showcases 6-10 curated job opportunities.
- **Category Explorer**: Fast-track navigation via top industry categories.

### 🛠 Role-Based Dashboards
- **Admin**: System management center with user growth tracking and job moderation.
- **Employer**: Recruitment hub for job posting and applicant management.
- **Job Seeker**: Career center with application tracking and profile completion metrics.

### 📄 Public Pages
- Professional **About Us**, **Terms of Service**, and **Privacy Policy**.
- **Functional Contact Form**: Direct-to-database inquiry storage.

## 📊 Production-Scale Data
The project includes enriched seeders providing:
- **50+** Realistic Job Listings
- **12** Industry-Leading Employers
- **30** Diverse Job Seekers
- Automated category and job type seeding.

## 🛠 Tech Stack
- **Framework**: Laravel 11.x
- **Frontend**: Blade, Vanilla CSS (with Tailwind utility classes)
- **Database**: SQLite (Production-ready seeding)
- **Fonts**: Google Fonts (Outfit, Inter)

## 🚦 Getting Started

1. **Clone & Install**:
   ```bash
   composer install
   npm install
   ```

2. **Setup Database**:
   ```bash
   php artisan migrate:fresh --seed
   ```

3. **Run Application**:
   ```bash
   php artisan serve
   ```

---
*Crafted with passion for professional excellence.*
