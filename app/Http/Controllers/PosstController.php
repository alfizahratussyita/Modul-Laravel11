<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        // Misalnya kita punya data post
        $post = [
            'title' => 'Contoh Judul Postingan yang Sangat Panjang dan Bisa Terpotong',
            'content' => 'Ini adalah konten dari postingan yang sangat panjang dan memerlukan pemotongan agar lebih mudah dibaca dalam tampilan.'
        ];

        return view('posts.index', ['post' => $post]);
    }
}
