<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBeritaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('berita', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 191);
            $table->string('slug', 191);
            $table->text('isi');
            $table->bigInteger('kategori_id');
            $table->string('kategori_nama', 191);
            $table->string('gambar', 191);
            $table->bigInteger('pengguna_id');
            $table->string('author', 191);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('berita');
    }
}
