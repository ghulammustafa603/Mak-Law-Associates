@extends('layouts.app')

@section('title', 'Appointment Confirmation - MAK Law Associates')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Appointment Confirmed!</h1>
                <p class="lead">Thank you for booking your consultation with MAK Law Associates</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body text-center">
                        <div class="mb-4">
                            <i class="fas fa-check-circle fa-5x text-success"></i>
                        </div>
                        
                        <h3 class="card-title mb-4">Your consultation request has been submitted successfully!</h3>
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5 class="text-primary">Appointment Details</h5>
                                <p><strong>Appointment #:</strong> {{ $appointment->appointment_number }}</p>
                                <p><strong>Practice Area:</strong> {{ $appointment->practice_area }}</p>
                                <p><strong>Consultation Type:</strong> {{ $appointment->consultation_type }}</p>
                                <p><strong>Preferred Date:</strong> {{ $appointment->preferred_date->format('F j, Y') }}</p>
                                <p><strong>Preferred Time:</strong> {{ $appointment->preferred_time->format('g:i A') }}</p>
                            </div>
                            <div class="col-md-6">
                                <h5 class="text-primary">Client Information</h5>
                                <p><strong>Name:</strong> {{ $appointment->client_name }}</p>
                                <p><strong>Email:</strong> {{ $appointment->client_email }}</p>
                                <p><strong>Phone:</strong> {{ $appointment->client_phone }}</p>
                                <p><strong>Status:</strong> 
                                    <span class="badge bg-warning">{{ $appointment->status }}</span>
                                </p>
                            </div>
                        </div>
                        
                        <div class="alert alert-info">
                            <h6><i class="fas fa-info-circle me-2"></i>What happens next?</h6>
                            <p class="mb-0">Our legal team will review your consultation request and contact you within 24-48 hours to confirm your appointment or discuss any necessary adjustments.</p>
                        </div>
                        
                        <div class="mt-4">
                            <a href="{{ route('home') }}" class="btn btn-primary me-3">
                                <i class="fas fa-home me-2"></i>Back to Home
                            </a>
                            <a href="{{ route('appointments.book') }}" class="btn btn-outline-primary">
                                <i class="fas fa-calendar-plus me-2"></i>Book Another Consultation
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 