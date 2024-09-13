<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function show($id)
    {
        $brand = Brand::find($id); // Mengambil satu baris berdasarkan ID
        return view('brand.show', compact('brand'));
    }

    public function showColumn($id)
    {
        $brandName = Brand::where('id', $id)->value('name'); // Mengambil satu kolom berdasarkan ID
        return view('brand.show_column', compact('brandName'));
    }
}
