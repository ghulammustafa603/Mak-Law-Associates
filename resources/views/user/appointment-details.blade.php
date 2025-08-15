@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="section-title">Consultation Details</h1>
                <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">
                    <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
                </a>
            </div>

            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="mb-0">
                            <i class="fas fa-calendar-alt me-2"></i>
                            {{ $appointment->appointment_number }}
                        </h5>
                        <span class="badge {{ $appointment->status === 'Pending' ? 'bg-warning' : ($appointment->status === 'Confirmed' ? 'bg-success' : ($appointment->status === 'Rejected' ? 'bg-danger' : 'bg-secondary')) }} fs-6">
                            {{ $appointment->status }}
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Status Alert -->
                    @if($appointment->status === 'Confirmed')
                        <div class="alert alert-success">
                            <i class="fas fa-check-circle me-2"></i>
                            <strong>Your consultation has been confirmed!</strong>
                            <br>Please prepare for your consultation on the scheduled date and time.
                            @if($appointment->confirmed_at)
                                <br><small class="text-muted">Confirmed on {{ \Carbon\Carbon::parse($appointment->confirmed_at)->format('M d, Y g:i A') }}</small>
                            @endif
                        </div>
                    @elseif($appointment->status === 'Rejected')
                        <div class="alert alert-danger">
                            <i class="fas fa-times-circle me-2"></i>
                            <strong>Your consultation request has been rejected.</strong>
                            @if($appointment->rejected_at)
                                <br><small class="text-muted">Rejected on {{ \Carbon\Carbon::parse($appointment->rejected_at)->format('M d, Y g:i A') }}</small>
                            @endif
                        </div>
                    @elseif($appointment->status === 'Completed')
                        <div class="alert alert-info">
                            <i class="fas fa-check-double me-2"></i>
                            <strong>This consultation has been completed.</strong>
                            <br>Thank you for choosing our services.
                        </div>
                    @else
                        <div class="alert alert-warning">
                            <i class="fas fa-clock me-2"></i>
                            <strong>Your consultation request is pending review.</strong>
                            <br>Our team will review your request and get back to you soon.
                        </div>
                    @endif

                    <!-- Admin Response -->
                    @if($appointment->admin_notes)
                        <div class="alert alert-primary">
                            <h6 class="alert-heading">
                                <i class="fas fa-comment me-2"></i>Admin Response
                            </h6>
                            <p class="mb-0">{{ $appointment->admin_notes }}</p>
                        </div>
                    @endif

                    <!-- Consultation Details -->
                    <div class="row">
                        <div class="col-md-6">
                            <h6 class="text-primary mb-3">
                                <i class="fas fa-info-circle me-2"></i>Consultation Information
                            </h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="text-muted">Practice Area:</td>
                                    <td><strong>{{ $appointment->practice_area }}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Consultation Type:</td>
                                    <td><strong>{{ $appointment->consultation_type }}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Preferred Date:</td>
                                    <td><strong>{{ $appointment->preferred_date }}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Preferred Time:</td>
                                    <td><strong>{{ $appointment->preferred_time }}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Booked On:</td>
                                    <td><strong>{{ $appointment->created_at->format('M d, Y g:i A') }}</strong></td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h6 class="text-primary mb-3">
                                <i class="fas fa-user me-2"></i>Your Information
                            </h6>
                            <table class="table table-borderless">
                                <tr>
                                    <td class="text-muted">Name:</td>
                                    <td><strong>{{ $appointment->client_name }}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Email:</td>
                                    <td><strong>{{ $appointment->client_email }}</strong></td>
                                </tr>
                                <tr>
                                    <td class="text-muted">Phone:</td>
                                    <td><strong>{{ $appointment->client_phone }}</strong></td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <!-- Case Description -->
                    <div class="mt-4">
                        <h6 class="text-primary mb-3">
                            <i class="fas fa-file-alt me-2"></i>Case Description
                        </h6>
                        <div class="bg-light p-3 rounded">
                            <p class="mb-0">{{ $appointment->case_description ?: 'No description provided.' }}</p>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="mt-4 d-flex gap-2">
                        <a href="{{ route('dashboard') }}" class="btn btn-outline-primary">
                            <i class="fas fa-arrow-left me-2"></i>Back to Dashboard
                        </a>
                        @if($appointment->status === 'Rejected')
                            <a href="{{ route('appointments.book') }}" class="btn btn-gold">
                                <i class="fas fa-plus me-2"></i>Book New Consultation
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 