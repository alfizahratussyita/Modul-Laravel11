<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function showFrom()
    {
        return view('upload-form');
    }

    public function hadleUpload(Request $request)
    {
    
        $request->validate([
            'file' => 'required|file|mimes:jpg,png,pdf|max:2048',
        ],[
            'file.required' => 'file is requeired',
            'file.file' => 'the upload file must be a valid file',
            'file.mimes' => 'only jpg, png, pdf, and docx files are allowed',
            'file.max' => 'the file size must not exceed 2MB'
        ]);

        $file = $request->file('file');
        $path = $file->store('uploads');

        return back()->with('success', 'File uploaded succesfully') ->with('path', $path);
    }
}
