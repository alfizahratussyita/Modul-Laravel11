<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Data buku statis sebagai contoh
        $books = [
            ['id' => 1, 'title' => 'Bumi', 'author' => 'Tere Liye', 'price' => 98.000],
            ['id' => 2, 'title' => 'Rindu', 'author' => 'Tere Liye', 'price' => 71.000],
            ['id' => 3, 'title' => 'Komet Minor', 'author' => 'Tere Liye', 'price' => 98.000],
        ];

        return view('books.index', compact('books'));
    }
}
