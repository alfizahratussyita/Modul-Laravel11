<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index()
    {
        $comments = [
            ['author' => 'Alice', 'content' => 'Ini adalah postingan yang bagus!'],
            ['author' => 'Bintang', 'content' => 'Sangat informatif, terima kasih telah berbagi.'],
            ['author' => 'Charlie', 'content' => 'Saya belajar banyak dari artikel ini.'],
        ];

        return view('comments.index', compact('comments'));
    }
}
