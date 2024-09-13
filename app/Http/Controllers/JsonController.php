<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JsonController extends Controller
{
    public function getJsonResponse()
    {
        //contoh data untuk mengembalikan sebagai JSON response
        $data = [
            'name' => 'alfi',
            'email' => 'alfi@gmail.com',
            'phone' => '135-435-789',
            'address' => 'Pati'
        ];

        return response()->json($data);
    }

    public function PostJsonResponse(Request $request)
    {
        //mengambil semua data input
        $inputData = $request->all();

        //contoh respons JSON dengan data yang dikirim oleh pengguna
        $response = [
            'status' => 'success',
            'message' => 'Data received successfully',
            'data' => $inputData
        ];

        return response()->json($response);
    }
}
