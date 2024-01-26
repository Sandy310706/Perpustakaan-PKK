<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('user.layouts.app');
});
Route::get('/detail', function () {
    return view('user.detailbuku');
});
Route::get('login', function(){
    return view('auth.login');
});
Route::get('/history', function () {
    return view('history');
});

Route::get('/dashboard', function () {
    return view('admin.layouts.app');
});