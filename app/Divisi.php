<?php

namespace App;

use App\Kategori;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    protected $table = 'divisi';

    public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }
}
