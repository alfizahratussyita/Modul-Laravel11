<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProjectController extends Controller
{
    public function index()
    {
        // Menggunakan Raw Expressions untuk memilih semua kolom dan menghitung sisa anggaran
        $projects = DB::table('projects')
                      ->select('name', 'budget', 'spent', DB::raw('budget - spent as remaining_budget'))
                      ->get();

        return view('projects.index', compact('projects'));
    }
}
