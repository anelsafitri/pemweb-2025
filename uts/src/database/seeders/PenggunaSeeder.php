<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengguna;

class PenggunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Pengguna::count() == 0) {
            Pengguna::create([
                'nama' => 'Admin',
                'username' => 'admin123',
                'password' => Hash::make('password123'), // Password dienkripsi
                'role' => 'admin',
            ]);

            Pengguna::create([
                'nama' => 'Dokter',
                'username' => 'doktergigi',
                'password' => Hash::make('dokter123'),
                'role' => 'dokter',
            ]);
        }
    }
}
