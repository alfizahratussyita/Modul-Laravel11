<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class ItemController extends Controller
{
    public function index()
    {
        $items = collect([
            ['id' => 1, 'name' => 'Tango Drink Italian Choco 250mL'],
            ['id' => 2, 'name' => 'Coca Cola'],
            ['id' => 3, 'name' => 'Buavita Juice Jambu'],
            ['id' => 4, 'name' => 'Greenfields UHT Milk Full Cream'],
            ['id' => 5, 'name' => 'Ultra Milk Chocolate'],
            ['id' => 6, 'name' => 'Cimory Fresh Milk UHT Blueberry'],
            ['id' => 7, 'name' => 'Fruit Tea'],
            ['id' => 8, 'name' => 'Nescafe'],
            ['id' => 9, 'name' => 'Pocari Sweat'],
            ['id' => 10, 'name' => 'Frisian Flag Susu Cair UHT Milky Choco'],
            ['id' => 11, 'name' => 'Morinaga Chil Go'],
        ]);

        $perPage = 4;
        $currentPage = LengthAwarePaginator::resolveCurrentPage(); // Halaman saat ini
        $currentPageItems = $items->slice(($currentPage - 1) * $perPage, $perPage)->all();
        
        // LengthAwarePaginator memberikan info total item, total halaman, dll.
        $paginatedItems = new LengthAwarePaginator(
            $currentPageItems,
            $items->count(), // Total items
            $perPage,
            $currentPage,
            ['path' => LengthAwarePaginator::resolveCurrentPath()]
        );

        return view('items.index', ['items' => $paginatedItems]);
    }
}
