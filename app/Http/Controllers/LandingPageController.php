<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    /**
     * Menampilkan halaman utama (landing page).
     */
    public function index()
    {
        // Fungsi ini akan mencari file di resources/views/welcome.blade.php
        return view('welcome');
    }
}