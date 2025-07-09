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
        Schema::create('jenis_service', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('kode');
            $table->string('nama');
            $table->string('kategori')->nullable();
            $table->string('durasi_estimasi')->nullable();
            $table->text('deskripsi')->nullable();
            $table->decimal('harga_standard', 10, 2);
            $table->string('gambar')->nullable();
            $table->string('status_service')->default('aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jenis_service');
    }
};
