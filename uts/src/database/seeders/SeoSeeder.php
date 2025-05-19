<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Seo;

class SeoSeeder extends Seeder
{
    public function run(): void
    {
        Seo::create([
            'title' => 'Default SEO Title',
            'description' => 'This is the default SEO description.',
            'keywords' => 'seo, default, laravel',
            'cannonical_url' => 'https://example.com',
            'robots' => 'index, follow',
            'og_image' => 'default.jpg',
        ]);
    }
}