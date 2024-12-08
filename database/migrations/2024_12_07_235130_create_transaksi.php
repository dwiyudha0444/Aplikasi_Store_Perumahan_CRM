<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_users')->unsigned()->nullable();
            $table->bigInteger('id_promosi')->unsigned()->nullable();
            $table->bigInteger('id_bangunan')->unsigned()->nullable();
            $table->string('harga');
            $table->string('berkas');
            $table->string('status');
            $table->string('tanggal_bayar');
            $table->string('metode_pembayaran');
            $table->string('bukti_bayar');
            $table->string('titik_lokasi');
            $table->string('blok');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksi');
    }
};
