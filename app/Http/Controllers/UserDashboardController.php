<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Auth;

class UserDashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $appointments = Appointment::where('client_email', $user->email)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('user.dashboard', compact('appointments'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $appointment = Appointment::where('id', $id)
            ->where('client_email', $user->email)
            ->firstOrFail();

        return view('user.appointment-details', compact('appointment'));
    }
} 