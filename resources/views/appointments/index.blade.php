@extends('layouts.app')

@section('title', 'Appointments - MAK Law Associates')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Appointments</h1>
                <p class="lead">Manage your legal consultations with MAK Law Associates</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title mb-4">Book Your Consultation</h3>
                        <p class="mb-4">Ready to discuss your legal matter? Book a consultation with our experienced legal team.</p>
                        <a href="{{ route('appointments.book') }}" class="btn btn-primary btn-lg">
                            <i class="fas fa-calendar-plus me-2"></i>Book Consultation
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 