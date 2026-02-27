<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController; 

Route::get('/', function () {
    return view('welcome');
});

Route::get('/visi-misi', [AboutController::class, 'visiMisi'])->name('visi.misi');
Route::get('/sejarah', [AboutController::class, 'sejarah'])->name('sejarah');
Route::get('/akreditasi', [AboutController::class, 'akreditasi'])->name('akreditasi');