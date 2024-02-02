<?php

namespace Database\Seeders;

use App\Models\KategoriBencana;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriBencanaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kategori = [
            [
                "nama" => "Pencurian"
            ],
            [
                "nama" => "Kekerasan"
            ],
            [
                "nama" => "kecelakaan"
            ]
        ];

        foreach ($kategori as $k) {
            KategoriBencana::create($k);
        }
    }
}
