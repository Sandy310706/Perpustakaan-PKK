<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }
    public function pinjamansiswa()
    {
        return view('admin.pinjaman');
    }
    public function kelolabuku()
    {
        return view('admin.kelolabuku');
    }
}
