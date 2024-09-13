<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // Mengambil hanya kolom 'name' dan 'grade' dari tabel 'students'
        $students = Student::select('name', 'grade')->get();

        // Mengembalikan view dengan data siswa
        return view('students.index', compact('students'));
    }
}
