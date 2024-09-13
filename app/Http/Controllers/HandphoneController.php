<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Handphone;

class HandphoneController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->input('name');
        $brand = $request->input('brand');

        // Menggunakan Or Statements
        $handphones = Handphone::where('name', $name)
                               ->orWhere('brand', $brand)
                               ->get();

        return view('handphones.index', compact('handphones'));
    }
}
