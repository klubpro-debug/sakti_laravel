<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKategoriTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama', 20);
            $table->unsignedBigInteger('galeri_id');
            $table->unsignedBigInteger('berita_id');
            $table->timestamps();
            $table->foreign('galeri_id')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade');     
            $table->foreign('berita_id')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade');              
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kategori');
    }
}
