<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showForm()
    {
        return view('page');
    }

    public function submitForm(Request $request)
    {
        //proses validasi dan penyimpanan data disini
        $validateData = $request->validate([
            'name' => 'required|max:225',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'message' => 'required',
        ]);

        //redirect ke method success dengan data flash message
        return redirect()->action([PageController::class, 'success'])->with('status', 'form submitted successfully!');
        
    }
    public function success()
    {
        return view('success');
    }
}
