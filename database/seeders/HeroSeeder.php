<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class HeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        \Illuminate\Support\Facades\DB::table('heroes')->insert([
            [
                'title' => 'Web Developer',
                'subtitle' => "I'm a Laravel Developer passionate about building modern, responsive, and user-friendly web interfaces using Laravel and a strong focus on clean architecture.",
                'hero_img' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
