<?php

namespace App\Http\Controllers\Admin;

use App\Berita;
use App\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $berita = Berita::get();
        return view('admin.berita.show', compact('berita'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $berita = Berita::get();
        $kategori = Kategori::get();
        return view('admin.berita.create', compact(['berita', 'kategori']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
            'file' => 'required',
        ]);

        $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

        $request->file->move(public_path('uploads'), $fileName);

        $berita = new Berita;
        $berita->judul = $request->get('judul');
        $berita->slug = Str::slug($request->get('judul'), '-');
        $berita->isi = $request->get('isi');
        $berita->kategori_id = $request->get('kategori');
        $berita->kategori_nama = Kategori::find($request->get('kategori'))->nama;
        $berita->gambar = $fileName;
        $berita->user_id = Auth::user()->id;
        $berita->author = Auth::user()->name;

        $berita->save();

        return back()->withStatus(__('Berita berhasil ditambahkan.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::get();
        $berita = Berita::find($id);
        return view('admin.berita.update', compact(['berita', 'kategori']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required',
            'isi' => 'required',
            'kategori' => 'required',
        ]);

        if ($request->hasFile('file')) {
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

            $request->file->move(public_path('uploads'), $fileName);
            
            $berita = Berita::find($id);
            $berita->judul = $request->get('judul');
            $berita->slug = $berita->slug;
            $berita->isi = $request->get('isi');
            $berita->kategori_id = $request->get('kategori');
            $berita->kategori_nama = $berita->kategori->nama;
            $berita->gambar = $fileName;
            $berita->user_id = Auth::user()->id;
            $berita->author = Auth::user()->name;
        } else {
            $berita = Berita::find($id);
            $berita->judul = $request->get('judul');
            $berita->slug = $berita->slug;
            $berita->isi = $request->get('isi');
            $berita->kategori_id = $request->get('kategori');
            $berita->kategori_nama = $berita->kategori->nama;
            $berita->gambar = $berita->gambar;
            $berita->user_id = Auth::user()->id;
            $berita->author = Auth::user()->name;            
        }

        $berita->save();

        return back()->withStatus(__('Berita berhasil diupdate.'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $berita = Berita::find($id);
        $berita->delete();

        return back()->withStatus(__('Berita berhasil dihapus.'));
    }
}
