<?php

namespace Database\Seeders;

use App\Models\Education;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EducationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Education::create([
            'degree' => 'Bachelor of Science in Computer Science',
            'institution' => 'University of Example',
            'icon' => "fa-solid fa-graduation-cap",
            'years' => '2015-2019',
            'status' => 'Passed',
        ]);
        Education::create([
            'degree' => 'Secondary School Certificate (SSC)',
            'institution' => 'Example High School',
            'icon' => "fa-solid fa-school",
            'years' => '2010-2012',
            'status' => 'Passed',
        ]);
        Education::create([
            'degree' => 'Diploma in Computer Engineering',
            'institution' => 'Example Polytechnic Institute',
            'icon' => "fa-solid fa-laptop-code",
            'years' => '2012-2015',
            'status' => 'Passed',
        ]);
    }
    
}
