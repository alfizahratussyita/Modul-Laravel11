<?php

// app/Http/Controllers/MusicController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MusicController extends Controller
{
    public function index()
    {
        // Daftar musik statis
        $musics = [
            'Love Story',
            'Long Live',
            'Cruel Summer',
            'Lover'
        ];

        return view('music.index', compact('musics'));
    }
}
