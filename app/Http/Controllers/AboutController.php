<?php

namespace App\Http\Controllers;

use App\Info;
use App\Struktur;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $info = Info::first();
        $struktur = Struktur::get();
        return view('about', compact(['info', 'struktur']));
    }
}
