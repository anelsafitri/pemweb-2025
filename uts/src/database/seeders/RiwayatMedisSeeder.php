<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\RiwayatMedis;
use App\Models\Kunjungan;
use App\Models\Pengguna;

class RiwayatMedisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $kunjungan = Kunjungan::first();
        $dokter = Pengguna::where('role', 'dokter')->first();

     
        if ($kunjungan && $dokter) {
            RiwayatMedis::create([
                'kunjungan_id' => $kunjungan->id,
                'diagnosa' => 'Karies dentis sedang pada gigi molar bawah kiri',
                'resep' => 'Paracetamol 500mg, diminum 3x sehari setelah makan jika nyeri',
                'saran' => 'Hindari makanan manis dan terlalu keras, kontrol ulang 1 minggu untuk evaluasi penambalan',
                'created_by' => $dokter->id,
            ]);
        }
    }
}
