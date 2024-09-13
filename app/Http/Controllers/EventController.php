<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index()
    {
        // Contoh data acara
        $events = [
            ['name' => 'Event 1', 'date' => '2024-09-01', 'location' => 'New York'],
            ['name' => 'Event 2', 'date' => '2024-10-15', 'location' => 'Los Angeles'],
            ['name' => 'Event 3', 'date' => '2024-11-20', 'location' => 'Chicago'],
        ];
        
        return view('events.index', compact('events'));
    }
}
