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
        Schema::create('ronda_absens', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('ronda_id');
            $table->unsignedBigInteger('warga_id');
            $table->enum('status', ['hadir', 'izin', 'sakit', 'tidak hadir']);
            $table->string('keterangan')->nullable();
            $table->timestamps();
            $table->foreign('ronda_id')->references('id')->on('ronda_datas');
            $table->foreign('warga_id')->references('id')->on('wargas');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ronda_absens');
    }
};
