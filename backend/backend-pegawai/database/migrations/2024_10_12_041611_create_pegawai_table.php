<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('pegawai', function (Blueprint $table) {
            $table->id('nip');
            $table->string('nama', 200);
            $table->string('alamat', 200);
            $table->dateTime('tgl_lahir');
            $table->unsignedBigInteger('id_ruangan');
            $table->foreign('id_ruangan')->references('id_ruangan')->on('ruangan');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pegawai');
    }
};
