<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $skills = [
            [
                'name' => 'Laravel',
                'category' => 'backend',
                'icon' => 'fab fa-laravel',
                'color' => '#FF2D20',
            ],
            [
                'name' => 'React',
                'category' => 'frontend',
                'icon' => 'fab fa-react',
                'color' => '#61DAFB',
            ],
            [
                'name' => 'Vue.js',
                'category' => 'frontend',
                'icon' => 'fab fa-vuejs',
                'color' => '#42B883',
            ],
            [
                'name' => 'Node.js',
                'category' => 'backend',
                'icon' => 'fab fa-node-js',
                'color' => '#339933',
            ],
            [
                'name' => 'PHP',
                'category' => 'programming',
                'icon' => 'fab fa-php',
                'color' => '#777BB4',
            ],
            [
                'name' => 'JavaScript',
                'category' => 'programming',
                'icon' => 'fab fa-js-square',
                'color' => '#F7DF1E',
            ],
            [
                'name' => 'Python',
                'category' => 'programming',
                'icon' => 'fab fa-python',
                'color' => '#3776AB',
            ],
            [
                'name' => 'HTML5',
                'category' => 'frontend',
                'icon' => 'fab fa-html5',
                'color' => '#E34F26',
            ],
            [
                'name' => 'CSS3',
                'category' => 'frontend',
                'icon' => 'fab fa-css3-alt',
                'color' => '#1572B6',
            ],
            [
                'name' => 'Sass',
                'category' => 'frontend',
                'icon' => 'fab fa-sass',
                'color' => '#CC6699',
            ],
            [
                'name' => 'Bootstrap',
                'category' => 'frontend',
                'icon' => 'fab fa-bootstrap',
                'color' => '#7952B3',
            ],
            [
                'name' => 'Git',
                'category' => 'tools',
                'icon' => 'fab fa-git-alt',
                'color' => '#F05032',
            ],
            [
                'name' => 'Docker',
                'category' => 'tools',
                'icon' => 'fab fa-docker',
                'color' => '#2496ED',
            ],
            [
                'name' => 'MySQL',
                'category' => 'backend',
                'icon' => 'fas fa-database',
                'color' => '#4479A1',
            ],
            [
                'name' => 'MongoDB',
                'category' => 'backend',
                'icon' => 'fas fa-leaf',
                'color' => '#47A248',
            ],
            [
                'name' => 'TypeScript',
                'category' => 'programming',
                'icon' => 'fab fa-js',
                'color' => '#3178C6',
            ],
            [
                'name' => 'jQuery',
                'category' => 'frontend',
                'icon' => 'fas fa-code',
                'color' => '#0769AD',
            ],
            [
                'name' => 'Redux',
                'category' => 'frontend',
                'icon' => 'fas fa-sync',
                'color' => '#764ABC',
            ],
            [
                'name' => 'Nginx',
                'category' => 'tools',
                'icon' => 'fas fa-server',
                'color' => '#009639',
            ],
            [
                'name' => 'AWS',
                'category' => 'tools',
                'icon' => 'fab fa-aws',
                'color' => '#FF9900',
            ],
            [
                'name' => 'Figma',
                'category' => 'tools',
                'icon' => 'fab fa-figma',
                'color' => '#F24E1E',
            ],
            [
                'name' => 'Linux',
                'category' => 'tools',
                'icon' => 'fab fa-linux',
                'color' => '#FCC624',
            ],
        ];

        foreach ($skills as $skill) {
            DB::table('skills')->insert($skill);
        }
    }
}
