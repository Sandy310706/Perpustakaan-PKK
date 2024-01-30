<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }
    public function prosesLogin(Request $request)
    {
        $dataValidasi = Validator::make($request->all(),[
            'primaryKey' => 'required',
            'password' => 'required|min:8'
        ],
        [
            'primaryKey.required' => 'NISN atau Email wajib di isi.',
            'password.required' => 'Password wajib di isi.',
            'password.min' => 'Password minimal 8 digit.',
        ]);
        if($dataValidasi->fails()) {
            return redirect()->back()->withErrors($dataValidasi)->withInput();
        }
        if(filter_var($request->primaryKey, FILTER_VALIDATE_EMAIL)){
            if(!User::where('email', $request->primaryKey)->first()){
                return redirect()->back()->withErrors(['primaryKey' => 'Email tidak ditemukan'])->withInput();
            }
        }elseif(!User::where('nisn', $request->primaryKey)->first()){
            return redirect()->back()->withErrors(['primaryKey' => 'NISN tidak ditemukan'])->withInput();
        }
        if(filter_var($request->primaryKey, FILTER_VALIDATE_EMAIL)){
            Auth::attempt($request->only('email', 'password'));
            $request->session()->regenerate();
            return redirect()->route('admin.dashboard');
        }elseif(Auth::attempt($request->only('nisn', 'password'))){
            $request->session()->regenerate();
            return redirect('/');
        }else{
            return redirect()->back()->withErrors(['password' => 'Password salah'])->withInput();
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
