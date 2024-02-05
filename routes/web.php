<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BukuController;

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
    return dd(auth());
});
Route::get('/', function () {
    return view('user.landingpage');
});
Route::get('dashboard', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('pinjaman-siswa', [AdminController::class, 'pinjamansiswa'])->name('admin.pinjamansiswa');
Route::get('kelola-buku', [AdminController::class, 'kelolabuku'])->name('KelolaBuku');
Route::get('data-buku', [BukuController::class, 'index'])->name('Buku');
Route::post('tambah-buku', [BukuController::class, 'store'])->name('TambahBuku');
Route::get('login', [AuthController::class, 'login'])->name('Login');
Route::post('login', [AuthController::class, 'prosesLogin'])->name('ProsesLogin');
Route::get('/detail', function () {
    return view('user.detailbuku');
});
Route::get('/history', function () {
    return view('history');
});
