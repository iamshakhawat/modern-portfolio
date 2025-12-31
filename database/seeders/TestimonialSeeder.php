<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {



        DB::table('testimonials')->insert([
            [
                'name' => 'Alice Johnson',
                'position' => 'CEO, TechCorp',
                'message' => 'Outstanding service and support!',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'position' => 'Manager, Innovate Ltd',
                'message' => 'Highly recommend their expertise.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carol Lee',
                'position' => 'Designer, Creatives Inc',
                'message' => 'Professional and creative solutions.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Kim',
                'position' => 'Developer, WebWorks',
                'message' => 'Fast delivery and great communication.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eva Green',
                'position' => 'Marketing Lead, Brandify',
                'message' => 'Exceeded our expectations!',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Frank Miller',
                'position' => 'CTO, SoftSolutions',
                'message' => 'Reliable and efficient team.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Grace Park',
                'position' => 'HR, PeopleFirst',
                'message' => 'Great experience from start to finish.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Henry Adams',
                'position' => 'Consultant, BizGrowth',
                'message' => 'Very knowledgeable and helpful.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ivy Chen',
                'position' => 'Product Owner, NextGen',
                'message' => 'Impressed by their dedication.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jack Turner',
                'position' => 'Founder, StartUpX',
                'message' => 'Will definitely work with them again.',
                'status' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
