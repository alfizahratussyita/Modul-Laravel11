<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChildController extends Controller
{
    public function create()
    {
        return view('child.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:1',
        ]);

        // Simpan data ke database atau lakukan tindakan lain
        // Child::create($validated);

        return redirect('/child/create')->with('success', 'Data berhasil disimpan!');
    }
}

