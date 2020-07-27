<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function index()
    {
        $galeri = Galeri::get();
        return view('galeri.show', compact('galeri'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required',
            'judul' => 'required',
        ]);
  
        $fileName = $request->file->getClientOriginalName();
   
        $request->file->move(public_path('uploads'), $fileName);

        $galeri = new Galeri([
            'judul' => $request->get('judul'),
            'gambar' => $fileName,
            'author' => 'Eto',
        ]);

        $galeri->save();

        return back()->withStatus(__('Photo successfully uploaded.'));

    }
}
