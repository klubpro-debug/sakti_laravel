<?php

namespace App\Http\Controllers;

use App\Berita;
use App\Galeri;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $berita = Berita::limit(4)->get();
        $galeri = Galeri::get();
        return view('home', compact(['berita', 'galeri']));
    }
}
