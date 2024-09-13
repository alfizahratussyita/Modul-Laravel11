<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    // Menampilkan keranjang belanja
    public function showCart()
    {
        // Mengambil item keranjang dari session atau array kosong jika belum ada
        $cartItems = session('cart', []);

        return view('cart.show', compact('cartItems'));
    }

    // Menambahkan item ke keranjang belanja
    public function addToCart(Request $request)
    {
        $item = $request->input('item');  // Mengambil item dari input form

        // Menambahkan item ke dalam session array
        session()->push('cart', $item);

        return redirect()->route('cart.show')->with('success', 'Item berhasil ditambahkan ke keranjang!');
    }

    // Menghapus semua item dari keranjang belanja
    public function clearCart()
    {
        session()->forget('cart');  // Menghapus session 'cart'

        return redirect()->route('cart.show')->with('success', 'Keranjang telah dikosongkan!');
    }
}
