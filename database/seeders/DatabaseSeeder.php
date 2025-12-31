<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\HeroSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AboutSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\SkillSeeder;
use Database\Seeders\SocialSeeder;
use Database\Seeders\ProjectSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\CategorySeeder;
use Database\Seeders\DeleteAllFolder;
use Database\Seeders\EducationSeeder;
use Database\Seeders\ExperienceSeeder;
use Database\Seeders\AchievementSeeder;
use Database\Seeders\TestimonialSeeder;
use Database\Seeders\ImageProjectSeeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            DeleteAllFolder::class,
            UserSeeder::class,
            CategorySeeder::class,
            SkillSeeder::class,
            HeroSeeder::class,
            AboutSeeder::class,
            EducationSeeder::class,
            ExperienceSeeder::class,
            ServiceSeeder::class,
            TestimonialSeeder::class,
            AchievementSeeder::class,
            SocialSeeder::class,
            ImageProjectSeeder::class,
            ProjectSeeder::class,
        ]);
    }
}
