<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Jalankan RoleSeeder lebih dulu agar role dan permission sudah tersedia
        $this->call([
            RoleSeeder::class,
        ]);

        // Buat user Super Admin
        $admin = User::updateOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'Admin',
                'password' => Hash::make('password123'),
            ]
        );
        $admin->assignRole('super_admin');

        // Buat user Dokter
        $dokter = User::updateOrCreate(
            ['email' => 'dokter@dokter.com'],
            [
                'name' => 'Dokter',
                'password' => Hash::make('dokter123'),
            ]
        );
        $dokter->assignRole('dokter');

        // Jalankan seeder lainnya (setelah role & user dibuat)
        $this->call([
            PageConfigSeeder::class,
            FooterSeeder::class,
            ProductSeeder::class,
            LogoSeeder::class,
            SeoSeeder::class,
            PasienSeeder::class,
            PenggunaSeeder::class,
            KunjunganSeeder::class,
            RiwayatMedisSeeder::class,
        ]);
    }
}
