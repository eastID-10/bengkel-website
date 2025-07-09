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
        Schema::create('pesanan_service_spareparts', function (Blueprint $table) {
            $table->id();
            $table->string('pesanan_service_id');
            $table->unsignedBigInteger('sparepart_id');
            $table->integer('kuantitas');
            $table->decimal('harga_sparepart', 10, 2);
            $table->decimal('total', 10, 2);

            $table->foreign('pesanan_service_id')->references('id')->on('pesanan_service')->onDelete('cascade');
            $table->foreign('sparepart_id')->references('id')->on('spareparts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pesanan_service_spareparts');
    }
};
