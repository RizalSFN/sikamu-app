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
            'nik' => '3204091907060002',
            'no_kk' => '3244244563745632',
            'nama' => 'Warga',
            'ttl' => 'bandung/10-01-2024',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Jln. Katapang',
            'rt' => 7,
            'rw' => 2,
            'desa' => 'ceuri',
            'kecamatan' => 'katapang',
            'telepon' => '0877456739467',
            'keterangan' => 'kepala keluarga'
        ]);
    }
}
