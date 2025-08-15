@extends('layouts.app')

@section('title', 'Book Consultation - MAK Law Associates')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Book Your Consultation</h1>
                <p class="lead">Schedule a consultation with our legal experts</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Consultation Request Form</h3>
                        
                        <div class="alert alert-success mb-4">
                            <i class="fas fa-user-check me-2"></i>
                            <strong>Welcome, {{ Auth::user()->name }}!</strong> Your information has been pre-filled for your convenience.
                        </div>
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        <form action="{{ route('appointments.store') }}" method="POST">
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="client_name" class="form-label">Full Name *</label>
                                    <input type="text" class="form-control" id="client_name" name="client_name" value="{{ old('client_name', Auth::user()->name) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="client_email" class="form-label">Email Address *</label>
                                    <input type="email" class="form-control" id="client_email" name="client_email" value="{{ old('client_email', Auth::user()->email) }}" required>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="client_phone" class="form-label">Phone Number *</label>
                                    <input type="tel" class="form-control" id="client_phone" name="client_phone" value="{{ old('client_phone') }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="practice_area" class="form-label">Practice Area *</label>
                                    <select class="form-select" id="practice_area" name="practice_area" required>
                                        <option value="">Select Practice Area</option>
                                        <option value="Civil Law">Civil Law</option>
                                        <option value="Banking Law">Banking Law</option>
                                        <option value="Corporate Law">Corporate Law</option>
                                        <option value="Property Law">Property Law</option>
                                        <option value="Constitutional Law">Constitutional Law</option>
                                        <option value="Criminal Law">Criminal Law</option>
                                        <option value="General Consultation">General Consultation</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="case_description" class="form-label">Case Description *</label>
                                <textarea class="form-control" id="case_description" name="case_description" rows="4" required>{{ old('case_description') }}</textarea>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="preferred_date" class="form-label">Preferred Date *</label>
                                    <input type="date" class="form-control" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}" min="{{ date('Y-m-d', strtotime('+1 day')) }}" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="preferred_time" class="form-label">Preferred Time *</label>
                                    <select class="form-select" id="preferred_time" name="preferred_time" required>
                                        <option value="">Select Time</option>
                                        <option value="09:00">9:00 AM</option>
                                        <option value="10:00">10:00 AM</option>
                                        <option value="11:00">11:00 AM</option>
                                        <option value="14:00">2:00 PM</option>
                                        <option value="15:00">3:00 PM</option>
                                        <option value="16:00">4:00 PM</option>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="mb-3">
                                <label for="consultation_type" class="form-label">Consultation Type *</label>
                                <select class="form-select" id="consultation_type" name="consultation_type" required>
                                    <option value="">Select Type</option>
                                    <option value="In-Person">In-Person</option>
                                    <option value="Video Call">Video Call</option>
                                    <option value="Phone Call">Phone Call</option>
                                </select>
                            </div>
                            
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary btn-lg px-5">
                                    Book Consultation
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 