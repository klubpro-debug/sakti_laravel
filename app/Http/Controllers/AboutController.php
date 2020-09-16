<?php

namespace App\Http\Controllers;

use App\Info;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $info = Info::first();
        return view('about', compact('info'));
    }
}
