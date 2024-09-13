<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function downloadFile()
    {
        // Path to the file
        $filePath = storage_path('app/public/coba.pdf');

        // Check if file exists
        if (!file_exists($filePath)) {
            abort(404);
        }

        // Download the file
        return response()->download($filePath, 'coba.pdf', [
            'Content-Type' => 'application/pdf',
        ]);
    }

    public function viewFile()
    {
        // Path to the file
        $filePath = storage_path('app/public/coba.pdf');

        // Check if file exists
        if (!file_exists($filePath)) {
            abort(404);
        }

        // View the file in the browser
        return response()->file($filePath, [
            'Content-Type' => 'application/pdf',
        ]);
    }
}