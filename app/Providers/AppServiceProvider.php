<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Membagikan variabel 'siteName' dan 'tagline' ke semua view
        View::share('siteName', 'Berita Harian');
        View::share('tagline', 'Menyajikan Berita Terpercaya Setiap Hari');
    }

    public function register()
    {
        //
    }
}
