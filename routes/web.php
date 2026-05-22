<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProdukController;
use App\Http\Controllers\MahasiswaController;

Route::get('/', function () {
    return view('welcome');
});


// Route::get('/produk', function(){
//     return ("Ini halaman produk");
// });

Route::get('/produk', [ProdukController::class, 'index']);//unused
Route::get('/showproduk', [ProdukController::class, 'show']);//unused
Route::get('/viewproduk', [ProdukController::class, 'view']);//unused

Route::get('/mahasiswa', [MahasiswaController::class, 'index']);

Route::get('/mahasiswa/create', [MahasiswaController::class, 'create']);
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store']);


Route::get('/mahasiswa/{id}/edit', [MahasiswaController::class, 'edit']);
Route::put('/mahasiswa/{id}/update', [MahasiswaController::class, 'update']);

Route::get('/mahasiswa/{id}/delete', [MahasiswaController::class, 'destroy']);

