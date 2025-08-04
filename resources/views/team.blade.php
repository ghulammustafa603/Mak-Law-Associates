@extends('layouts.app')

@section('title', 'Our Team - MAK Law Associates')

@section('content')
<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Our Legal Team</h1>
                <p class="lead">Meet our experienced team of legal professionals dedicated to providing exceptional legal services</p>
            </div>
        </div>
    </div>
</section>

<!-- Founder Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Founder & Senior Partner</h2>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-md-4 text-center mb-4 mb-md-0">
                                <i class="fas fa-user-tie fa-6x text-primary mb-3"></i>
                                <h4>Mukhtar Ahmed Kobhar, ASC</h4>
                                <p class="text-muted">Founder & Senior Partner</p>
                                <div class="d-flex justify-content-center gap-2">
                                    <span class="badge bg-primary">Advocate Supreme Court</span>
                                    <span class="badge bg-success">28+ Years Experience</span>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <h5 class="text-primary mb-3">Professional Credentials</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-check text-success me-2"></i>Advocate Supreme Court of Pakistan</li>
                                    <li><i class="fas fa-check text-success me-2"></i>President, Corporate & Banking Lawyers Association (CBLA) 2025-26</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Director, Institute of Banking Studies</li>
                                    <li><i class="fas fa-check text-success me-2"></i>Panel Counsel for: National Bank of Pakistan, Habib Bank Limited, United Bank Limited</li>
                                </ul>
                                
                                <h5 class="text-primary mb-3 mt-4">Education</h5>
                                <ul class="list-unstyled">
                                    <li><i class="fas fa-graduation-cap text-success me-2"></i>M.A. Economics (1st Division) – Shah Abdul Latif University, Khairpur</li>
                                    <li><i class="fas fa-graduation-cap text-success me-2"></i>LLB – Enrolled as Advocate since 1997; Advocate High Court (2000); Advocate Supreme Court (2012)</li>
                                </ul>
                                
                                <h5 class="text-primary mb-3 mt-4">Specializations</h5>
                                <div class="d-flex flex-wrap gap-2">
                                    <span class="badge bg-secondary">Banking Law</span>
                                    <span class="badge bg-secondary">Corporate Law</span>
                                    <span class="badge bg-secondary">Constitutional Law</span>
                                    <span class="badge bg-secondary">Civil Law</span>
                                    <span class="badge bg-secondary">Criminal Law</span>
                                </div>
                                
                                <p class="mt-4">With over 28 years of legal experience, Mr. Kobhar has established himself as one of Pakistan's leading legal professionals. His expertise in banking, corporate, and constitutional law has made MAK Law Associates a trusted name in the legal community.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Associates Section -->
<section class="py-5 bg-light">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Associates</h2>
        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Ms. Rukhsana Jabbar, AHC</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Experienced advocate with expertise in civil and family law matters.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">Civil Law</span>
                                <span class="badge bg-primary">Family Law</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Mr. Zafar Ali Vighio, AHC</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Specializes in banking and corporate law with 21 years of experience.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">Banking Law</span>
                                <span class="badge bg-primary">Corporate Law</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Mr. Sanaullah Hashim, AHC</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Expert in constitutional law and Supreme Court litigation.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">Constitutional Law</span>
                                <span class="badge bg-primary">Supreme Court</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Mr. Jamil Ahmed</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Specializes in property law and real estate transactions.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">Property Law</span>
                                <span class="badge bg-primary">Real Estate</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Mr. Abdul Moeed Bhurgri</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Expert in labor law and arbitration matters.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">Labor Law</span>
                                <span class="badge bg-primary">Arbitration</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Mr. Shahbaz Ali Metlo</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Specializes in criminal law and defense matters.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">Criminal Law</span>
                                <span class="badge bg-primary">Defense</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="team-member">
                    <div class="card h-100">
                        <div class="card-body text-center">
                            <i class="fas fa-user-tie fa-4x text-primary mb-3"></i>
                            <h5 class="card-title">Mr. Ali Oshaal Ahmed</h5>
                            <p class="text-muted">Associate</p>
                            <p class="card-text">Expert in NAB and customs matters.</p>
                            <div class="d-flex justify-content-center gap-1">
                                <span class="badge bg-primary">NAB Matters</span>
                                <span class="badge bg-primary">Customs</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sub-Offices Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Sub-Offices</h2>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fas fa-map-marker-alt me-2"></i>Hyderabad Office</h5>
                        <h6 class="text-muted">Lead: Mr. Zafar Ali Vighio (21 years' experience)</h6>
                        <p class="card-text">Office No. 1 & 2, 3rd Floor, Behlum Heights, Opp. Firdous Filling Station, Hyder Chowk, Hyderabad.</p>
                        <div class="mt-3">
                            <p class="mb-0"><i class="fas fa-phone me-2"></i>0321-2302173</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fas fa-map-marker-alt me-2"></i>Nawabshah Office</h5>
                        <h6 class="text-muted">Lead: Mr. Sanaullah Brohi (6 years' experience)</h6>
                        <p class="card-text">Office No. 289/290, Gulshan-e-Madina Colony, Main Sanghar Road, Nawabshah.</p>
                        <div class="mt-3">
                            <p class="mb-1"><i class="fas fa-phone me-2"></i>0321-2302173</p>
                            <p class="mb-0"><i class="fas fa-phone me-2"></i>0339-0201234</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-lg-4 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fas fa-map-marker-alt me-2"></i>Ghotki Office</h5>
                        <h6 class="text-muted">Lead: Mr. Muhammad Javed Soomro (8 years' experience)</h6>
                        <p class="card-text">Javed Law Chamber / MAK Law Chamber, Ali Market, Opp. Civil Court Main Gate, Daharki, Ghotki.</p>
                        <div class="mt-3">
                            <p class="mb-1"><i class="fas fa-phone me-2"></i>0321-2302173</p>
                            <p class="mb-0"><i class="fas fa-phone me-2"></i>0339-0201234</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Ready to Work With Our Team?</h2>
                <p class="lead mb-4">Our experienced legal professionals are ready to assist you with your legal needs. Contact us today for a consultation.</p>
                <a href="{{ route('contact') }}" class="btn btn-primary btn-lg">Schedule a Consultation</a>
            </div>
        </div>
    </div>
</section>

@endsection 