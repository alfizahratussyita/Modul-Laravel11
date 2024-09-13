<?php

// app/Http/Controllers/OrderController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function show($id)
    {
        $order = Order::find($id);
        return view('order.show', compact('order'));
    }
}
