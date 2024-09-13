<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        // Data pengguna statis
        $users = [
            ['id' => 1, 'name' => 'Alfi', 'email' => 'Alfi@example.com'],
            ['id' => 2, 'name' => 'Zahra', 'email' => 'Zahra@example.com'],
            ['id' => 3, 'name' => 'Syita', 'email' => 'Syita@example.com'],
        ];
        
        // Kirim data ke view
        return view('users.index', ['users' => $users]);
    }
}

