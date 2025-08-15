@extends('layouts.app')

@section('title', 'MAK Law Associates - Home')

@section('content')
<!-- Hero Section -->
<section class="hero-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8">
                <div class="hero-content" data-aos="fade-right" data-aos-delay="200">
                    <h1 class="hero-title">MUKHTAR AHMED KOBHAR LAW ASSOCIATES</h1>
                    <h2 class="hero-subtitle">Advocates | Legal Consultants | Corporate Advisors</h2>
                    <p class="hero-description">Premier law firm with over 28 years of experience and more than 50 reported cases. We deliver exceptional legal solutions with integrity, precision, and professionalism.</p>
                    <div class="d-flex flex-wrap gap-3" data-aos="fade-up" data-aos-delay="400">
                        @auth
                            <a href="{{ route('appointments.book') }}" class="btn btn-gold">
                                <i class="fas fa-calendar-plus me-2"></i>Book Consultation
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="btn btn-gold">
                                <i class="fas fa-calendar-plus me-2"></i>Book Consultation
                            </a>
                        @endauth
                        <a href="{{ route('about') }}" class="btn btn-outline-light">
                            <i class="fas fa-info-circle me-2"></i>Learn More
                        </a>
                        <a href="{{ route('contact') }}" class="btn btn-outline-light">
                            <i class="fas fa-phone me-2"></i>Contact Us
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center" data-aos="fade-left" data-aos-delay="300">
                <div class="float-animation">
                    <img src="{{ asset('logo.jpg') }}" alt="MAK Law Associates Logo" class="hero-logo" style="max-width: 300px; height: auto; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.3);">
                </div>
                <div class="mt-4">
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="stat-card">
                                <h3 class="text-white mb-0">28+</h3>
                                <p class="text-white-50 mb-0">Years Experience</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="stat-card">
                                <h3 class="text-white mb-0">100+</h3>
                                <p class="text-white-50 mb-0">Reported Cases</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Summary Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">About MAK Law Associates</h2>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">MAK Law Associates is a premier law firm led by Mukhtar Ahmed Kobhar, ASC, known for delivering exceptional legal solutions with integrity, precision, and professionalism.</p>
                <p class="mb-4" data-aos="fade-up" data-aos-delay="300">With more than 28 years of experience and over 100 reported cases, the firm is a trusted partner for clients across Pakistan, specializing in banking, corporate, civil, criminal, and constitutional law.</p>
                <a href="{{ route('about') }}" class="btn btn-primary" data-aos="fade-up" data-aos-delay="400">
                    <i class="fas fa-arrow-right me-2"></i>Read More About Us
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5" data-aos="fade-up">Our Practice Areas</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <h5 class="card-title">Civil Law</h5>
                        <p class="card-text">Dispute resolution, contracts, property rights, and torts—handled with precision and legal depth.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Contracts</span>
                            <span class="badge bg-primary me-1">Property</span>
                            <span class="badge bg-primary">Torts</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-university"></i>
                        </div>
                        <h5 class="card-title">Banking Law</h5>
                        <p class="card-text">Advisory and litigation in banking regulations, mortgage disputes, account-related conflicts, and financial compliance.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Regulations</span>
                            <span class="badge bg-primary me-1">Mortgage</span>
                            <span class="badge bg-primary">Compliance</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-building"></i>
                        </div>
                        <h5 class="card-title">Corporate Law</h5>
                        <p class="card-text">Support with incorporation, governance, mergers & acquisitions, contract drafting, and regulatory affairs.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">M&A</span>
                            <span class="badge bg-primary me-1">Governance</span>
                            <span class="badge bg-primary me-1">Contracts</span>
                            <span class="badge bg-primary me-1">Litigation</span>
                            <span class="badge bg-primary">Arbitration & Mediation</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <h5 class="card-title">Corporate Compliance</h5>
                        <p class="card-text">Ensuring businesses meet all regulatory requirements and maintain proper corporate governance standards.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Compliance</span>
                            <span class="badge bg-primary me-1">Governance</span>
                            <span class="badge bg-primary">Risk Management</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <h5 class="card-title">Taxation Law</h5>
                        <p class="card-text">Expert tax advisory, planning, and representation services for individuals and businesses.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Tax Planning</span>
                            <span class="badge bg-primary me-1">Advisory</span>
                            <span class="badge bg-primary">Compliance</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-home"></i>
                        </div>
                        <h5 class="card-title">Property Law</h5>
                        <p class="card-text">Expertise in real estate transactions, land disputes, and tenancy matters for both commercial and residential sectors.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Real Estate</span>
                            <span class="badge bg-primary me-1">Land Disputes</span>
                            <span class="badge bg-primary">Tenancy</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <h5 class="card-title">Constitutional Law</h5>
                        <p class="card-text">Representation in constitutional petitions and fundamental rights litigation before higher courts.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Petitions</span>
                            <span class="badge bg-primary me-1">Rights</span>
                            <span class="badge bg-primary">Supreme Court</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-users"></i>
                        </div>
                        <h5 class="card-title">Labor Law & Arbitration</h5>
                        <p class="card-text">Resolving employment disputes through effective arbitration and legal representation in industrial relations.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Employment</span>
                            <span class="badge bg-primary me-1">Arbitration</span>
                            <span class="badge bg-primary">Industrial</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                <div class="card h-100 practice-card">
                    <div class="card-body text-center">
                        <div class="icon-wrapper mb-3">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <h5 class="card-title">Criminal Law</h5>
                        <p class="card-text">Comprehensive criminal defense and representation in criminal proceedings across all levels of the judiciary.</p>
                        <div class="mt-3">
                            <span class="badge bg-primary me-1">Criminal Defense</span>
                            <span class="badge bg-primary me-1">White-Collar</span>
                            <span class="badge bg-primary me-1">FIA Matters</span>
                            <span class="badge bg-primary">Custom Matters</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-5" data-aos="fade-up" data-aos-delay="1100">
            <a href="{{ route('practice-areas') }}" class="btn btn-primary btn-lg">
                <i class="fas fa-arrow-right me-2"></i>View All Practice Areas
            </a>
        </div>
    </div>
