<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        if (Storage::disk('public')->exists('thumbnails')) {
            Storage::disk('public')->deleteDirectory('thumbnails');
        }

        if (Storage::disk('public')->exists('projects')) {
            Storage::disk('public')->deleteDirectory('projects');
        }
 
        $project_percentage = 0;

        // Re-create folders
        Storage::disk('public')->makeDirectory('thumbnails');
        Storage::disk('public')->makeDirectory('projects');

        
        $faker = Faker::create();

        Storage::disk('public')->makeDirectory('thumbnails');
        Storage::disk('public')->makeDirectory('projects');

        $titles = [
            'E-Commerce Web Platform',
            'Personal Portfolio Website',
            'Task Management System',
            'Learning Management System',
            'Online Booking Application',
        ];

        $thumbnailSources = [
            'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
            'https://images.unsplash.com/photo-1517694712202-14dd9538aa97',
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
            'https://images.unsplash.com/photo-1522202176988-66273c2fd55f',
            'https://images.unsplash.com/photo-1504384308090-c894fdcc538d',
        ];

        foreach ($titles as $index => $title) {

            /* ---------------- Thumbnail ---------------- */
            $thumbnailName = 'project' . ($index + 1) . '.jpg';
            $thumbnailPath = 'thumbnails/' . $thumbnailName;

            Storage::disk('public')->put(
                $thumbnailPath,
                Http::get($thumbnailSources[$index])->body()
            );

            /* ---------------- Project ---------------- */
            $project = Project::create([
                'title'        => $title,
                'slug'         => Str::slug($title),
                'short_description' => $faker->sentence(),
                'description'  => $this->markdownDescription($title),
                'date'         => $faker->date(),
                'client'       => $faker->company(),
                'duration'     => $faker->numberBetween(1, 12) . ' months',
                'rating'       => $faker->randomFloat(1, 3.0, 5.0),
                'url'          => 'https://example.com',
                'github_url'   => 'https://github.com/example/repo',
                'user_id'      => 1,
                'thumbnail'    => $thumbnailPath,
                'status'       => true,
                'is_featured'  => true,
            ]);

            /* ---------------- Project Images (4+) ---------------- */
            for ($i = 1; $i <= 4; $i++) {
                $extraImageName = 'project_' . ($index + 1) . '_extra_' . $i . '.jpg';
                $extraImagePath = 'projects/' . $extraImageName;

                $extraImageUrl = 'https://images.unsplash.com/photo-' . rand(1500000000, 1599999999);

                Storage::disk('public')->put(
                    $extraImagePath,
                    Http::get($extraImageUrl)->body()
                );

                DB::table('image_projects')->insert([
                    'project_id' => $project->id,
                    'image_path' => $extraImagePath,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }

            /* ---------------- Categories (1–10) ---------------- */
            $categoryIds = collect(range(1, 10))->random(rand(2, 4));
            foreach ($categoryIds as $categoryId) {
                DB::table('category_project')->insert([
                    'category_id' => $categoryId,
                    'project_id'  => $project->id,
                    'created_at'  => now(),
                    'updated_at'  => now(),
                ]);
            }

            /* ---------------- Skills (1–20) ---------------- */
            $skillIds = collect(range(1, 20))->random(rand(4, 7));
            foreach ($skillIds as $skillId) {
                DB::table('project_skill')->insert([
                    'project_id' => $project->id,
                    'skill_id'   => $skillId,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        }
    }

    private function markdownDescription(string $title): string
    {
        return <<<MD
        # {$title}

        ## Project Overview
        This project was developed to solve a real-world business problem
        using scalable and maintainable software architecture.

        ## Core Features
        - Modular system design
        - Clean and readable codebase
        - Secure authentication
        - Role-based access control
        - Optimized database queries

        ## Technology Stack
        - Laravel 12
        - MySQL
        - Tailwind CSS
        - RESTful APIs
        - Git version control

        ## Development Approach
        - SOLID principles
        - MVC architecture
        - Service layer abstraction
        - Reusable components
        - Proper validation and error handling

        ## Outcome
        The system delivers performance, scalability, and maintainability
        while ensuring a clean user experience.

        ## Conclusion
        This project demonstrates professional backend development
        and real-world problem-solving capability.

        MD;
            
    }
}
