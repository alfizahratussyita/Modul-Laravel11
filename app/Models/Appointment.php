<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $fillable = ['doctor_id', 'appointment_date', 'patient_name'];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
