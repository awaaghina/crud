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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// tambah dibawah ini
Route::resource('produk', App\Http\Controllers\ProdukController::class)->middleware('auth');
// export pdf
Route::post('produk/export-produk', [App\Http\Controllers\ProdukController::class, 'exportPdf'])->name('produk.export-pdf');
// produk merk
Route::resource('merk', App\Http\Controllers\MerkController::class)->middleware('auth');
