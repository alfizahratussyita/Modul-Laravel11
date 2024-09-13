<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;

class RandomStringController extends Controller
{
    public function generate()
    {
        $randomString = Str::random(16); // Menghasilkan string acak sepanjang 16 karakter
        return view('random', compact('randomString'));
    }
}
