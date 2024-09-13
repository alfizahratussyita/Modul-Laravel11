<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        //mengambil data pelanggan dengan paginasi 5 per halaman
        $customers = Customer::paginate(2);

        //mengirim data ke view
        return view('customers.index', ['customers' => $customers]);
    }
}
