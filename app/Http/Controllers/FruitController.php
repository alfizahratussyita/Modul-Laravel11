<?php

namespace App\Http\Controllers;

use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    public function index()
    {
        // Mengambil data dari database dengan urutan berdasarkan harga secara ascending
        $fruits = Fruit::orderBy('price', 'asc')->get();

        return view('fruits.index', compact('fruits'));
    }
}
