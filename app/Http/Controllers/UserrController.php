<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserrController extends Controller
{
    public function show($id)
    {
        return "User ID: " . $id;
    }

    public function profile()
    {
        return "User Profile Page";
    }

    public function urlHelpers()
    {
    $basicUrl = url('/about');
    $namedRouteUrl = route('user.show', ['id' => 1]);  // Corrected here
    $controllerActionUrl = action([UserrController::class, 'profile']);
    $assetUrl = asset('images/logo.png');

    return view('url-helpers', compact('basicUrl', 'namedRouteUrl', 'controllerActionUrl', 'assetUrl'));
    }

}   