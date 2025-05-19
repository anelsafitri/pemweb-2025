<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kunjungan;
use App\Models\Pasien;
use App\Models\Pengguna;
use Carbon\Carbon;

class KunjunganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
      
        $pasien = Pasien::first(); 
        $admin = Pengguna::first(); 

        // Cek jika datanya tersedia
        if ($pasien && $admin) {
            Kunjungan::create([
                'pasien_id' => $pasien->id,
                'tanggal' => Carbon::now()->toDateString(), 
                'keluhan' => 'Gigi sakit saat makan atau minum',
                'tindakan' => 'Pemeriksaan, pembersihan karies, penambalan gigi (filling)',
                'created_by' => $admin->id,
            ]);
        }
    }
}
