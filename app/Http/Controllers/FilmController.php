<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilmController extends Controller
{
    private $films = [
        ['id' => 1, 'title' => 'Inception', 'director' => 'Christopher Nolan', 'release_date' => '2010-07-16'],
        ['id' => 2, 'title' => 'The Matrix', 'director' => 'Lana Wachowski, Lilly Wachowski', 'release_date' => '1999-03-31'],
    ];

    // Menampilkan daftar film
    public function index()
    {
        return view('films.index', ['films' => $this->films]);
    }

    // Menampilkan detail film
    public function show($id)
    {
        $film = collect($this->films)->firstWhere('id', $id);
        if (!$film) {
            abort(404, 'Film not found');
        }
        return view('films.index', ['film' => $film]);
    }
}
