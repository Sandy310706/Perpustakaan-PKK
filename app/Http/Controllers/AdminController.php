<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $buku = Buku::count();
        $tersedia = Buku::where('stok', '>', 0)->count();
        $tidaktersedia = Buku::where('stok', '=', 0)->count();
        return view('admin.dashboard', compact('buku', 'tersedia', 'tidaktersedia'));
    }
    public function pinjamansiswa()
    {
        return view('admin.pinjaman');
    }
    public function kelolabuku()
    {
        $jumlah = Buku::count();
        return view('admin.kelolabuku', compact('jumlah'));
    }
}
