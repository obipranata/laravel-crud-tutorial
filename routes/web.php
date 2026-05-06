<?php

use App\Http\Controllers\CalonSiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/form-daftar', [CalonSiswaController::class, 'create'])->name('form-daftar');
Route::post('/form-daftar', [CalonSiswaController::class, 'store'])->name('proses-daftar');
Route::get('/form-daftar/{id}', [CalonSiswaController::class, 'show'])->name('detail-siswa');
Route::post('/edit/{id}', [CalonSiswaController::class, 'update'])->name('proses-edit');
Route::get('/delete/{id}', [CalonSiswaController::class, 'delete'])->name('delete-siswa');

Route::get('/list-siswa', [CalonSiswaController::class, 'listSiswa'])->name('list-siswa');

