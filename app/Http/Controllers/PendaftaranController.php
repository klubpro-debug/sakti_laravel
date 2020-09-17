<?php

namespace App\Http\Controllers;

use App\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendaftaran = new Pendaftaran;
        return view('form.form', compact('pendaftaran'));
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

        $request->validate([
            'nama' => 'required',
            'nim' => 'required',
            'fakultas' => 'required',
            'jurusan' => 'required',
            'minat' => 'required',
            'divisi' => 'required',
            'whatsapp' => 'required|numeric',
            'instagram' => 'required',
            'email' => 'required|email',
        ]);

        $pendaftaran = new Pendaftaran;
        $pendaftaran->nama = $request->get('nama');
        $pendaftaran->nim = $request->get('nim');
        $pendaftaran->fakultas = $request->get('fakultas');
        $pendaftaran->jurusan = $request->get('jurusan');
        $pendaftaran->minat = $request->get('minat');
        $pendaftaran->divisi = $request->get('divisi');
        $pendaftaran->whatsapp = $request->get('whatsapp');
        $pendaftaran->instagram = $request->get('instagram');
        $pendaftaran->email = $request->get('email');

        $pendaftaran->save();

        return back()->withStatus(__('Terimakasih telah mendaftar.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pendaftaran $pendaftaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pendaftaran  $pendaftaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pendaftaran $pendaftaran)
    {
        //
    }
}
