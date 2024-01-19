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
    return view('halamanjudul');
});
Route::get('/detail', function () {
    return view('detail');
});
Route::get('/detail1', function () {
    return view('detail1');
});
Route::get('/detail2', function () {
    return view('detail2');
});
