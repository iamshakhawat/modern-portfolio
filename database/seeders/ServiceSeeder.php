<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('services')->insert([
            [
                'title' => 'Mobile App Development',
                'description' => 'Creating high-performance mobile applications for Android and iOS.',
                'icon' => 'fa fa-mobile',
                'color' => '#FF5733',
                'status' => true,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'E-commerce Solutions',
                'description' => 'Developing secure and scalable online stores.',
                'icon' => 'fa fa-shopping-cart',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Content Management Systems',
                'description' => 'Implementing and customizing CMS platforms like WordPress.',
                'icon' => 'fa fa-cogs',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'API Integration',
                'description' => 'Integrating third-party APIs for enhanced functionality.',
                'icon' => 'fa fa-plug',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cloud Deployment',
                'description' => 'Deploying and managing applications on cloud platforms.',
                'icon' => 'fa fa-cloud',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Maintenance & Support',
                'description' => 'Providing ongoing support and maintenance for web solutions.',
                'icon' => 'fa fa-wrench',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Performance Optimization',
                'description' => 'Optimizing websites and apps for speed and efficiency.',
                'icon' => 'fa fa-tachometer',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Security Auditing',
                'description' => 'Conducting security audits and implementing best practices.',
                'icon' => 'fa fa-shield',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Custom Software Development',
                'description' => 'Building tailored software solutions for unique business needs.',
                'icon' => 'fa fa-cube',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Digital Marketing',
                'description' => 'Promoting brands through digital channels and strategies.',
                'icon' => 'fa fa-bullhorn',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Development',
                'description' => 'Building responsive and robust web applications.',
                'icon' => 'fa fa-code',
                'color' => '#FF5733',
                'status' => true,
                'featured' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'UI/UX Design',
                'description' => 'Designing user-friendly interfaces and experiences.',
                'icon' => 'fa fa-paint-brush',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'SEO Optimization',
                'description' => 'Improving website visibility on search engines.',
                'icon' => 'fa fa-search',
                'color' => '#FF5733',
                'status' => true,
                'featured' => false,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
