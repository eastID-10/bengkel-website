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
        Schema::create('pesanan_sparepart_items', function (Blueprint $table) {
            $table->id();
            $table->string('pesanan_id');
            $table->unsignedBigInteger('sparepart_id');
            $table->integer('kuantitas');
            $table->decimal('harga', 10, 2);
            $table->decimal('total', 10, 2);

            $table->foreign('pesanan_id')->references('id')->on('pesanan')->onDelete('cascade');
            $table->foreign('sparepart_id')->references('id')->on('spareparts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_sparepart_items');
    }
};
