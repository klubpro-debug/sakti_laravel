<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Galeri;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
        $berita = Berita::get();
        return view('divisi', compact(['galeri', 'berita']));
    }

    public function show($nama)
    {
        $berita = Berita::where('slug', $nama)->firstOrFail();
        return view('detailberita', compact('berita'));
    }    
}
