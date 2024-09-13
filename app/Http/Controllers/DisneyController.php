<?php

namespace App\Http\Controllers;

use App\Models\Disney;
use Illuminate\Http\Request;

class DisneyController extends Controller
{
    public function index()
    {
        // Ambil karakter Disney yang belum pensiun (retired_at NULL)
        $characters = Disney::whereNull('retired_at')->get();

        return view('disneys.index', compact('characters'));
    }
}
