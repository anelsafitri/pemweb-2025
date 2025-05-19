<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Logo;

class LogoSeeder extends Seeder
{
    public function run(): void
    {
        if (Logo::count() === 0) {
            Logo::create([
                'title' => 'PemWeb',
                'image' => 'https://via.placeholder.com/150', // dummy image
            ]);
        }
    }
}
