<?php

namespace App\Http\Controllers;

use App\Galeri;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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

        $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

        $request->file->move(public_path('uploads'), $fileName);

        $galeri = new Galeri;
        $galeri->judul = $request->get('judul');
        $galeri->gambar = $fileName;
        $galeri->author = 'Eto';

        $galeri->save();

        return back()->withStatus(__('Photo successfully uploaded.'));
    }

    public function update(Request $request, Galeri $galeri, $id)
    {
        $request->validate([
            'judul' => 'required',
        ]);

        $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

        $request->file->move(public_path('uploads'), $fileName);

        $galeri = Galeri::find($id);
        $galeri->judul = $request->get('judul');
        $galeri->gambar = $fileName;
        $galeri->author = 'Eto';

        $galeri->save();

        return back()->withStatus(__('Photo successfully updated.'));
    }
    public function destroy($id)
    {
        $galeri = Galeri::find($id);
        $galeri->delete();

        return back()->withStatus(__('Photo successfully deleted.'));
    }
}
