<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MemoryController extends Controller
{
    // Variabel global untuk menyimpan data
    private static $data = null;

    public function setMemory()
    {
        // Menyimpan item ke dalam variabel global
        self::$data = 'This is an in-memory item.';

        return view('memory.set')->with('success', 'Item telah disimpan dalam memori!');
    }

    public function deleteMemory()
    {
        // Menghapus item dari variabel global
        self::$data = null;

        return view('memory.delete')->with('success', 'Item telah dihapus dari memori!');
    }

    // Untuk mendapatkan data dari memori
    public static function getMemory()
    {
        return self::$data;
    }
}
