<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = DB::table('doctors')
            ->join('appointments', 'doctors.id', '=', 'appointments.doctor_id')
            ->select('doctors.name as doctor_name', 'doctors.specialty', 'appointments.appointment_date', 'appointments.patient_name')
            ->get();

        return view('doctors.index', ['doctors' => $doctors]);
    }
}

