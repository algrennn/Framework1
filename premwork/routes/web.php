<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\LoginController;

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


Route::get('/dashboard', function () {
    return view('admin.dashboard');
});


Route::get('/SIPENSISPED', [LoginController::class, 'showLogin'])->name('user.login');   
Route::get('/postLogin', [LoginController::class, 'login'])->name('user.postLogin');   


/* ROUTES FOR GURU */
Route::get('/showGuru', [GuruController::class, 'showGuru'])->name('admin.guru');
Route::get('/guru_tambah', function () {
    return view('admin.guru_tambah');
});
Route::post('/guru_aksi', [GuruController::class, 'guru_aksi']);
Route::get('/guru_hapus/{guru_id}', [GuruController::class, 'destroy']);
Route::any('/guru_edit/{guru_id}', [GuruController::class, 'edit']);
Route::any('/guru_update/{guru_id}', [GuruController::class, 'update'])->name('guru.update');



/* ROUTES FOR KELAS */
Route::get('/showKelas', [KelasController::class, 'showKelas'])->name('admin.kelas');
Route::get('/kelas_tambah', function () {
    return view('admin.kelas_tambah');
});
Route::post('/kelas_aksi', [KelasController::class, 'kelas_aksi']);
Route::get('/kelas_hapus/{kelas_id}', [KelasController::class, 'destroy']);
Route::any('/kelas_edit/{kelas_id}', [KelasController::class, 'edit']);
Route::any('/kelas_update/{kelas_id}', [KelasController::class, 'update'])->name('kelas.update');



/* ROUTES FOR SISWA */
Route::get('/showSiswa', [SiswaController::class, 'showSiswa'])->name('admin.siswa');
Route::get('/siswa_tambah', function () {
    return view('admin.siswa_tambah');
});
Route::post('/siswa_aksi', [SiswaController::class, 'siswa_aksi']);
Route::get('/siswa_hapus/{siswa_id}', [SiswaController::class, 'destroy']);
Route::any('/siswa_edit/{siswa_id}', [SiswaController::class, 'edit']);
Route::any('/siswa_update/{siswa_id}', [SiswaController::class, 'update'])->name('siswa.update');
Route::get('/siswa_tambah', [SiswaController::class, 'kategoriSiswa']);



/* ROUTES FOR KATEGORI */
Route::get('/showKategori', [KategoriController::class, 'showKategori'])->name('admin.kategori');
Route::get('/kategori_tambah', function () {
    return view('admin.kategori_tambah');
});
Route::post('/kategori_aksi', [KategoriController::class, 'kategori_aksi']);
Route::get('/kategori_hapus/{kategori_id}', [KategoriController::class, 'destroy']);
Route::any('/kategori_edit/{kategori_id}', [KategoriController::class, 'edit']);
Route::any('/kategori_update/{kategori_id}', [KategoriController::class, 'update'])->name('kategori.update');


/* ROUTES FOR KATEGORI */
Route::get('/showHistoryMasuk', [HistoryController::class, 'showHistoryMasuk'])->name('admin.historyMasuk');
Route::get('/showHistoryKeluar', [HistoryController::class, 'showHistoryKeluar'])->name('admin.historyKeluar');
Route::any('/keluar_edit/{keluar_id}', [HistoryController::class, 'edit']);
Route::any('/keluar_update/{keluar_id}', [HistoryController::class, 'update'])->name('histKeluar.update');