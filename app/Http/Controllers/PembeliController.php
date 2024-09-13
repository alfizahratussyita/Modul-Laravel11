<?php

namespace App\Http\Controllers;

use App\Models\Pembeli;
use Illuminate\Http\Request;

class PembeliController extends Controller
{
    public function index()
    {
        // Menghitung total pembelian
        $totalPembelian = Pembeli::sum('total_pembelian');

        // Menghitung rata-rata pembelian
        $rataRataPembelian = Pembeli::avg('total_pembelian');

        // Menghitung pembelian maksimum
        $maksimumPembelian = Pembeli::max('total_pembelian');

        // Menghitung pembelian minimum
        $minimumPembelian = Pembeli::min('total_pembelian');

        return view('pembeli.index', compact('totalPembelian', 'rataRataPembelian', 'maksimumPembelian', 'minimumPembelian'));
    }
}
