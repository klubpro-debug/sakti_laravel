<?php

namespace App\Http\Controllers;

use App\Berita;
use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function index()
    {
        $berita = Berita::get();
        return view('berita', compact('berita'));
    }
}
