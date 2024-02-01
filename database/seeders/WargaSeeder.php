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
            'nama' => 'Admin',
            'ttl' => 'bandung/10-07-2026',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Jln. Katapang',
            'rt' => '07',
            'rw' => '02',
            'desa' => 'ceuri',
            'kecamatan' => 'katapang',
            'agama' => 'islam',
            'status' => 'belum kawin',
            'pekerjaan' => 'pelajar',
            'kewarganegaraan' => 'WNI',
            'telepon' => '0877456739467',
        ]);
    }
}
