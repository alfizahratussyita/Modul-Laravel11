<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function verifyPassword(Request $request)
    {
        $request->validate([
            'password' => 'required',
        ]);

        $hashedPassword = '$2y$10$eW5NSbXXt.kUVLqF5XkZkuFg4h1cqFqORzhX1Xl5sFs9/NbBQ1M2u'; // Contoh hash dari password "password123"
        
        if (Hash::check($request->password, $hashedPassword)) {
            return back()->with('status', 'Password is correct!');
        } else {
            return back()->with('status', 'Password is incorrect!');
        }
    }
}

