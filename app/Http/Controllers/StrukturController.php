<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Struktur;
use Illuminate\Http\Request;

class StrukturController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get();
        $struktur = Struktur::get();
        return view('struktur.show', compact(['kategori', 'struktur']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->hasFile('file')) {
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

            $request->file->move(public_path('uploads'), $fileName);
    
            $struktur = new Struktur;
            $struktur->nama = $request->get('nama');
            $struktur->jabatan = $request->get('jabatan');
            $struktur->bio = $request->get('bio');
            $struktur->kategori_id = $request->get('kategori');
            $struktur->gambar = $fileName;
        } else {
            $struktur = new Struktur;
            $struktur->nama = $request->get('nama');
            $struktur->jabatan = $request->get('jabatan');
            $struktur->bio = $request->get('bio');
            $struktur->kategori_id = $request->get('kategori');
            $struktur->gambar = $struktur->gambar;
        }    

        $struktur->save();

        return back()->withStatus(__('Struktur berhasil ditambahkan.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function show(Struktur $struktur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function edit(Struktur $struktur)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if ($request->hasFile('file')) {
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

            $request->file->move(public_path('uploads'), $fileName);
    
            $struktur = Struktur::find($id);
            $struktur->nama = $request->get('nama');
            $struktur->jabatan = $request->get('jabatan');
            $struktur->bio = $request->get('bio');
            $struktur->kategori_id = $request->get('kategori');
            $struktur->gambar = $fileName;
        } else {
            $struktur = Struktur::find($id);
            $struktur->nama = $request->get('nama');
            $struktur->jabatan = $request->get('jabatan');
            $struktur->bio = $request->get('bio');
            $struktur->kategori_id = $request->get('kategori');
            $struktur->gambar = $struktur->gambar;
        }    

        $struktur->save();

        return back()->withStatus(__('Struktur berhasil diupdate.'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Struktur  $struktur
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $struktur = Struktur::find($id);
        $struktur->delete();

        return back()->withStatus(__('Struktur berhasil dihapus.'));
    }
}
