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
            $table->string('id')->primary();
            $table->string('pesanan_id');
            $table->string('progress');
            $table->timestamp('update_at')->nullable();
            $table->unsignedBigInteger('konfirmasi_admin_id');

            $table->foreign('pesanan_id')->references('id')->on('pesanan');
            $table->foreign('konfirmasi_admin_id')->references('id')->on('admins');
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
