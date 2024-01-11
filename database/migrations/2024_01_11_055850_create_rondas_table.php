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
        Schema::create('rondas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_akun');
            $table->enum('status_kehadiran', ['hadir', 'sakit', 'izin', 'tidak hadir']);
            $table->string('catatan')->nullable();
            $table->timestamps();
            $table->foreign('id_akun')->references('id')->on('akun');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rondas');
    }
};
