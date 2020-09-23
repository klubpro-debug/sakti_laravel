<?php

namespace App\Http\Controllers;

use App\Divisi;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        //
    }

    public function show($nama)
    {
        $divisi = Divisi::where('nama', $nama)->firstOrFail();
        $galeri = $divisi->kategori->galeri;
        $berita = $divisi->kategori->berita;
        return view('divisi', compact(['divisi', 'nama', 'galeri', 'berita']));
    }    
}
