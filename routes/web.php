<?php

use Illuminate\Support\Facades\Route;
// Pastikan baris import di bawah ini ada agar Laravel tidak bingung mencari filenya
use App\Http\Controllers\LandingPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// Kita ganti function() menjadi memanggil Controller
Route::get('/', [LandingPageController::class, 'index']);