<?php

namespace Database\Seeders;

use App\Models\Social;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SocialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $socials = [
            ['name' => 'Facebook', 'icon' => 'fa-facebook', 'color' => '#3b5998', 'url' => 'https://facebook.com', 'status' => true],
            ['name' => 'Twitter', 'icon' => 'fa-twitter', 'color' => '#1da1f2', 'url' => 'https://twitter.com', 'status' => true],
            ['name' => 'Instagram', 'icon' => 'fa-instagram', 'color' => '#e1306c', 'url' => 'https://instagram.com', 'status' => true],
            ['name' => 'LinkedIn', 'icon' => 'fa-linkedin', 'color' => '#0077b5', 'url' => 'https://linkedin.com', 'status' => true],
            ['name' => 'YouTube', 'icon' => 'fa-youtube', 'color' => '#ff0000', 'url' => 'https://youtube.com', 'status' => true],
            ['name' => 'WhatsApp', 'icon' => 'fa-whatsapp', 'color' => '#25d366', 'url' => 'https://whatsapp.com', 'status' => true],
        ];

        foreach ($socials as $social) {
            Social::create($social);
        }
    }
}