</section>

<!-- Founder Profile Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <h2 class="section-title text-start">Founder's Profile</h2>
                <h3 class="h4 mb-4 text-primary">Mukhtar Ahmed Kobhar, ASC</h3>
                <div class="credentials-list">
                    <div class="credential-item" data-aos="fade-right" data-aos-delay="100">
                        <i class="fas fa-check-circle text-success me-3"></i>
                        <span>Advocate Supreme Court of Pakistan</span>
                    </div>
                    <div class="credential-item" data-aos="fade-right" data-aos-delay="200">
                        <i class="fas fa-check-circle text-success me-3"></i>
                        <span>President, Corporate & Banking Lawyers Association (CBLA) 2025-26</span>
                    </div>
                    <div class="credential-item" data-aos="fade-right" data-aos-delay="300">
                        <i class="fas fa-check-circle text-success me-3"></i>
                        <span>Director, Institute of Banking Studies</span>
                    </div>
                    <div class="credential-item" data-aos="fade-right" data-aos-delay="400">
                        <i class="fas fa-check-circle text-success me-3"></i>
                        <span>Panel Counsel for: National Bank of Pakistan, Habib Bank Limited, United Bank Limited</span>
                    </div>
                    <div class="credential-item" data-aos="fade-right" data-aos-delay="500">
                        <i class="fas fa-graduation-cap text-primary me-3"></i>
                        <span>M.A. Economics (1st Division) – Shah Abdul Latif University, Khairpur</span>
                    </div>
                    <div class="credential-item" data-aos="fade-right" data-aos-delay="600">
                        <i class="fas fa-graduation-cap text-primary me-3"></i>
                        <span>LLB – Enrolled as Advocate since 1997; Advocate High Court (2000); Advocate Supreme Court (2012)</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 text-center" data-aos="fade-left" data-aos-delay="300">
                <div class="founder-card">
                    <div class="founder-avatar mb-4">
                        <i class="fas fa-user-tie"></i>
                    </div>
                    <h4 class="text-primary mb-2">Mukhtar Ahmed Kobhar, ASC</h4>
                    <p class="text-muted mb-3">Founder & Senior Partner</p>
                    <p class="mb-4">With over 28 years of legal experience, Mr. Kobhar has established himself as one of Pakistan's leading legal professionals, specializing in banking, corporate, and constitutional law.</p>
                    <div class="expertise-tags">
                        <span class="badge bg-primary me-2 mb-2">Banking Law</span>
                        <span class="badge bg-primary me-2 mb-2">Corporate Law</span>
                        <span class="badge bg-primary me-2 mb-2">Constitutional Law</span>
                        <span class="badge bg-primary me-2 mb-2">Civil Law</span>
                        <span class="badge bg-primary me-2 mb-2">Criminal Law</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation Call-to-Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8" data-aos="fade-right">
                <h2 class="section-title text-white mb-3">Need Legal Consultation?</h2>
                <p class="lead mb-4">Get expert legal advice from our experienced team. Book a consultation today and take the first step towards resolving your legal matters.</p>
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-3 text-gold"></i>
                            <span>Free Initial Consultation</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-3 text-gold"></i>
                            <span>Expert Legal Advice</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-3 text-gold"></i>
                            <span>Flexible Scheduling</span>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fas fa-check-circle me-3 text-gold"></i>
                            <span>Multiple Consultation Types</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-center" data-aos="fade-left">
                @auth
                    <a href="{{ route('appointments.book') }}" class="btn btn-gold btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>Book Consultation
                    </a>
                @else
                    <a href="{{ route('login') }}" class="btn btn-gold btn-lg">
                        <i class="fas fa-calendar-plus me-2"></i>Login to Book
                    </a>
                    <p class="mt-3 text-white-50">Don't have an account? <a href="{{ route('register') }}" class="text-gold">Register here</a></p>
                @endauth
            </div>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">Get In Touch</h2>
                <p class="lead mb-5" data-aos="fade-up" data-aos-delay="200">Ready to discuss your legal needs? Contact us today for a consultation.</p>
                <div class="row">
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="contact-info">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <h5>Address</h5>
                            <p>Suite # 612, 6th Floor, Panorama Centre #1, Fatima Jinnah Road, Saddar, Karachi, Pakistan</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="400">
                        <div class="contact-info">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-phone"></i>
                            </div>
                            <h5>Phone</h5>
                            <p>Chamber: +92 21 35651637-38<br>Mobile: 0321-2302173<br>Mobile: 0329-2699996</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="500">
                        <div class="contact-info">
                            <div class="contact-icon mb-3">
                                <i class="fas fa-envelope"></i>
                            </div>
                            <h5>Email</h5>
                            <p>mukhtarahmed.lawassociates@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="mt-5" data-aos="fade-up" data-aos-delay="600">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3">
                        <i class="fas fa-envelope me-2"></i>Contact Us
                    </a>
                    <a href="tel:03292699996" class="btn btn-gold btn-lg">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .stat-card {
        background: rgba(255,255,255,0.1);
        padding: 1rem;
        border-radius: 12px;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.2);
    }
    
    .practice-card {
        position: relative;
        overflow: hidden;
    }
    
    .practice-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--gradient-primary);
    }
    
    .icon-wrapper {
        width: 80px;
        height: 80px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
        font-size: 2rem;
        box-shadow: var(--shadow-md);
    }
    
    .credentials-list {
        margin-top: 2rem;
    }
    
    .credential-item {
        display: flex;
        align-items: center;
        margin-bottom: 1rem;
        padding: 0.5rem 0;
        font-size: 0.95rem;
    }
    
    .credential-item i {
        font-size: 1.2rem;
        min-width: 20px;
    }
    
    .founder-card {
        background: white;
        padding: 3rem 2rem;
        border-radius: 20px;
        box-shadow: var(--shadow-lg);
        position: relative;
        overflow: hidden;
    }
    
    .founder-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient-gold);
    }
    
    .founder-avatar {
        width: 120px;
        height: 120px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
        font-size: 3rem;
        box-shadow: var(--shadow-lg);
    }
    
    .expertise-tags {
        margin-top: 1.5rem;
    }
    
    .contact-icon {
        width: 60px;
        height: 60px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin: 0 auto;
        color: white;
        font-size: 1.5rem;
        box-shadow: var(--shadow-md);
    }
    
    .section-title.text-start::after {
        left: 0;
        transform: none;
    }
    
    .section-title.text-start::before {
        left: 0;
        transform: none;
    }
</style>
@endsection 