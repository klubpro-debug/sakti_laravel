<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $table = 'kategori';
    protected $fillable = [
        'nama',
    ];    

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }

    public function divisi()
    {
        return $this->hasMany(Divisi::class);
    }    

    public function struktur()
    {
        return $this->hasMany(Struktur::class);
    }    

    public function galeri()
    {
        return $this->hasMany(Galeri::class);
    }    
}
