<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        DB::table('achievements')->insert([
            [
                'title' => 'Projects Completed',
                'value' => 120,
                'icon' => 'fa-solid fa-check-circle',
                'color' => '#3490dc',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Happy Clients',
                'value' => 85,
                'icon' => 'fa-solid fa-smile',
                'color' => '#10b981',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Awards Won',
                'value' => 10,
                'icon' => 'fa-solid fa-trophy',
                'color' => '#f59e0b',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Years Experience',
                'value' => 5,
                'icon' => 'fa-solid fa-briefcase',
                'color' => '#ef4444',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
