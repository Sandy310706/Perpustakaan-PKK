<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function prosesLogin(Request $request)
    {
        $dataValidasi = Validator::make($request->all(), [
            'primaryKey' => 'required',
            'password' => 'required|min:8'
        ],
        [
            'primaryKey.required' => 'NISN atau Email wajib di isi.',
            'password.required' => 'Password wajib di isi.',
            'password.min' => 'Password minimal 8 digit.',
        ]);
        if ($dataValidasi->fails()) {
            return redirect()->back()->withErrors($dataValidasi)->withInput();
        }
    }
}
