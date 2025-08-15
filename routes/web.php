<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\PracticeAreasController;
use App\Http\Controllers\TeamController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserDashboardController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/practice-areas', [PracticeAreasController::class, 'index'])->name('practice-areas');
Route::get('/team', [TeamController::class, 'index'])->name('team');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Appointment Routes (Protected - Only for logged in users)
Route::middleware(['auth'])->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('appointments.index');
    Route::get('/appointments/book', [AppointmentController::class, 'book'])->name('appointments.book');
    Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
    Route::get('/appointments/{id}/confirmation', [AppointmentController::class, 'confirmation'])->name('appointments.confirmation');
    
    // User Dashboard Routes
    Route::get('/dashboard', [UserDashboardController::class, 'index'])->name('dashboard');
    Route::get('/appointments/{id}/details', [UserDashboardController::class, 'show'])->name('appointments.details');
});

// Authentication Routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Admin Routes (Protected by admin middleware)
Route::prefix('admin')->name('admin.')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/appointments', [AppointmentController::class, 'adminIndex'])->name('appointments.index');
    Route::get('/appointments/{id}', [AppointmentController::class, 'adminShow'])->name('appointments.show');
    Route::post('/appointments/{id}/confirm', [AppointmentController::class, 'adminConfirm'])->name('appointments.confirm');
    Route::post('/appointments/{id}/reject', [AppointmentController::class, 'adminReject'])->name('appointments.reject');
    Route::post('/appointments/{id}/complete', [AppointmentController::class, 'adminComplete'])->name('appointments.complete');
});
