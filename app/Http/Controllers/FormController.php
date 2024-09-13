<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function showForm()
    {
        return view('form');
    }

    public function handleForm(Request $request)
    {
        // Validasi dan proses data dari form
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $name = $request->input('name');

        // Proses data (misalnya menyimpan ke database)
        
        return redirect()->back()->with('success', 'Form submitted successfully!');
    }
}
