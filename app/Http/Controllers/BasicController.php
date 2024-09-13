<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BasicController extends Controller
{
    public function index()
    {
        $data = 'Hello, Laravel!';
        return view('basic', compact('data'));
    }
}

