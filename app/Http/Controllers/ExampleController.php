<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExampleController extends Controller
{
    // Metode untuk menampilkan formulir
    public function index()
    {
        return view('example'); // Pastikan ada file view 'example.blade.php'
    }

    // Metode untuk memproses data formulir
    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Proses data (misalnya, hanya menampilkan data di log)
        \Log::info('Data yang dikirim:', $validated);

        // Kembalikan ke halaman sebelumnya dengan pesan sukses
        return redirect()->route('example.index')->with('success', 'Data berhasil diproses!');
    }
}
