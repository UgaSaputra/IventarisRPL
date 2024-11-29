<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('peminjaman_praktikums', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->string('nama_peminjam');
            $table->string('spesifikasi');
            $table->string('no_iventaris');
            $table->string('nama_laboran');
            $table->string('nama_praktikum');
            $table->date('tanggal_pinjam');
            $table->date('tanggal_kembali');
            $table->integer('jumlah');
            $table->enum('keadaan', ['baik', 'rusak']);
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
        Schema::dropIfExists('peminjaman_praktikums');
    }
};
