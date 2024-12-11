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
        Schema::create('pemberkasan', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('id_users')->unsigned()->nullable();
            $table->bigInteger('id_transaksi')->unsigned()->nullable();
            $table->bigInteger('id_bangunan')->unsigned()->nullable();
            $table->string('berkas');
            $table->string('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemberkasan');
    }
};
