<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul', 'slug', 'isi', 'kategori_id' , 'kategori_nama', 'gambar', 'user_id' , 'author',
    ];

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
