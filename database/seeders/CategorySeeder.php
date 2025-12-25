<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Mobile Development', 'slug' => 'mobile-development'],
            ['name' => 'Data Science', 'slug' => 'data-science'],
            ['name' => 'Artificial Intelligence', 'slug' => 'artificial-intelligence'],
            ['name' => 'Cloud Computing', 'slug' => 'cloud-computing'],
            ['name' => 'Cyber Security', 'slug' => 'cyber-security'],
            ['name' => 'DevOps', 'slug' => 'devops'],
            ['name' => 'UI/UX Design', 'slug' => 'ui-ux-design'],
            ['name' => 'Blockchain', 'slug' => 'blockchain'],
            ['name' => 'Internet of Things', 'slug' => 'internet-of-things'],
        ];

        foreach ($categories as $category) {
            Category::create([
            'name' => $category['name'],
            'slug' => $category['slug'],
            'status' => true,
            ]);
        }
    }
}
