<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function index()
    {
        $schoolStructure = [
            ['id' => 1, 'name' => 'John Doe', 'role' => 'Principal', 'email' => 'john@gmail.com'],
            ['id' => 2, 'name' => 'Jane Smith', 'role' => 'Teacher', 'email' => 'jane@gmail.com'],
            ['id' => 3, 'name' => 'Alice Johnson', 'role' => 'Counselor', 'email' => 'alice@gmail.com'],
            ['id' => 4, 'name' => 'Bob Brown', 'role' => 'Librarian', 'email' => 'brown@gmail.com'],
        ];

        return view('school.structure', compact('schoolStructure'));
    }
}
