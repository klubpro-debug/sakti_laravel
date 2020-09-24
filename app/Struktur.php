<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Struktur extends Model
{
    protected $table = 'struktur';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
