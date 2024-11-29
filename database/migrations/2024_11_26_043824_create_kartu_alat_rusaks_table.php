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
        Schema::create('kartu_alat_rusaks', function (Blueprint $table) {
            $table->id();
            $table->string('nama_alat');
            $table->date('tanggal');
            $table->bigInteger('no_iventaris');
            $table->text('kerusakan');
            $table->text('keterangan')->nullable();
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
        Schema::dropIfExists('kartu_alat_rusaks');
    }
};
