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
            'nama' => 'Rizal Sofiana',
            'tempat/tanggal_lahir' => 'bandung/19-07-2006',
            'jenis_kelamin' => 'laki-laki',
            'alamat' => 'Jln. Nata Endah',
            'rt' => '07',
            'rw' => '02',
            'desa' => 'sayati',
            'kecamatan' => 'margahayu',
            'agama' => 'islam',
            'status' => 'belum kawin',
            'pekerjaan' => 'pelajar',
            'kewarganegaraan' => 'WNI',
            'telepon' => '087788873882',
        ]);
    }
}
