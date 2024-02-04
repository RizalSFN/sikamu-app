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
        Schema::create('lapor_bencana', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kategori_bencana_id');
            $table->unsignedBigInteger('warga_id');
            $table->string('alamat', 100);
            $table->string('catatan', 150)->nullable();
            $table->string('koordinat', 50);
            $table->timestamps();
            $table->foreign('kategori_bencana_id')->references('id')->on('kategori_bencana');
            $table->foreign('warga_id')->references('id')->on('wargas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lapor_bencana');
    }
};
