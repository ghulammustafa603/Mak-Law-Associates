<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointments.index');
    }

    public function book()
    {
        // This method is now protected by auth middleware
        // Users must be logged in to access this page
        return view('appointments.book');
    }

    public function store(Request $request)
    {
        $request->validate([
            'client_name' => 'required|string|max:255',
            'client_email' => 'required|email|max:255',
            'client_phone' => 'required|string|max:20',
            'practice_area' => 'required|string|max:255',
            'case_description' => 'required|string|max:1000',
            'preferred_date' => 'required|date|after:today',
            'preferred_time' => 'required',
            'consultation_type' => 'required|in:In-Person,Video Call,Phone Call',
        ]);

        $appointment = Appointment::create([
            'appointment_number' => Appointment::generateAppointmentNumber(),
            'client_name' => $request->client_name,
            'client_email' => $request->client_email,
            'client_phone' => $request->client_phone,
            'practice_area' => $request->practice_area,
            'case_description' => $request->case_description,
            'preferred_date' => $request->preferred_date,
            'preferred_time' => $request->preferred_time,
            'consultation_type' => $request->consultation_type,
            'status' => 'Pending'
        ]);

        // Send confirmation email to client
        $this->sendAppointmentConfirmation($appointment);

        return redirect()->route('appointments.confirmation', $appointment->id)
            ->with('success', 'Your appointment has been booked successfully!');
    }

    public function confirmation($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('appointments.confirmation', compact('appointment'));
    }

    // Admin Methods
    public function adminIndex()
    {
        $appointments = Appointment::orderBy('created_at', 'desc')->paginate(15);
        return view('admin.appointments.index', compact('appointments'));
    }

    public function adminShow($id)
    {
        $appointment = Appointment::findOrFail($id);
        return view('admin.appointments.show', compact('appointment'));
    }

    public function adminConfirm($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update([
            'status' => 'Confirmed',
            'confirmed_at' => now(),
            'confirmed_by' => 'Admin'
        ]);

        // Send confirmation email to client
        $this->sendAppointmentConfirmed($appointment);

        return redirect()->back()->with('success', 'Appointment confirmed successfully!');
    }

    public function adminReject(Request $request, $id)
    {
        $request->validate([
            'admin_notes' => 'required|string|max:500'
        ]);

        $appointment = Appointment::findOrFail($id);
        $appointment->update([
            'status' => 'Rejected',
            'admin_notes' => $request->admin_notes,
            'rejected_at' => now()
        ]);

        // Send rejection email to client
        $this->sendAppointmentRejected($appointment);

        return redirect()->back()->with('success', 'Appointment rejected successfully!');
    }

    public function adminComplete($id)
    {
        $appointment = Appointment::findOrFail($id);
        $appointment->update(['status' => 'Completed']);

        return redirect()->back()->with('success', 'Appointment marked as completed!');
    }

    private function sendAppointmentConfirmation($appointment)
    {
        // Email notification logic here
        // You can implement email sending using Laravel Mail
    }

    private function sendAppointmentConfirmed($appointment)
    {
        // Email notification logic here
    }

    private function sendAppointmentRejected($appointment)
    {
        // Email notification logic here
    }
}
