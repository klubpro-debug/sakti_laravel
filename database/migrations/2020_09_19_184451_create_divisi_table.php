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
            $table->unsignedBigInteger('struktur_id');
            $table->string('nama');
            $table->string('gambar');
            $table->string('latar_belakang');
            $table->string('kegiatan');
            $table->timestamps();
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
