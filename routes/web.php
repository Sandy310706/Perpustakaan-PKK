<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\User;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/test', function(){
    dd(Auth::user()->role);
});
Route::get('/', function () {
    return view('user.landingpage');
});
Route::get('home', function(){
    return redirect('/');
});
Route::group(['middleware' => 'admin'], function(){
    Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('pinjaman-siswa', [AdminController::class, 'pinjamansiswa'])->name('admin.pinjamansiswa');
    Route::get('kelola-buku', [AdminController::class, 'kelolabuku'])->name('KelolaBuku');
    Route::get('data-buku', [BukuController::class, 'index'])->name('Buku');
    Route::get('detail-buku/{id}', [BukuController::class, 'detail'])->name('DetailBuku');
    Route::post('tambah-buku', [BukuController::class, 'store'])->name('TambahBuku');
    Route::post('update-buku/{id}', [BukuController::class, 'update'])->name('UpdateBuku');
    Route::delete('hapus-buku/{id}', [BukuController::class, 'hapus'])->name('HapusBuku');
    Route::get('kelola-user', [UserController::class, 'index'])->name('KelolaUser');
    Route::get('data-user', [UserController::class, 'user'])->name('DataUser');
});
Route::group(['middleware' => 'guest'], function(){
    Route::get('login', [AuthController::class, 'login'])->name('Login');
    Route::post('login', [AuthController::class, 'prosesLogin'])->name('ProsesLogin');
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/detail', function () {
        return view('user.detailbuku');
    });
    Route::get('/history', function () {
        return view('history');
    });
    Route::post('/logout', [AuthController::class, 'logout'])->name('Logout');
});
