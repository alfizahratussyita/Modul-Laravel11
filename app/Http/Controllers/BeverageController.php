<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class BeverageController extends Controller
{
    public function index()
    {
        // Data minuman buatan
        $beverages = collect([
            ['id' => 1, 'name' => 'Coke', 'type' => 'Soda'],
            ['id' => 2, 'name' => 'Pepsi', 'type' => 'Soda'],
            ['id' => 3, 'name' => 'Orange Juice', 'type' => 'Juice'],
            ['id' => 4, 'name' => 'Water', 'type' => 'Water'],
            ['id' => 5, 'name' => 'Coffee', 'type' => 'Hot Beverage'],
            ['id' => 6, 'name' => 'Tea', 'type' => 'Hot Beverage'],
            // Tambahkan lebih banyak minuman jika diperlukan
        ]);

        // Paginasi data
        $currentPage = Paginator::resolveCurrentPage();
        $perPage = 5;
        $currentItems = $beverages->slice(($currentPage - 1) * $perPage, $perPage)->all();
        $paginatedBeverages = new LengthAwarePaginator($currentItems, $beverages->count(), $perPage, $currentPage, [
            'path' => Paginator::resolveCurrentPath(),
        ]);

        // Kirim data minuman ke view
        return view('beverages.index', ['beverages' => $paginatedBeverages]);
    }
}
