<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function show($id, $name, $address)
    {
        return view('profile', compact('id', 'name', 'address'));
    }
}
