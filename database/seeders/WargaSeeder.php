<?php

namespace Database\Seeders;

use App\Models\Warga;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WargaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Warga::create([
            'nik' => '3209021912060002',
            'no_kk' => '3244244563745632',
            'nama' => 'Warga',
            'ttl' => 'Bandung/10-01-2024',
            'alamat' => 'Jln. Katapang',
            'rt' => 7,
            'rw' => 2,
            'desa' => 'ceuri',
            'kecamatan' => 'katapang',
            'telepon' => '0877456739467',
            'keterangan' => 'kepala keluarga',
            'koordinat' => '-7.009973, 107.547529'
        ]);
    }
}
