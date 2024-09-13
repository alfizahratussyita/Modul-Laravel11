<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    private $songs = [
        ['title' => 'Shape of You', 'artist' => 'Ed Sheeran'],
        ['title' => 'Blinding Lights', 'artist' => 'The Weeknd'],
        ['title' => 'Bad Guy', 'artist' => 'Billie Eilish'],
        ['title' => 'Uptown Funk', 'artist' => 'Mark Ronson ft. Bruno Mars'],
    ];

    public function search(Request $request)
    {
        $query = $request->input('query');
        
        // Filter songs based on the query
        $filteredSongs = array_filter($this->songs, function ($song) use ($query) {
            return str_contains(strtolower($song['title']), strtolower($query));
        });

        return view('songs.index', ['songs' => $filteredSongs]);
    }
}
