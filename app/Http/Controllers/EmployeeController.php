<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // Data karyawan disimpan di array
    private $employees = [
        ['id' => 1, 'name' => 'John Doe', 'email' => 'john@example.com'],
        ['id' => 2, 'name' => 'Jane Smith', 'email' => 'jane@example.com'],
        ['id' => 3, 'name' => 'Mark Taylor', 'email' => 'mark@example.com'],
    ];

    // Method untuk menampilkan daftar karyawan
    public function index()
    {
        // Mengambil semua karyawan
        $employees = session()->get('employees', $this->employees); 
        return view('employees.index', ['employees' => $employees]);
    }

    // Method untuk menghapus karyawan
    public function destroy($id)
    {
        $employees = session()->get('employees', $this->employees); // Mengambil data dari sesi
        // Filter array untuk menghapus karyawan berdasarkan ID
        $employees = array_filter($employees, function ($employee) use ($id) {
            return $employee['id'] != $id;
        });
        session()->put('employees', $employees); // Menyimpan data karyawan ke sesi
        return redirect()->route('employees.index')->with('success', 'Karyawan berhasil dihapus!');
    }
}
