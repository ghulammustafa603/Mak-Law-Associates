@extends('layouts.app')

@section('title', 'Admin - Appointments Management')

<style>
    .status-badge {
        border-radius: 20px;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        transition: all 0.3s ease;
        min-width: 120px;
        text-align: center;
    }
    
    .status-badge:hover {
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.15);
    }
    
    .bg-warning {
        background: linear-gradient(135deg, #ffc107, #ffb300) !important;
        border: 1px solid #ffa000;
    }
    
    .bg-success {
        background: linear-gradient(135deg, #28a745, #20c997) !important;
        border: 1px solid #1e7e34;
    }
    
    .bg-danger {
        background: linear-gradient(135deg, #dc3545, #c82333) !important;
        border: 1px solid #bd2130;
    }
    
    .bg-info {
        background: linear-gradient(135deg, #17a2b8, #138496) !important;
        border: 1px solid #117a8b;
    }
    
    .bg-secondary {
        background: linear-gradient(135deg, #6c757d, #5a6268) !important;
        border: 1px solid #545b62;
    }
    
    .table th {
        background: linear-gradient(135deg, #1e3a8a, #1e40af);
        color: white;
        font-weight: 600;
        border: none;
        padding: 15px 10px;
    }
    
    .table td {
        vertical-align: middle;
        padding: 12px 10px;
    }
    
    .btn-primary {
        background: linear-gradient(135deg, #007bff, #0056b3);
        border: none;
        border-radius: 20px;
        padding: 8px 16px;
        font-weight: 500;
        transition: all 0.3s ease;
    }
    
    .btn-primary:hover {
        background: linear-gradient(135deg, #0056b3, #004085);
        transform: translateY(-1px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.2);
    }
</style>

@section('content')
<div class="container-fluid py-4">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Appointments Management</h3>
                </div>
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Appointment #</th>
                                    <th>Client Name</th>
                                    <th>Practice Area</th>
                                    <th>Date & Time</th>
                                    <th>Type</th>
                                    <th>Status</th>
                                    <th>Created</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($appointments as $appointment)
                                    <tr>
                                        <td>
                                            <strong>{{ $appointment->appointment_number }}</strong>
                                        </td>
                                        <td>
                                            <div>{{ $appointment->client_name }}</div>
                                            <small class="text-muted">{{ $appointment->client_email }}</small>
                                        </td>
                                        <td>{{ $appointment->practice_area }}</td>
                                        <td>
                                            <div>{{ $appointment->formatted_date_time }}</div>
                                        </td>
                                        <td>{{ $appointment->consultation_type }}</td>
                                        <td>
                                            <span class="badge {{ $appointment->status_badge }} fs-6 px-3 py-2 fw-bold status-badge">
                                                <i class="fas {{ $appointment->status === 'Pending' ? 'fa-clock' : ($appointment->status === 'Confirmed' ? 'fa-check-circle' : ($appointment->status === 'Rejected' ? 'fa-times-circle' : ($appointment->status === 'Completed' ? 'fa-check-double' : 'fa-question-circle'))) }} me-1"></i>
                                                {{ $appointment->status }}
                                            </span>
                                        </td>
                                        <td>{{ $appointment->created_at->format('M j, Y') }}</td>
                                        <td>
                                            <a href="{{ route('admin.appointments.show', $appointment->id) }}" 
                                               class="btn btn-sm btn-primary">
                                                View Details
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="8" class="text-center">No appointments found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="d-flex justify-content-center">
                        {{ $appointments->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 