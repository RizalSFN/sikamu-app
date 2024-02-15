<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = [
            [
                'warga_id' => 1,
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'role' => 'admin'
            ],
            [
                'warga_id' => 1,
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('user123'),
                'role' => 'user'
            ]
        ];
        foreach ($user as $s) {
            User::create($s);
        }
    }
}
