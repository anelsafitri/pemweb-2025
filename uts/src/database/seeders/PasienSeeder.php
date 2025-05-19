<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pasien;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (Pasien::count() == 0) {
            Pasien::create([
                'nama' => 'kendal',
                'nik' => '3273012001010001',
                'tanggal_lahir' => '2005-07-06', 
                'jenis_kelamin' => 'P',
                'alamat' => 'cikupa',
                'no_hp' => '085591402752',
            ]);
        }
    }
}
