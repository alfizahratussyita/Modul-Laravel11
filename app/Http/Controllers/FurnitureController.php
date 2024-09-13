<?php

namespace App\Http\Controllers;

use App\Models\Furniture;
use Illuminate\Http\Request;

class FurnitureController extends Controller
{
    public function index()
    {
        // Mengambil furniture yang tidak termasuk kategori 'Seating' atau 'Table'
        $furnitures = Furniture::whereNotIn('type', ['Seating', 'Table'])->get();
        return view('furniture.index', compact('furnitures'));
    }
}
