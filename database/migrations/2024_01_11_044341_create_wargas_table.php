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
        Schema::create('warga', function (Blueprint $table) {
            $table->unsignedBigInteger('nik')->primary();
            $table->string('nama', 100);
            $table->string('tempat/tanggal_lahir', 50);
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('alamat', 100);
            $table->tinyInteger('rt', false, true);
            $table->tinyInteger('rw', false, true);
            $table->string('desa', 50);
            $table->string('kecamatan', 50);
            $table->enum('agama', ['islam', 'protestan', 'katholik', 'hindu', 'buddha', 'kong hu cu']);
            $table->enum('status', ['kawin', 'belum kawin']);
            $table->string('pekerjaan', 50);
            $table->enum('kewarganegaraan', ['WNI', 'WNA']);
            $table->string('telepon', 15)->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('warga');
    }
};
