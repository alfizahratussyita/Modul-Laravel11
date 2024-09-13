<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;

class SnackController extends Controller
{
    public function index(Request $request)
    {
        $query = Snack::query();

        if ($request->has('type')) {
            $query->where('type', $request->input('type'));
        }

        if ($request->has('min_price') && $request->has('max_price')) {
            $query->whereBetween('price', [$request->input('min_price'), $request->input('max_price')]);
        }

        $snacks = $query->get();

        return view('snacks.index', compact('snacks'));
    }
}
