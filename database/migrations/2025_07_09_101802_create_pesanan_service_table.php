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
        Schema::create('pesanan_service', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('jenis_service_id');
            $table->string('nama_pelanggan');
            $table->text('alamat');
            $table->string('merek');
            $table->string('model');
            $table->date('tanggal_reservasi');
            $table->time('jam_reservasi');
            $table->string('estimasi_biaya')->nullable();
            $table->string('keluhan')->nullable();
            $table->decimal('harga_jasa', 10, 2)->nullable();
            $table->decimal('total', 10, 2)->nullable();
            $table->string('pesanan_id');
            $table->foreign('jenis_service_id')->references('id')->on('jenis_service');
            $table->foreign('pesanan_id')->references('id')->on('pesanan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_service');
    }
};
