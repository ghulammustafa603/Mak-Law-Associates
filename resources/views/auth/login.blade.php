@extends('layouts.app')

@section('title', 'Login - MAK Law Associates')

@section('content')
<section class="hero-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h1 class="display-4 fw-bold mb-4">Login</h1>
                <p class="lead">Access your account to manage appointments</p>
            </div>
        </div>
    </div>
</section>

<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title text-center mb-4">Login to Your Account</h3>
                        <p class="text-center text-muted mb-4">Access your account to book consultations and manage appointments</p>
                        
                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif
                        
                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        
                        @if(session('show_register_link'))
                            <div class="alert alert-info">
                                <i class="fas fa-info-circle me-2"></i>
                                <strong>No account found!</strong> Please register first to access our services.
                                <div class="mt-2">
                                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-sm">
                                        <i class="fas fa-user-plus me-1"></i>Register Now
                                    </a>
                                </div>
                            </div>
                        @endif
                        
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="email" class="form-label">Email Address</label>
                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                            </div>
                            
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary btn-lg">
                                    <i class="fas fa-sign-in-alt me-2"></i>Login
                                </button>
                            </div>
                        </form>
                        
                        <div class="text-center mt-4">
                            <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary">Register here</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection 