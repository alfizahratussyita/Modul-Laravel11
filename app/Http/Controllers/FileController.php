<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function showForm()
    {
        return view('upload-file');
    }

    public function uploadFile(Request $request)
    {
        //valdasi file yang di unggah
        $request->validate([
            'file' => 'required|mimes:jpg,jpeg,png,pdf|max:2048', //contoh validasi
        ]);

        //mengambil file yang diunggah
        $file = $request->file('file');

        //menyimpan file ke dalam folder 'upload'
        $filePath = $file->store('upload', 'public');

        return back()->with('success', 'File uploaded successfully.')->with('file', $filePath);
    }
}
