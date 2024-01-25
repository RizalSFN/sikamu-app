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
            'nama' => 'Admin SiKaMU',
            'ttl' => 'bandung/19-07-2023',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Jln. Katapang',
            'rt' => '07',
            'rw' => '02',
            'desa' => 'katapang',
            'kecamatan' => 'katapang',
            'agama' => 'islam',
            'status' => 'belum kawin',
            'pekerjaan' => 'pelajar',
            'kewarganegaraan' => 'WNI',
            'telepon' => '034675892034',
        ]);
    }
}
