<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MAK Law Associates - Advocates | Legal Consultants | Corporate Advisors')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <meta name="description" content="MAK Law Associates is a premier law firm led by Mukhtar Ahmed Kobhar, ASC, specializing in banking, corporate, civil, criminal, and constitutional law.">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700;900&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <!-- AOS Animation Library -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary-color: #1e3a8a;
            --primary-dark: #1e40af;
            --secondary-color: #dc2626;
            --accent-color: #f8fafc;
            --gold-color: #f59e0b;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --gradient-primary: linear-gradient(135deg, #1e3a8a 0%, #3b82f6 100%);
            --gradient-secondary: linear-gradient(135deg, #dc2626 0%, #ef4444 100%);
            --gradient-gold: linear-gradient(135deg, #f59e0b 0%, #fbbf24 100%);
            --shadow-sm: 0 1px 2px 0 rgba(0, 0, 0, 0.05);
            --shadow-md: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            --shadow-lg: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --shadow-xl: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 10px 10px -5px rgba(0, 0, 0, 0.04);
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            line-height: 1.7;
            color: var(--text-dark);
            background-color: #ffffff;
            overflow-x: hidden;
        }
        
        h1, h2, h3, h4, h5, h6 {
            font-family: 'Playfair Display', serif;
            font-weight: 700;
            line-height: 1.2;
        }
        
        /* Enhanced Navbar */
        .navbar {
            background: rgba(30, 58, 138, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: var(--shadow-lg);
            transition: all 0.3s ease;
            padding: 1rem 0;
        }
        
        .navbar.scrolled {
            background: rgba(30, 58, 138, 0.98) !important;
            padding: 0.5rem 0;
        }
        
        .navbar-brand {
            font-family: 'Playfair Display', serif;
            font-weight: 900;
            font-size: 1.5rem;
            color: white !important;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
            display: flex;
            align-items: center;
        }
        
        .navbar-brand img {
            height: 50px;
            width: 120px;
            object-fit: cover;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.3);
            transition: all 0.3s ease;
            border: 2px solid rgba(255,255,255,0.2);
        }
        
        .navbar-brand:hover img {
            transform: scale(1.08);
            box-shadow: 0 6px 12px rgba(0,0,0,0.4);
            border-color: rgba(255,255,255,0.4);
        }
        
        .navbar-brand i {
            color: var(--gold-color);
            margin-right: 0.5rem;
        }
        
        .nav-link {
            color: rgba(255,255,255,0.9) !important;
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.5rem 1rem !important;
            margin: 0 0.25rem;
            border-radius: 6px;
            transition: all 0.3s ease;
            position: relative;
        }
        
        .nav-link:hover {
            color: white !important;
            background-color: rgba(255,255,255,0.1);
            transform: translateY(-2px);
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            width: 0;
            height: 2px;
            background: var(--gradient-gold);
            transition: all 0.3s ease;
            transform: translateX(-50%);
        }
        
        .nav-link:hover::after {
            width: 80%;
        }
        
        /* Enhanced Hero Section */
        .hero-section {
            background: var(--gradient-primary);
            position: relative;
            overflow: hidden;
            padding: 120px 0 100px;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" fill="rgba(255,255,255,0.1)"><polygon points="0,100 1000,0 1000,100"/></svg>');
            background-size: cover;
        }
        
        .hero-section::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at 20% 80%, rgba(245, 158, 11, 0.1) 0%, transparent 50%),
                        radial-gradient(circle at 80% 20%, rgba(220, 38, 38, 0.1) 0%, transparent 50%);
        }
        
        .hero-content {
            position: relative;
            z-index: 2;
            color: white;
        }
        
        .hero-title {
            font-size: 3.5rem;
            font-weight: 900;
            text-shadow: 0 4px 8px rgba(0,0,0,0.3);
            margin-bottom: 1.5rem;
        }
        
        .hero-subtitle {
            font-size: 1.25rem;
            font-weight: 400;
            opacity: 0.9;
            margin-bottom: 2rem;
        }
        
        .hero-description {
            font-size: 1.1rem;
            opacity: 0.8;
            margin-bottom: 2.5rem;
            max-width: 600px;
        }
        
        /* Enhanced Buttons */
        .btn {
            font-weight: 600;
            padding: 0.75rem 2rem;
            border-radius: 8px;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.9rem;
        }
        
        .btn-primary {
            background: var(--gradient-primary);
            border: none;
            box-shadow: var(--shadow-md);
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: var(--gradient-primary);
        }
        
        .btn-outline-light {
            border: 2px solid rgba(255,255,255,0.8);
            color: white;
            background: transparent;
        }
        
        .btn-outline-light:hover {
            background: white;
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
        }
        
        .btn-gold {
            background: var(--gradient-gold);
            border: none;
            color: white;
            box-shadow: var(--shadow-md);
        }
        
        .btn-gold:hover {
            transform: translateY(-2px);
            box-shadow: var(--shadow-lg);
            background: var(--gradient-gold);
            color: white;
        }
        
        /* Enhanced Section Titles */
        .section-title {
            color: var(--primary-color);
            margin-bottom: 3rem;
            position: relative;
            text-align: center;
            font-size: 2.5rem;
            font-weight: 900;
        }
        
        .section-title::after {
            content: '';
            position: absolute;
            bottom: -15px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--gradient-gold);
            border-radius: 2px;
        }
        
        .section-title::before {
            content: '';
            position: absolute;
            bottom: -25px;
            left: 50%;
            transform: translateX(-50%);
            width: 40px;
            height: 4px;
            background: var(--gradient-secondary);
            border-radius: 2px;
        }
        
        /* Enhanced Cards */
        .card {
            border: none;
            border-radius: 16px;
            box-shadow: var(--shadow-md);
            transition: all 0.4s ease;
            overflow: hidden;
            background: white;
        }
        
        .card:hover {
            transform: translateY(-8px);
            box-shadow: var(--shadow-xl);
        }
        
        .card-body {
            padding: 2rem;
        }
        
        .card-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        
        /* Enhanced Practice Area Cards */
        .practice-area-card {
            border-left: 5px solid var(--gold-color);
            padding: 2rem;
            margin-bottom: 2rem;
            background: white;
            border-radius: 12px;
            box-shadow: var(--shadow-md);
            transition: all 0.4s ease;
            position: relative;
            overflow: hidden;
        }
        
        .practice-area-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 4px;
            background: var(--gradient-primary);
        }
        
        .practice-area-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--shadow-xl);
            border-left-color: var(--secondary-color);
        }
        
        .practice-area-card i {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        /* Enhanced Team Member Cards */
        .team-member {
            text-align: center;
            margin-bottom: 2rem;
        }
        
        .team-member .card {
            border-radius: 20px;
            overflow: hidden;
        }
        
        .team-member .card-body {
            padding: 2rem 1.5rem;
        }
        
        .team-member i {
            color: var(--primary-color);
            margin-bottom: 1.5rem;
            font-size: 3rem;
        }
        
        .team-member .card-title {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 0.5rem;
        }
        
        .team-member .text-muted {
            color: var(--text-light) !important;
            font-weight: 500;
        }
        
        /* Enhanced Contact Info */
        .contact-info {
            background: var(--accent-color);
            padding: 2rem;
            border-radius: 16px;
            text-align: center;
            transition: all 0.3s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        
        .contact-info:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-lg);
        }
        
        .contact-info i {
            color: var(--primary-color);
            margin-bottom: 1rem;
        }
        
        /* Enhanced Footer */
        .footer {
            background: var(--gradient-primary);
            color: white;
            padding: 4rem 0 2rem;
            position: relative;
        }
        
        .footer::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            height: 4px;
            background: var(--gradient-gold);
        }
        
        .footer h5 {
            color: var(--gold-color);
            font-weight: 700;
            margin-bottom: 1.5rem;
        }
        
        .footer a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s ease;
        }
        
        .footer a:hover {
            color: var(--gold-color);
        }
        
        /* Animations */
        .fade-in-up {
            animation: fadeInUp 0.8s ease-out;
        }
        
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .hero-title {
                font-size: 2.5rem;
            }
            
            .section-title {
                font-size: 2rem;
            }
            
            .navbar-brand {
                font-size: 1.25rem;
            }
            
            .navbar-brand img {
                height: 40px;
                width: 100px;
            }
        }
        
        /* Scroll to Top Button */
        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: var(--gradient-primary);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            z-index: 1000;
            opacity: 0;
            visibility: hidden;
            box-shadow: var(--shadow-lg);
        }
        
        .scroll-to-top.show {
            opacity: 1;
            visibility: visible;
        }
        
        .scroll-to-top:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-xl);
        }
        
        /* Loading Animation */
        .loading-spinner {
            width: 40px;
            height: 40px;
            border: 4px solid #f3f3f3;
            border-top: 4px solid var(--primary-color);
            border-radius: 50%;
            animation: spin 1s linear infinite;
        }
        
        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
        }
        
        /* User Profile Styles */
        .user-avatar {
            width: 32px;
            height: 32px;
            background: var(--gradient-primary);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 1.2rem;
            box-shadow: 0 2px 4px rgba(0,0,0,0.2);
        }
        
        .user-name {
            font-weight: 500;
            color: white;
            margin-left: 0.5rem;
        }
        
        .navbar-nav .nav-link {
            color: white !important;
            font-weight: 500;
            transition: all 0.3s ease;
            padding: 0.5rem 1rem;
        }
        
        .navbar-nav .nav-link:hover {
            color: var(--secondary-color) !important;
            transform: translateY(-1px);
        }
        
        .btn-outline-primary {
            border-color: white;
            color: white;
            font-weight: 500;
            padding: 0.5rem 1.5rem;
            border-radius: 25px;
            transition: all 0.3s ease;
            background: transparent;
        }
        
        .btn-outline-primary:hover {
            background-color: white;
            border-color: white;
            color: var(--primary-color);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
        }
        
        .dropdown-menu {
            border: none;
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
            border-radius: 12px;
            padding: 0.5rem 0;
            margin-top: 0.5rem;
        }
        
        .dropdown-item {
            padding: 0.75rem 1.5rem;
            color: var(--primary-color);
            transition: all 0.3s ease;
            font-weight: 500;
        }
        
        .dropdown-item:hover {
            background-color: var(--light-bg);
            color: var(--secondary-color);
            transform: translateX(5px);
        }
        
        .dropdown-divider {
            margin: 0.5rem 0;
            border-color: #e9ecef;
        }
        
        .dropdown-header {
            padding: 0.75rem 1.5rem;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .dropdown-header .badge {
            font-size: 0.7rem;
            padding: 0.25rem 0.5rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 768px) {
            .user-name {
                display: none;
            }
            
            .btn-outline-primary {
                padding: 0.4rem 1rem;
                font-size: 0.9rem;
            }
        }
    </style>
    
    @yield('styles')
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="navbar">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('logo.jpg') }}" alt="MAK Law Associates Logo" class="me-3" style="height: 50px; width: 120px; object-fit: cover;">
                <i class="fas fa-balance-scale"></i>
                MAK Law Associates
            </a>
            
            <!-- Login/User Profile Section -->
            <div class="navbar-nav ms-auto">
                @auth
                    <div class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                            <div class="user-avatar me-2">
                                @if(Auth::user()->isAdmin())
                                    <i class="fas fa-user-shield"></i>
                                @else
                                    <i class="fas fa-user-circle"></i>
                                @endif
                            </div>
                            <span class="user-name">{{ Auth::user()->name }}</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><div class="dropdown-header">
                                <small class="text-muted">Logged in as</small><br>
                                <strong>{{ Auth::user()->name }}</strong>
                                <span class="badge bg-primary ms-2">{{ Auth::user()->isAdmin() ? 'Admin' : 'User' }}</span>
                            </div></li>
                            <li><hr class="dropdown-divider"></li>
                            @if(Auth::user()->isAdmin())
                                <li><a class="dropdown-item" href="{{ route('admin.appointments.index') }}">
                                    <i class="fas fa-cog me-2"></i>Admin Panel
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                            @else
                                <li><a class="dropdown-item" href="{{ route('dashboard') }}">
                                    <i class="fas fa-calendar-check me-2"></i>My Consultations
                                </a></li>
                                <li><hr class="dropdown-divider"></li>
                            @endif
                            <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fas fa-sign-out-alt me-2"></i>Logout
                            </a></li>
                        </ul>
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                @else
                    <div class="nav-item">
                        <a class="btn btn-outline-primary" href="{{ route('login') }}">
                            <i class="fas fa-sign-in-alt me-1"></i>Login
                        </a>
                    </div>
                @endauth
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('practice-areas') }}">Practice Areas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('team') }}">Our Team</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                    </li>
                    
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main style="margin-top: 76px;">
        @yield('content')
    </main>

    <!-- Scroll to Top Button -->
    <div class="scroll-to-top" id="scrollToTop">
        <i class="fas fa-arrow-up"></i>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <h5><i class="fas fa-balance-scale me-2"></i>MAK Law Associates</h5>
                    <p class="mb-3">Advocates | Legal Consultants | Corporate Advisors</p>
                    <p class="mb-3">Premier law firm with over 28 years of experience in delivering exceptional legal solutions with integrity, precision, and professionalism.</p>
                    <div class="social-links">
                        <a href="#" class="me-3"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="me-3"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 mb-4">
                    <h5>Quick Links</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home') }}">Home</a></li>
                        <li class="mb-2"><a href="{{ route('about') }}">About Us</a></li>
                        <li class="mb-2"><a href="{{ route('practice-areas') }}">Practice Areas</a></li>
                        <li class="mb-2"><a href="{{ route('team') }}">Our Team</a></li>
                        <li class="mb-2"><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Practice Areas</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('practice-areas') }}">Civil Law</a></li>
                        <li class="mb-2"><a href="{{ route('practice-areas') }}">Banking Law</a></li>
                        <li class="mb-2"><a href="{{ route('practice-areas') }}">Corporate Law</a></li>
                        <li class="mb-2"><a href="{{ route('practice-areas') }}">Constitutional Law</a></li>
                        <li class="mb-2"><a href="{{ route('practice-areas') }}">Property Law</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6 mb-4">
                    <h5>Contact Info</h5>
                    <p class="mb-2"><i class="fas fa-map-marker-alt me-2"></i>Suite # 612, 6th Floor, Panorama Centre #1, Fatima Jinnah Road, Saddar, Karachi, Pakistan</p>
                    <p class="mb-2"><i class="fas fa-phone me-2"></i>+92 21 35651637-38</p>
                    <p class="mb-2"><i class="fas fa-mobile-alt me-2"></i>0321-2302173</p>
                    <p class="mb-2"><i class="fas fa-mobile-alt me-2"></i>0329-2699996</p>
                    <p class="mb-2"><i class="fas fa-envelope me-2"></i>mukhtarahmed.lawassociates@gmail.com (Admin)</p>
                </div>
            </div>
            <hr class="my-4" style="border-color: rgba(255,255,255,0.2);">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-0">&copy; {{ date('Y') }} MAK Law Associates. All rights reserved.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Designed with <i class="fas fa-heart text-danger"></i> for excellence</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!-- AOS Animation Library -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <script>
        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.getElementById('navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Scroll to top functionality
        const scrollToTopBtn = document.getElementById('scrollToTop');
        
        window.addEventListener('scroll', function() {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('show');
            } else {
                scrollToTopBtn.classList.remove('show');
            }
        });
        
        scrollToTopBtn.addEventListener('click', function() {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });
        
        // Add loading animation to buttons
        document.querySelectorAll('.btn').forEach(button => {
            button.addEventListener('click', function() {
                if (!this.classList.contains('btn-loading')) {
                    this.classList.add('btn-loading');
                    const originalText = this.innerHTML;
                    this.innerHTML = '<span class="loading-spinner me-2"></span>Loading...';
                    
                    setTimeout(() => {
                        this.classList.remove('btn-loading');
                        this.innerHTML = originalText;
                    }, 2000);
                }
            });
        });
    </script>
    
    @yield('scripts')
</body>
</html> 