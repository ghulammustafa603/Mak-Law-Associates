@extends('layouts.app')

@section('content')
<div class="container py-5">
    <div class="row">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h1 class="section-title">My Consultations</h1>
                <a href="{{ route('appointments.book') }}" class="btn btn-gold">
                    <i class="fas fa-plus me-2"></i>Book New Consultation
                </a>
            </div>

            @if($appointments->count() > 0)
                <div class="row">
                    @foreach($appointments as $appointment)
                        <div class="col-lg-6 col-xl-4 mb-4">
                            <div class="card h-100 shadow-sm">
                                <div class="card-header bg-transparent">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <h6 class="mb-0">
                                            <i class="fas fa-calendar-alt me-2 text-primary"></i>
                                            {{ $appointment->appointment_number }}
                                        </h6>
                                        <span class="badge {{ $appointment->status === 'Pending' ? 'bg-warning' : ($appointment->status === 'Confirmed' ? 'bg-success' : ($appointment->status === 'Rejected' ? 'bg-danger' : 'bg-secondary')) }}">
                                            {{ $appointment->status }}
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h6 class="card-title text-primary">{{ $appointment->practice_area }}</h6>
                                    <p class="card-text text-muted small mb-2">
                                        <i class="fas fa-clock me-1"></i>
                                        {{ $appointment->preferred_date }} at {{ $appointment->preferred_time }}
                                    </p>
                                    <p class="card-text text-muted small mb-3">
                                        <i class="fas fa-calendar-plus me-1"></i>
                                        Booked on {{ $appointment->created_at->format('M d, Y') }}
                                    </p>
                                    
                                    @if($appointment->status === 'Confirmed')
                                        <div class="alert alert-success py-2 mb-3">
                                            <i class="fas fa-check-circle me-2"></i>
                                            <strong>Confirmed!</strong> Your consultation has been approved.
                                            @if($appointment->confirmed_at)
                                                <br><small class="text-muted">Confirmed on {{ \Carbon\Carbon::parse($appointment->confirmed_at)->format('M d, Y g:i A') }}</small>
                                            @endif
                                        </div>
                                    @elseif($appointment->status === 'Rejected')
                                        <div class="alert alert-danger py-2 mb-3">
                                            <i class="fas fa-times-circle me-2"></i>
                                            <strong>Rejected</strong>
                                            @if($appointment->rejected_at)
                                                <br><small class="text-muted">Rejected on {{ \Carbon\Carbon::parse($appointment->rejected_at)->format('M d, Y g:i A') }}</small>
                                            @endif
                                        </div>
                                    @elseif($appointment->status === 'Completed')
                                        <div class="alert alert-info py-2 mb-3">
                                            <i class="fas fa-check-double me-2"></i>
                                            <strong>Completed!</strong> This consultation has been completed.
                                        </div>
                                    @else
                                        <div class="alert alert-warning py-2 mb-3">
                                            <i class="fas fa-clock me-2"></i>
                                            <strong>Pending Review</strong> Your consultation request is being reviewed by our team.
                                        </div>
                                    @endif

                                    @if($appointment->admin_notes)
                                        <div class="bg-light p-3 rounded mb-3">
                                            <h6 class="text-primary mb-2">
                                                <i class="fas fa-comment me-2"></i>Admin Response
                                            </h6>
                                            <p class="mb-0 small">{{ $appointment->admin_notes }}</p>
                                        </div>
                                    @endif

                                    <a href="{{ route('appointments.details', $appointment->id) }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-eye me-1"></i>View Details
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="text-center py-5">
                    <div class="mb-4">
                        <i class="fas fa-calendar-times fa-3x text-muted"></i>
                    </div>
                    <h4 class="text-muted mb-3">No Consultations Yet</h4>
                    <p class="text-muted mb-4">You haven't booked any consultations yet. Start by booking your first consultation.</p>
                    <a href="{{ route('appointments.book') }}" class="btn btn-gold">
                        <i class="fas fa-plus me-2"></i>Book Your First Consultation
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection 