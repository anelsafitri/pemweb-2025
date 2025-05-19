<?php

namespace Database\Seeders;

use App\Models\PageConfig;
use Illuminate\Database\Seeder;

class PageConfigSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PageConfig::create([
            'title' => 'Hello Directioner',
            'detail' => 'Do You Miss US??',
            'image' => '',
        ]);
    }
}