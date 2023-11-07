<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LihatNilaiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PagenotController;
use App\Http\Controllers\KartuController;
use App\Http\Controllers\JenisProdukController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\PelangganController;

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
Route::get('/salam', function(){
    return "Assalamualaikum selamat belajar Laravel";
});
//tambah routing dengan parameter
Route::get('/staff/{nama}/{divisi}', function($nama, $divisi){
    return 'Nama Pegawai : '.$nama. '<br> Departemen : '.$divisi;
});
//routing dengan memanggil nama file dari view
Route::get('/kondisi', function(){
    return view('kondisi');
});
Route::get('/nilai', function(){
    return view('coba.nilai');
});
//routing dengan view dan array data
Route::get('/daftarnilai', function(){
    return view('coba.daftar');
});
//routing manggil dari class controller
Route::get('/datamahasiswa', [LihatNilaiController::class, 'dataMahasiswa']);

Route::prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index']);
    //contoh pemanggilan secara satu persatu function menggunakan get, put, update, delete
    Route::get('/notfound', [PagenotController::class, 'index']);
    
    //memanggil seluruh fungsi atau function menggunakan resource
    Route::resource('kartu', KartuController::class);
    
    // memanggil fungsi satu persatu
    Route::get('/jenis_produk', [JenisProdukController::class, 'index']);
    Route::get('/produk', [ProdukController::class, 'index']);

    Route::resource('pelanggan', PelangganController::class);
});
