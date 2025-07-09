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
        Schema::create('teknisi', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('nama');
            $table->string('spesialisasi')->nullable();
            $table->string('telepon')->nullable();
            $table->text('alamat')->nullable();
            $table->enum('status_aktif', ['aktif', 'nonaktif'])->default('aktif');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teknisi');
    }
};
