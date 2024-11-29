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
        Schema::create('stok_bahans', function (Blueprint $table) {
            $table->id();
            $table->string('nama_barang');
            $table->string('satuan');
            $table->date('stok_awal');
            $table->decimal('tambahan_stok', 8, 2); 
            $table->decimal('jumlah_mutulasikeluar', 8, 2);
            $table->integer('sisa_stok');
            $table->decimal('angka_diperoleh');
            $table->date('tanggal_update');
            $table->decimal('total', 8, 2); 
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
        Schema::dropIfExists('stok_bahans');
    }
};
