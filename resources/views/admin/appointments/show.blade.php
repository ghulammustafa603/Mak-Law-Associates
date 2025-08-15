@extends('layouts.app')

@section('title', 'Admin - Appointment Details')

@section('content')
<div class="container py-4">
    <div class="row">
        <div class="col-lg-8 mx-auto">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="card-title">Appointment Details</h3>
                        <a href="{{ route('admin.appointments.index') }}" class="btn btn-secondary">
                            Back to List
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <!-- Appointment Information -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <h5 class="text-primary">Appointment Information</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Appointment #:</strong></td>
                                    <td>{{ $appointment->appointment_number }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <td>
                                        <span class="badge {{ $appointment->status_badge }}">
                                            {{ $appointment->status }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Practice Area:</strong></td>
                                    <td>{{ $appointment->practice_area }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Consultation Type:</strong></td>
                                    <td>{{ $appointment->consultation_type }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Preferred Date:</strong></td>
                                    <td>{{ $appointment->preferred_date->format('F j, Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Preferred Time:</strong></td>
                                    <td>{{ $appointment->preferred_time->format('g:i A') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5 class="text-primary">Client Information</h5>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Name:</strong></td>
                                    <td>{{ $appointment->client_name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $appointment->client_email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Phone:</strong></td>
                                    <td>{{ $appointment->client_phone }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Booked On:</strong></td>
                                    <td>{{ $appointment->created_at->format('F j, Y g:i A') }}</td>
                                </tr>
                                @if($appointment->confirmed_at)
                                <tr>
                                    <td><strong>Confirmed On:</strong></td>
                                    <td>{{ $appointment->confirmed_at->format('F j, Y g:i A') }}</td>
                                </tr>
                                @endif
                                @if($appointment->rejected_at)
                                <tr>
                                    <td><strong>Rejected On:</strong></td>
                                    <td>{{ $appointment->rejected_at->format('F j, Y g:i A') }}</td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>

                    <!-- Case Description -->
                    <div class="mb-4">
                        <h5 class="text-primary">Case Description</h5>
                        <div class="border rounded p-3 bg-light">
                            {{ $appointment->case_description }}
                        </div>
                    </div>

                    <!-- Admin Notes -->
                    @if($appointment->admin_notes)
                    <div class="mb-4">
                        <h5 class="text-primary">Admin Notes</h5>
                        <div class="border rounded p-3 bg-warning bg-opacity-10">
                            {{ $appointment->admin_notes }}
                        </div>
                    </div>
                    @endif

                    <!-- Admin Actions -->
                    @if($appointment->status === 'Pending')
                    <div class="border-top pt-4">
                        <h5 class="text-primary mb-3">Admin Actions</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <form action="{{ route('admin.appointments.confirm', $appointment->id) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-success btn-lg w-100">
                                        <i class="fas fa-check me-2"></i>Confirm Appointment
                                    </button>
                                </form>
                            </div>
                            <div class="col-md-6 mb-3">
                                <button type="button" class="btn btn-danger btn-lg w-100" data-bs-toggle="modal" data-bs-target="#rejectModal">
                                    <i class="fas fa-times me-2"></i>Reject Appointment
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($appointment->status === 'Confirmed')
                    <div class="border-top pt-4">
                        <h5 class="text-primary mb-3">Appointment Actions</h5>
                        <form action="{{ route('admin.appointments.complete', $appointment->id) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-info btn-lg">
                                <i class="fas fa-check-double me-2"></i>Mark as Completed
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Reject Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Reject Appointment</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form action="{{ route('admin.appointments.reject', $appointment->id) }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="admin_notes" class="form-label">Reason for Rejection *</label>
                        <textarea class="form-control" id="admin_notes" name="admin_notes" rows="4" required 
                                  placeholder="Please provide a reason for rejecting this appointment..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Reject Appointment</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection 