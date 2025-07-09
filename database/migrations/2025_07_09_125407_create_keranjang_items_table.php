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
        Schema::create('keranjang_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('keranjang_id');
            $table->unsignedBigInteger('sparepart_id');
            $table->integer('kuantitas');

            $table->foreign('keranjang_id')->references('id')->on('keranjang');
            $table->foreign('sparepart_id')->references('id')->on('spareparts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keranjang_items');
    }
};
