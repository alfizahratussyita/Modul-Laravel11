<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;

class CacheController extends Controller
{
    public function checkCache()
    {
        // Mengecek apakah item 'key' ada di cache
        $exists = Cache::has('key');

        // Mengembalikan view dengan informasi cache
        return view('cache.check', ['exists' => $exists]);
    }

    public function setCache()
    {
        // Menyimpan item ke dalam cache selama 10 menit
        Cache::put('key', 'value', now()->addMinutes(10));
        return redirect('/check-cache');
    }
}
