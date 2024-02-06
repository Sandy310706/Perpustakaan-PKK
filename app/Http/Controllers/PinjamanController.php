<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Buku;
use App\Models\Pinjaman;
use Illuminate\Http\Request;

class PinjamanController extends Controller
{
    public function index(Request $request, $id)
    {
        $data = new Pinjaman();
        $data->user_id = auth()->user()->id;
        $data->buku_id = $id;
        $data->tanggal_peminjaman = Carbon::now()->format('Y-m-d');
        $data->save();
        return response()->json($data);
    }
    public function konfirmasi($id)
    {

    }
}
