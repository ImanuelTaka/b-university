<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SambutanController;
use App\Http\Controllers\SdmController;
use App\Http\Controllers\SejarahController;
use App\Http\Controllers\VisimisiController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class, 'index'])->name('index');
Route::get('/sejarah', [SejarahController::class, 'index'])->name('sejarah');
Route::get('/visi-misi', [VisimisiController::class, 'index'])->name('visimisi');
Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');
Route::get('/sambutan', [SambutanController::class, 'index'])->name('sambutan');
Route::get('/sdm', [SdmController::class, 'index'])->name('sdm');
Route::get('/pengumuman', [PengumumanController::class, 'index'])->name('pengumuman');
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
Route::get('pengumuman/{slug}', [PengumumanController::class, 'show'])->name('pengumuman.show');
Route::get('/berita/{slug}', [NewsController::class, 'show'])->name('berita.show');