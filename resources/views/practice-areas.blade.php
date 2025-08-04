@extends('layouts.app')

@section('title', 'Practice Areas - MAK Law Associates')

@section('content')
<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="hero-title" data-aos="fade-up">Our Practice Areas</h1>
                <p class="hero-subtitle" data-aos="fade-up" data-aos-delay="200">Comprehensive legal services across multiple practice areas with expertise and precision</p>
            </div>
        </div>
    </div>
</section>

<!-- Practice Areas Grid -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <!-- Civil Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-gavel"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Civil Law</h4>
                            <p class="mb-3">Dispute resolution, contracts, property rights, and torts—handled with precision and legal depth.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Contract Disputes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Property Rights</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tort Claims</li>
                                <li><i class="fas fa-check text-success me-2"></i>Civil Litigation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Banking Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-university"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Banking Law</h4>
                            <p class="mb-3">Advisory and litigation in banking regulations, mortgage disputes, account-related conflicts, and financial compliance.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Banking Regulations</li>
                                <li><i class="fas fa-check text-success me-2"></i>Mortgage Disputes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Account Conflicts</li>
                                <li><i class="fas fa-check text-success me-2"></i>Financial Compliance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Corporate Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-building"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Corporate Law</h4>
                            <p class="mb-3">Support with incorporation, governance, mergers & acquisitions, contract drafting, regulatory affairs, financial crimes, white-collar offenses, and regulatory investigations.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Company Incorporation</li>
                                <li><i class="fas fa-check text-success me-2"></i>Mergers & Acquisitions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Corporate Governance</li>
                                <li><i class="fas fa-check text-success me-2"></i>Regulatory Compliance</li>
                                <li><i class="fas fa-check text-success me-2"></i>Litigation</li>
                                <li><i class="fas fa-check text-success me-2"></i>Arbitration & Mediation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>



            <!-- Corporate Compliance -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-shield-check"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Corporate Compliance</h4>
                            <p class="mb-3">Ensuring businesses meet all regulatory requirements and maintain proper corporate governance standards.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Regulatory Compliance</li>
                                <li><i class="fas fa-check text-success me-2"></i>Corporate Governance</li>
                                <li><i class="fas fa-check text-success me-2"></i>Risk Management</li>
                                <li><i class="fas fa-check text-success me-2"></i>Compliance Audits</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Taxation Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-calculator"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Taxation Law</h4>
                            <p class="mb-3">Expert tax advisory, planning, and representation services for individuals and businesses.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Tax Planning</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tax Advisory</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tax Disputes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tax Compliance</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Property Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="700">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-home"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Property Law</h4>
                            <p class="mb-3">Expertise in real estate transactions, land disputes, and tenancy matters for both commercial and residential sectors.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Real Estate Transactions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Land Disputes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Tenancy Matters</li>
                                <li><i class="fas fa-check text-success me-2"></i>Property Documentation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Constitutional Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="800">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-landmark"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Constitutional Law</h4>
                            <p class="mb-3">Representation in constitutional petitions and fundamental rights litigation before higher courts.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Constitutional Petitions</li>
                                <li><i class="fas fa-check text-success me-2"></i>Fundamental Rights</li>
                                <li><i class="fas fa-check text-success me-2"></i>Supreme Court Litigation</li>
                                <li><i class="fas fa-check text-success me-2"></i>High Court Matters</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- NAB & Customs Matters -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="900">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">NAB & Customs Matters</h4>
                            <p class="mb-3">Litigation and defense in NAB investigations, customs disputes, and proceedings before accountability forums.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>NAB Investigations</li>
                                <li><i class="fas fa-check text-success me-2"></i>Customs Disputes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Accountability Proceedings</li>
                                <li><i class="fas fa-check text-success me-2"></i>Defense Representation</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Labor Law & Arbitration -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="1000">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-users"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Labor Law & Arbitration</h4>
                            <p class="mb-3">Resolving employment disputes through effective arbitration and legal representation in industrial relations.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Employment Disputes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Arbitration Services</li>
                                <li><i class="fas fa-check text-success me-2"></i>Industrial Relations</li>
                                <li><i class="fas fa-check text-success me-2"></i>Labor Court Matters</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Criminal Law -->
            <div class="col-lg-6 mb-4" data-aos="fade-up" data-aos-delay="1100">
                <div class="practice-area-card enhanced">
                    <div class="d-flex align-items-start">
                        <div class="practice-icon me-4">
                            <i class="fas fa-balance-scale"></i>
                        </div>
                        <div class="practice-content">
                            <h4 class="text-primary mb-3">Criminal Law</h4>
                            <p class="mb-3">Comprehensive criminal defense and representation in criminal proceedings across all levels of the judiciary.</p>
                            <ul class="list-unstyled practice-features">
                                <li><i class="fas fa-check text-success me-2"></i>Criminal Defense</li>
                                <li><i class="fas fa-check text-success me-2"></i>White-Collar Crimes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Financial Crimes</li>
                                <li><i class="fas fa-check text-success me-2"></i>Criminal Appeals</li>
                                <li><i class="fas fa-check text-success me-2"></i>FIA Matters</li>
                                <li><i class="fas fa-check text-success me-2"></i>Custom Matters</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Expertise Details Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5" data-aos="fade-up">Specialized Expertise</h2>
        <div class="row">
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="expertise-card">
                    <div class="expertise-icon mb-4">
                        <i class="fas fa-university"></i>
                    </div>
                    <h5 class="card-title text-primary mb-3">Banking Expertise</h5>
                    <p class="card-text mb-4">Known for trusted legal representation of financial institutions and multinational entities. Our banking law services include:</p>
                    <ul class="list-unstyled expertise-list">
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Litigation</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Loan Documentation</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Amalgamations</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Liquidations</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Regulatory Compliance</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="expertise-card">
                    <div class="expertise-icon mb-4">
                        <i class="fas fa-building"></i>
                    </div>
                    <h5 class="card-title text-primary mb-3">Corporate Services</h5>
                    <p class="card-text mb-4">Comprehensive corporate legal services including:</p>
                    <ul class="list-unstyled expertise-list">
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Contract Drafting & Vetting</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Financial Schemes</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Commercial Agreements</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>MOUs & NDAs</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Service-level Agreements</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Legal Opinion & Advisory</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="expertise-card">
                    <div class="expertise-icon mb-4">
                        <i class="fas fa-gavel"></i>
                    </div>
                    <h5 class="card-title text-primary mb-3">Supreme Court Litigation</h5>
                    <p class="card-text mb-4">The firm actively handles high-stakes matters in High Courts and the Supreme Court of Pakistan, providing:</p>
                    <ul class="list-unstyled expertise-list">
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Supreme Court Representation</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>High Court Matters</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Constitutional Petitions</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Appellate Advocacy</li>
                        <li><i class="fas fa-arrow-right text-primary me-2"></i>Complex Legal Proceedings</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title" data-aos="fade-up">Need Legal Assistance?</h2>
                <p class="lead mb-4" data-aos="fade-up" data-aos-delay="200">Our experienced team is ready to help you with your legal needs. Contact us today for a consultation.</p>
                <div class="cta-buttons" data-aos="fade-up" data-aos-delay="300">
                    <a href="{{ route('contact') }}" class="btn btn-primary btn-lg me-3">
                        <i class="fas fa-envelope me-2"></i>Schedule a Consultation
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
    .practice-area-card.enhanced {
        border-left: 5px solid var(--gold-color);
        padding: 2.5rem;
        margin-bottom: 2rem;
        background: white;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
        border: 1px solid rgba(0,0,0,0.05);
    }
    
    .practice-area-card.enhanced::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 4px;
        background: var(--gradient-primary);
    }
    
    .practice-area-card.enhanced:hover {
        transform: translateY(-8px);
        box-shadow: var(--shadow-xl);
        border-left-color: var(--secondary-color);
    }
    
    .practice-icon {
        width: 80px;
        height: 80px;
        background: var(--gradient-primary);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 2rem;
        box-shadow: var(--shadow-md);
        flex-shrink: 0;
    }
    
    .practice-content {
        flex: 1;
    }
    
    .practice-features li {
        margin-bottom: 0.5rem;
        font-size: 0.95rem;
    }
    
    .expertise-card {
        background: white;
        padding: 2.5rem;
        border-radius: 16px;
        box-shadow: var(--shadow-md);
        transition: all 0.4s ease;
        height: 100%;
        position: relative;
        overflow: hidden;
    }
    
    .expertise-card::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 4px;
        background: var(--gradient-gold);
    }
    
    .expertise-card:hover {
        transform: translateY(-5px);
        box-shadow: var(--shadow-lg);
    }
    
    .expertise-icon {
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
    
    .expertise-list li {
        margin-bottom: 0.75rem;
        font-size: 0.95rem;
        display: flex;
        align-items: center;
    }
    
    .cta-buttons {
        margin-top: 2rem;
    }
    
    @media (max-width: 768px) {
        .practice-area-card.enhanced {
            padding: 1.5rem;
        }
        
        .practice-icon {
            width: 60px;
            height: 60px;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }
        
        .d-flex.align-items-start {
            flex-direction: column;
            text-align: center;
        }
    }
</style>
@endsection 