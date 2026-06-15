<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\bluerayDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\KeranjangBelanjaDBController;
use App\Http\Controllers\NilaiDBController;
use App\Http\Controllers\EasDBController;

Route::get('/', function () {
    return view('menu');
});

Route::get('halo', function () {
    return "<h1> Halo, Selamat datang</h1> di Tutorial Laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('Tugas.blog');
});

Route::get('week4', function () {
	return view('Tugas.assignment4');
});

Route::get('week3', function () {
	return view('Tugas.newsweek3');
});

Route::get('news1', function () {
	return view('Tugas.news');
});

Route::get('resp', function () {
	return view('Tugas.responsive');
});

Route::get('temp', function () {
	return view('Tugas.template');
});

Route::get('mycss', function () {
	return view('Tugas.mycss1');
});

Route::get('intro1', function () {
	return view('Tugas.intro');
});

Route::get('pert5', function () {
	return view('Tugas.pertemuan5');
});

Route::get('idx', function () {
	return view('Tugas.index');
});

Route::get('lnktree', function () {
	return view('Tugas.linktree');
});

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'coba']);

//route CRUD
Route::get('/pegawai',[PegawaiDBController::class, 'coba']);
Route::get('/pegawai/tambah',[PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store',[PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}',[PegawaiDBController::class, 'edit']);
Route::post('/pegawai/update',[PegawaiDBController::class, 'update']);
Route::get('/pegawai/hapus/{id}',[PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari',[PegawaiDBController::class, 'cari']);

// route CRUD Blueray
Route::get('/blueray', [bluerayDBController::class, 'blueray']);
Route::get('/blueray/tambah', [bluerayDBController::class, 'tambah']);
Route::post('/blueray/store', [bluerayDBController::class, 'store']);
Route::get('/blueray/edit/{id}', [bluerayDBController::class, 'edit']);
Route::post('/blueray/update', [bluerayDBController::class, 'update']);
Route::get('/blueray/hapus/{id}', [bluerayDBController::class, 'hapus']);
Route::get('/blueray/cari', [bluerayDBController::class, 'cari']);

//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');


// route CRUD Keranjang Belanja
Route::get('/keranjangbelanja', [KeranjangBelanjaDBController::class, 'index']);
Route::get('/keranjangbelanja/beli', [KeranjangBelanjaDBController::class, 'beli']);
Route::post('/keranjangbelanja/store', [KeranjangBelanjaDBController::class, 'store']);
Route::get('/keranjangbelanja/batal/{id}', [KeranjangBelanjaDBController::class, 'batal']);

// route CRUD Nilai Kuliah
Route::get('/nilaikuliah', [NilaiDBController::class, 'index']);
Route::get('/nilaikuliah/tambah', [NilaiDBController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiDBController::class, 'store']);

// EasDB
Route::get('/eas', [EasDBController::class, 'index']);
Route::get('/eas/view/{kodepegawai}', [EasDBController::class, 'view']);
Route::get('/eas/tambah', [EasDBController::class, 'tambah']);
Route::post('/eas/store', [EasDBController::class, 'store']);

