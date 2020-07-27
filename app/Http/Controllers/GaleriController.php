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
            'judul' => 'required',
            'filefoto' => 'required',
        ]);

        //Move Uploaded File
        $destinationPath = public_path('uploads');
        $request->file->move($destinationPath, $file->getClientOriginalName());

        $galeri = new Galeri([
            'judul' => $request->get('judul'),
            'gambar' => $file->getClientOriginalName(),
        ]);

        dd($galeri);

        // $galeri->save();

        // return redirect()->route('galeri.index')
        //     ->with('success', 'Photo created successfully.');
    }
}
