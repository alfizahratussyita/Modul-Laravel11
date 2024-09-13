<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        // Contoh data produk
        $products = [
            ['id' => 1, 'name' => 'Utramilk', 'price' => 10000],
            ['id' => 2, 'name' => 'Chitato', 'price' => 15000],
            ['id' => 3, 'name' => 'Sponge', 'price' => 14000],
        ];

        // Passing data ke view
        return view('products', compact('products'));
    }
}
