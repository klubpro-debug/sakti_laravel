<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Kategori;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::get();
        return view('berita', compact('berita'));
    }

    public function show($slug)
    {
        $kategori = Kategori::get();
        $berita = Berita::where('slug', $slug)->firstOrFail();
        $terbaru = Berita::getTerbaru();
        $related = Berita::where('kategori_id', $berita->kategori->id)->get();
        return view('detailberita', compact(['berita', 'kategori', 'terbaru', 'related']));
    }
}
