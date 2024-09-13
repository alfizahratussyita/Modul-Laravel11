<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index()
    {
        // Contoh: mengambil data guru yang mengajar Matematika
        $teachers = Teacher::where('subject', 'Mathematics')->get();

        return view('teachers.index', compact('teachers'));
    }
}

