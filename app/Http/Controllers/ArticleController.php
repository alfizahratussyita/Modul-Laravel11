<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index()
    {
        // Data artikel yang akan ditampilkan
        $articles = [
            [
                'title' => 'Berita 1',
                'content' => 'Ini adalah konten berita pertama.',
            ],
            [
                'title' => 'Berita 2',
                'content' => 'Ini adalah konten berita kedua.',
            ],
            [
                'title' => 'Berita 3',
                'content' => 'Ini adalah konten berita ketiga.',
            ],
        ];

        // Mengembalikan view dengan data artikel
        return view('articles.index', compact('articles'));
    }
}
