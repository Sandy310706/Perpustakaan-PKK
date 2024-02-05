<?php

namespace App\Http\Controllers;

use App\Models\Buku;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class BukuController extends Controller
{
    public function index()
    {
        $buku = Buku::all();
        return response()->json($buku);
    }
    public function store(Request $request)
    {
        $dataValidasi = Validator::make($request->all(), [
            'kode' => 'required|numeric',
            'judul' => 'required|string|max:100',
            'deskripsi' => 'required',
            'penulis' => 'required|max:100',
            'stok' => 'required|numeric',
            'img' => 'required|mimes:png,jpg,jpeg|max:4096'
        ],
        [
            'kode.required' => 'Kolom Kode buku harus di isi.',
            'judul.required' => 'Kolom Judul wajib di isi.',
            'deskripsi.required' => 'Kolom Deskripsi wajib di isi.',
            'penulis.required' => 'Kolom Penulis wajib di isi.',
            'stok.required' => 'Stok Buku harus diisi.',
            'img.required' => 'Gambar tidak boleh kosong.',
            'kode.numeric' => 'Wajib angka.',
            'judul.string' => 'Wajib huruf.',
            'stok.numeric' => 'Wajib angka.',
            'judul.max' => 'Maksimal 100 digit.',
            'penulis.max' => 'Maksimal 100 digit.',
            'img.max' => 'Maksimal 4 MB',
            'img.mimes' => 'Format foto salah.',
        ]);
        if($dataValidasi->fails()){
            return response()->json(['errors' => $dataValidasi->errors()], 422);
        }else{
            $newData = new Buku;
            $newData->kodebuku = $request->kode;
            $newData->judul = $request->judul;
            $newData->penulis = $request->penulis;
            $newData->stok = $request->stok;
            $newData->deskripsi = $request->deskripsi;
            if($request->hasFile('img')){
                $fileFoto = $request->file('img');
                $newName = uniqid().$fileFoto->getClientOriginalName();
                $path = 'FotoCoverBuku/'.$newName;
                Storage::disk('public')->put($path, file_get_contents($fileFoto));
                $newData->foto = $newName;
            }
            $newData->save();
            return response()->json(['success' => $newData]);
        }
    }
}
