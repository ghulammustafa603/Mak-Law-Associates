<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'appointment_number',
        'client_name',
        'client_email',
        'client_phone',
        'practice_area',
        'case_description',
        'preferred_date',
        'preferred_time',
        'consultation_type',
        'status',
        'admin_notes',
        'confirmed_at',
        'rejected_at',
        'confirmed_by'
    ];

    protected $casts = [
        'preferred_date' => 'date',
        'preferred_time' => 'datetime:H:i',
        'confirmed_at' => 'datetime',
        'rejected_at' => 'datetime',
    ];

    public static function generateAppointmentNumber()
    {
        $prefix = 'APT';
        $year = date('Y');
        $month = date('m');
        
        $lastAppointment = self::where('appointment_number', 'like', $prefix . $year . $month . '%')
            ->orderBy('appointment_number', 'desc')
            ->first();
        
        if ($lastAppointment) {
            $lastNumber = intval(substr($lastAppointment->appointment_number, -4));
            $newNumber = $lastNumber + 1;
        } else {
            $newNumber = 1;
        }
        
        return $prefix . $year . $month . str_pad($newNumber, 4, '0', STR_PAD_LEFT);
    }

    public function scopePending($query)
    {
        return $query->where('status', 'Pending');
    }

    public function scopeConfirmed($query)
    {
        return $query->where('status', 'Confirmed');
    }

    public function scopeRejected($query)
    {
        return $query->where('status', 'Rejected');
    }

    public function scopeCompleted($query)
    {
        return $query->where('status', 'Completed');
    }

    public function getStatusBadgeAttribute()
    {
        $badges = [
            'Pending' => 'bg-warning text-dark',
            'Confirmed' => 'bg-success text-white',
            'Rejected' => 'bg-danger text-white',
            'Completed' => 'bg-info text-white',
            'Cancelled' => 'bg-secondary text-white'
        ];

        return $badges[$this->status] ?? 'bg-secondary text-white';
    }

    public function getFormattedDateTimeAttribute()
    {
        return $this->preferred_date->format('F j, Y') . ' at ' . $this->preferred_time->format('g:i A');
    }
}
