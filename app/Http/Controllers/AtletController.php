<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atlet;

class AtletController extends Controller
{
    public function index() {
        $atletNames = Atlet::pluck('name');
        return view('atlets.index', compact('atletNames'));
    }
}
