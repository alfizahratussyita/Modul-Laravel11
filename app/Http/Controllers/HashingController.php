<?php

// app/Http/Controllers/HashingController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HashingController extends Controller
{
    public function index()
    {
        return view('hash');
    }

    public function hashPassword(Request $request)
    {
        $request->validate([
            'password' => 'required|string|min:6',
        ]);

        $hashedPassword = Hash::make($request->password);

        return view('hash', ['hashedPassword' => $hashedPassword]);
    }
}
