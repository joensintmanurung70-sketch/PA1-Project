<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function visiMisi()
    {
        return view('visi-misi'); // memanggil file visi misi blade
    }

    public function sejarah()
    {
        return view('sejarah');
    }

    public function akreditasi()
    {
        return view('akreditasi');
    }
}