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
        Schema::create('wargas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('nik');
            $table->string('nama', 100);
            // todo add foto column
            $table->string('ttl', 50)->nullable();
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('alamat', 100);
            $table->string('rt', 3);
            $table->string('rw', 3);
            $table->string('desa', 50);
            $table->string('kecamatan', 50);
            $table->enum('agama', ['islam', 'protestan', 'katholik', 'hindu', 'buddha', 'kong hu cu']);
            $table->enum('status', ['kawin', 'belum kawin']);
            $table->string('pekerjaan', 50)->nullable();
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
