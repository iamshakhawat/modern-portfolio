<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ExperienceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('experiences')->insert([
            [
                'title' => 'Software Engineer',
                'company' => 'Tech Solutions Inc.',
                'duration' => 'Jan 2021 - Present',
                'icon' => 'fas fa-laptop-code',
                'description' => 'Developed and maintained web applications using Laravel and Vue.js.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Frontend Developer',
                'company' => 'Creative Minds',
                'duration' => 'Jun 2019 - Dec 2020',
                'icon' => 'fas fa-code',
                'description' => 'Implemented responsive UI components and optimized user experience.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Intern',
                'company' => 'Startup Hub',
                'duration' => 'Jan 2019 - May 2019',
                'icon' => 'fas fa-user-graduate',
                'description' => 'Assisted in developing MVPs and performed software testing.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
