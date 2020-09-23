<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDivisiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('divisi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('gambar');
            $table->text('bio');
            $table->text('latar_belakang');
            $table->text('kegiatan');
            $table->unsignedBigInteger('struktur_id');
            $table->unsignedBigInteger('kategori_id');
            $table->timestamps();
            $table->foreign('kategori_id')
                ->references('id')
                ->on('kategori')
                ->onDelete('cascade');       
            $table->foreign('struktur_id')
                ->references('id')
                ->on('struktur')
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
        Schema::dropIfExists('divisi');
    }
}
