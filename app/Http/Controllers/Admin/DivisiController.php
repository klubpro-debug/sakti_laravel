<?php

namespace App\Http\Controllers\Admin;

use App\Divisi;
use App\Galeri;
use App\Http\Controllers\Controller;
use App\Kategori;
use Illuminate\Http\Request;

class DivisiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kategori = Kategori::get();
        $divisi = Divisi::get();
        return view('admin.divisi.show', compact(['divisi', 'kategori']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = Kategori::get();
        $divisi = Divisi::get();
        return view('admin.divisi.create', compact(['divisi', 'kategori']));        
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
            'nama' => 'required',
            'bio' => 'required',
            'latar_belakang' => 'required',
            'kegiatan' => 'required',
            'kategori' => 'required',
            'file' => 'required',
        ]);

        $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

        $request->file->move(public_path('uploads'), $fileName);

        $divisi = new Divisi;
        $divisi->nama = $request->get('nama');
        $divisi->bio = $request->get('bio');
        $divisi->latar_belakang = $request->get('latar_belakang');
        $divisi->kegiatan = $request->get('kegiatan');
        $divisi->struktur_id = $request->get('kategori');
        $divisi->kategori_id = $request->get('kategori');
        $divisi->gambar = $fileName;

        $divisi->save();

        return back()->withStatus(__('Divisi berhasil ditambahkan.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kategori = Kategori::get();
        $divisi = Divisi::find($id);
        return view('admin.divisi.update', compact(['divisi', 'kategori']));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('file')) {
            $fileName =  "image-".time().'.'.$request->file->getClientOriginalExtension();

            $request->file->move(public_path('uploads'), $fileName);
            
            $divisi = Divisi::find($id);
            $divisi->nama = $request->get('nama');
            $divisi->bio = $request->get('bio');
            $divisi->latar_belakang = $request->get('latar_belakang');
            $divisi->kegiatan = $request->get('kegiatan');
            $divisi->struktur_id = $request->get('kategori');
            $divisi->kategori_id = $request->get('kategori');
            $divisi->gambar = $fileName;
        } else {
            $divisi = Divisi::find($id);
            $divisi->nama = $request->get('nama');
            $divisi->bio = $request->get('bio');
            $divisi->latar_belakang = $request->get('latar_belakang');
            $divisi->kegiatan = $request->get('kegiatan');
            $divisi->struktur_id = $request->get('kategori');
            $divisi->kategori_id = $request->get('kategori');
            $divisi->gambar = $divisi->gambar;
        }

        $divisi->save();

        return back()->withStatus(__('Divisi berhasil diupdate.'));        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $divisi = Divisi::find($id);
        $divisi->delete();

        return back()->withStatus(__('Divisi berhasil dihapus.'));
    }
}
