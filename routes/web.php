<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlatController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LaporanController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('layouts.app');
});

Route::get('/bahan/input', [AlatController::class, 'create'])->name('bahan.create');
Route::post('/bahan/store', [AlatController::class, 'store'])->name('bahan.store');
Route::get('/iventaris/input', [AlatController::class, 'index'])->name('iventaris.index');
Route::post('/iventaris/store', [AlatController::class, 'store'])->name('iventaris.store');

Route::get('/barangmasuk/input', [BarangController::class, 'index'])->name('barangmasuk.masuk');
Route::post('/barangmasuk/store', [BarangController::class, 'store'])->name('barangmasuk.store');
Route::get('/barangkeluar/input', [BarangController::class, 'show'])->name('barangkeluar.keluar');
Route::post('/barangkeluar/input', [BarangController::class, 'input'])->name('barangkeluar.input');

Route::get('/peminjaman/store', [PeminjamanController::class, 'index'])->name('peminjaman.index');
Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])->name('peminjaman.store');

Route::get('/pengembalian/input', [PengembalianController::class, 'index'])->name('pengembalian.index');
Route::post('/pengembalian/store', [PengembalianController::class, 'input'])->name('pengembalian.input');

Route::get('/laporan/kartu-alat-rusak', [LaporanController::class, 'kartuAlatRusak'])->name('laporan.kartuAlatRusak');
Route::post('/laporan/kartu-alat-rusak', [LaporanController::class, 'store'])->name('alatrusak.store');


Route::get('/laporan/kartu-perawatan', [LaporanController::class, 'kartuPerawatan'])->name('laporan.kartuPerawatan');
Route::post('/laporan/kartu-perawatan', [LaporanController::class, 'input'])->name('kartuperawatan.input');

Route::get('/laporan/kartu-stok-bahan', [LaporanController::class, 'kartuStokBahan'])->name('laporan.kartuStokBahan');
Route::post('/laporan/kartu-stok-bahan', [LaporanController::class, 'create'])->name('kartuStokBahan.create');


Route::get('/laporan/kartu-inventaris-update', [LaporanController::class, 'kartuInventarisUpdate'])->name('laporan.kartuInventarisUpdate');
Route::get('/laporan/berita-acara', [LaporanController::class, 'beritaAcara'])->name('laporan.beritaAcara');
