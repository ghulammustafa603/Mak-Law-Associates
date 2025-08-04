@extends('layouts.app')

@section('title', 'Contact Us - MAK Law Associates')

@section('content')
<!-- Page Header -->
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Contact Us</h1>
                <p class="lead">Get in touch with our legal experts for consultation and assistance</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center mb-5">Get In Touch</h2>
                <div class="row">
                    <div class="col-md-4 mb-4">
                        <div class="contact-info text-center">
                            <i class="fas fa-map-marker-alt fa-3x text-primary mb-3"></i>
                            <h5>Main Office</h5>
                            <p>Suite # 612, 6th Floor, Panorama Centre #1, Fatima Jinnah Road, Saddar, Karachi, Pakistan</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-info text-center">
                            <i class="fas fa-phone fa-3x text-primary mb-3"></i>
                            <h5>Phone Numbers</h5>
                            <p>Chamber: +92 21 35651637-38<br>Mobile: 0321-2302173<br>Mobile: 0329-2699996</p>
                        </div>
                    </div>
                    <div class="col-md-4 mb-4">
                        <div class="contact-info text-center">
                            <i class="fas fa-envelope fa-3x text-primary mb-3"></i>
                            <h5>Email</h5>
                            <p>mukhtarahmed.lawassociates@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Send Us a Message</h3>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                            </div>
                        @endif
                        
                        <form action="{{ route('contact.submit') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="email" name="email" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="phone" class="form-label">Phone Number</label>
                                    <input type="tel" class="form-control" id="phone" name="phone">
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="subject" class="form-label">Subject *</label>
                                    <select class="form-select" id="subject" name="subject" required>
                                        <option value="">Select a subject</option>
                                        <option value="Civil Law">Civil Law</option>
                                        <option value="Banking Law">Banking Law</option>
                                        <option value="Corporate Law">Corporate Law</option>
                
                                        <option value="Corporate Compliance">Corporate Compliance</option>
                                        <option value="Taxation Law">Taxation Law</option>
                                        <option value="Property Law">Property Law</option>
                                        <option value="Constitutional Law">Constitutional Law</option>
                                        <option value="NAB & Customs Matters">NAB & Customs Matters</option>
                                        <option value="Labor Law & Arbitration">Labor Law & Arbitration</option>
                                        <option value="Criminal Law">Criminal Law</option>
                                        <option value="General Consultation">General Consultation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="message" class="form-label">Message *</label>
                                <textarea class="form-control" id="message" name="message" rows="5" required placeholder="Please describe your legal matter or inquiry..."></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Office Locations Section -->
<section class="py-5">
    <div class="container">
        <h2 class="section-title text-center mb-5">Our Office Locations</h2>
        <div class="row">
            <!-- Main Office -->
            <div class="col-lg-6 mb-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h5 class="card-title text-primary"><i class="fas fa-building me-2"></i>Main Office - Karachi</h5>
                        <h6 class="text-muted">MAK Law Associates</h6>
                        <p class="card-text">Suite # 612, 6th Floor, Panorama Centre #1, Fatima Jinnah Road, Saddar, Karachi, Pakistan</p>
                        <div class="mt-3">
                            <p class="mb-1"><i class="fas fa-phone me-2"></i>Chamber: +92 21 35651637-38</p>
                            <p class="mb-1"><i class="fas fa-mobile-alt me-2"></i>Mobile: 0321-2302173</p>
                            <p class="mb-1"><i class="fas fa-mobile-alt me-2"></i>Mobile: 0329-2699996</p>
                            <p class="mb-0"><i class="fas fa-envelope me-2"></i>mukhtarahmed.lawassociates@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Hyderabad Office -->
            <div class="col-lg-6 mb-4">
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
            
            <!-- Nawabshah Office -->
            <div class="col-lg-6 mb-4">
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
            
            <!-- Ghotki Office -->
            <div class="col-lg-6 mb-4">
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

<!-- Office Hours Section -->
<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <h2 class="section-title text-center mb-5">Office Hours</h2>
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h5 class="text-primary">Weekdays</h5>
                                <p><strong>Monday - Friday:</strong> 9:00 AM - 6:00 PM</p>
                                <p><strong>Saturday:</strong> 9:00 AM - 2:00 PM</p>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary">Weekend</h5>
                                <p><strong>Sunday:</strong> Closed</p>
                                <p><strong>Emergency:</strong> Available 24/7 for urgent matters</p>
                            </div>
                        </div>
                        <div class="text-center mt-4">
                            <p class="lead">For urgent legal matters, please call our emergency numbers: <strong>0321-2302173</strong> or <strong>0329-2699996</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Consultation CTA Section -->
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-title">Schedule a Consultation</h2>
                <p class="lead mb-4">Ready to discuss your legal needs? Our experienced team is here to help you navigate complex legal matters with confidence.</p>
                <div class="d-flex flex-wrap justify-content-center gap-3">
                    <a href="tel:03292699996" class="btn btn-primary btn-lg">
                        <i class="fas fa-phone me-2"></i>Call Now
                    </a>
                    <a href="mailto:mukhtarahmed.lawassociates@gmail.com" class="btn btn-outline-primary btn-lg">
                        <i class="fas fa-envelope me-2"></i>Email Us
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 