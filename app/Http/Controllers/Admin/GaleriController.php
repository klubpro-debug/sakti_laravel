<?php

namespace App\Http\Controllers\Admin;

use App\Galeri;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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

        if ($request->hasFile('file')) {
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

            $request->file->move(public_path('uploads'), $fileName);
    
            $galeri = new Galeri;
            $galeri->judul = $request->get('judul');
            $galeri->gambar = $fileName;
            $galeri->user_id = Auth::user()->id;
            $galeri->author = Auth::user()->name;
        } else {
            $galeri = new Galeri;
            $galeri->judul = $request->get('judul');
            $galeri->gambar = $galeri->gambar;
            $galeri->user_id = Auth::user()->id;
            $galeri->author = Auth::user()->name;            
        }    

        $galeri->save();

        return back()->withStatus(__('Galeri berhasil ditambahkan.'));
    }

    public function update(Request $request, Galeri $galeri, $id)
    {
        $request->validate([
            'judul' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

            $request->file->move(public_path('uploads'), $fileName);
    
            $galeri = Galeri::find($id);
            $galeri->judul = $request->get('judul');
            $galeri->gambar = $fileName;
            $galeri->user_id = Auth::user()->id;
            $galeri->author = Auth::user()->name;  
        } else {
            $galeri = Galeri::find($id);
            $galeri->judul = $request->get('judul');
            $galeri->gambar = $galeri->gambar;
            $galeri->user_id = Auth::user()->id;
            $galeri->author = Auth::user()->name;  
        }

        $galeri->save();

        return back()->withStatus(__('Galeri berhasil diupdate.'));
    }
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();

        return back()->withStatus(__('Galeri berhasil dihapus.'));
    }
}
