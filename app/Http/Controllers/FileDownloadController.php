<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\storage;
use Symfon\Component\HttpFoundations\StreamedResponse;

class FileDownloadController extends Controller
{
    public function download()
    {
        $filePath = 'public/contoh.pdf';

        if (!Storage::exists($filePath)) {
            return response()->json(['message' => 'File not found.'], 404);
        }

        $fileName = 'example.pdf';
        $fileContent = Storage::get($filePath);

        return response()->streamDownload(function () use ($fileContent) {
            echo $fileContent;
        }, $fileName);
    }
}
