<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        // Daftar film yang akan ditampilkan
        $movies = collect([
            ['title' => 'Inception', 'year' => 2010],
            ['title' => 'The Matrix', 'year' => 1999],
            ['title' => 'Interstellar', 'year' => 2014],
            ['title' => 'The Dark Knight', 'year' => 2008],
            ['title' => 'Fight Club', 'year' => 1999],
            ['title' => 'Pulp Fiction', 'year' => 1994],
            ['title' => 'Forrest Gump', 'year' => 1994],
            ['title' => 'The Godfather', 'year' => 1972],
        ]);

        // Menentukan jumlah item per halaman
        $perPage = 4;

        // Mendapatkan halaman saat ini
        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Mengambil item untuk halaman saat ini
        $currentPageItems = $movies->slice(($currentPage - 1) * $perPage, $perPage)->values();

        // Membuat LengthAwarePaginator untuk array
        $paginatedMovies = new LengthAwarePaginator(
            $currentPageItems,
            $movies->count(),
            $perPage,
            $currentPage,
            ['path' => $request->url(), 'query' => $request->query()]
        );

        return view('movies.index', ['movies' => $paginatedMovies]);
    }
}
