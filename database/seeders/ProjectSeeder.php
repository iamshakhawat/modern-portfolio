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
            $this->command->info("Deleted 'thumbnails' directory.");
        }

        if (Storage::disk('public')->exists('projects')) {
            Storage::disk('public')->deleteDirectory('projects');
            $this->command->info("Deleted 'projects' directory.");
        }
 
        $project_percentage = 0;

        // Re-create folders
        Storage::disk('public')->makeDirectory('thumbnails');
        $this->command->info("Created 'thumbnails' directory.");
        Storage::disk('public')->makeDirectory('projects');
        $this->command->info("Created 'projects' directories.");

        
        $faker = Faker::create();

        Storage::disk('public')->makeDirectory('thumbnails');
        Storage::disk('public')->makeDirectory('projects');

        $titles = [
            'E-Commerce Web Platform',
            'Personal Portfolio Website',
            'Task Management System',
            'Learning Management System',
            'Online Booking Application',
            'Hospital Management Software',
            'Inventory Management Tool',
            'Blog & CMS Platform',
            'Job Portal Application',
            'Real Estate Listing System',
            'Social Media Analytics Dashboard',
            'Realtime Chat Application',
            'Personal Expense Tracker',
            'Weather Forecast Application',
            'Fitness Tracking Platform',
            'Event Management System',
            'Restaurant Ordering System',
            'Travel Booking Platform',
            'HR Management System',
            'Online Examination Platform',
        ];

        $thumbnailSources = [
            'https://images.unsplash.com/photo-1498050108023-c5249f4df085',
            'https://images.unsplash.com/photo-1517694712202-14dd9538aa97',
            'https://images.unsplash.com/photo-1551288049-bebda4e38f71',
            'https://images.unsplash.com/photo-1522202176988-66273c2fd55f',
            'https://images.unsplash.com/photo-1504384308090-c894fdcc538d',
            'https://images.unsplash.com/photo-1576091160399-112ba8d25d1f',
            'https://images.unsplash.com/photo-1581090700227-1e37b190418e',
            'https://images.unsplash.com/photo-1521737604893-d14cc237f11d',
            'https://images.unsplash.com/photo-1542744173-8e7e53415bb0',
            'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee',
            'https://images.unsplash.com/photo-1558655146-9f40138edfeb',
            'https://images.unsplash.com/photo-1516321318423-f06f85e504b3',
            'https://images.unsplash.com/photo-1526378722484-bd91ca387e72',
            'https://images.unsplash.com/photo-1500534314209-a25ddb2bd429',
            'https://images.unsplash.com/photo-1518611012118-f0c5b0a0c2f3',
            'https://images.unsplash.com/photo-1531482615713-2afd69097998',
            'https://images.unsplash.com/photo-1514516873439-d295d7fba8b5',
            'https://images.unsplash.com/photo-1500530855697-b586d89ba3ee',
            'https://images.unsplash.com/photo-1521737604893-d14cc237f11d',
            'https://images.unsplash.com/photo-1584697964192-74d5c6d6c39a',
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
                'description'  => $this->markdownDescription($title),
                'date'         => $faker->date(),
                'client'       => $faker->company(),
                'duration'     => $faker->numberBetween(1, 12) . ' months',
                'rating'       => $faker->randomFloat(1, 3.0, 5.0),
                'url'          => 'https://example.com',
                'github_url'   => 'https://github.com/example/repo',
                'user_id'      => 1,
                'thumbnail'    => $thumbnailPath,
                'status'       => $index < 15,
                'is_featured'  => $index < 6,
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
            $project_percentage++;
            $percentage = round(($project_percentage / count($titles)) * 100);
            $this->command->info("Progress: {$percentage}%");
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
