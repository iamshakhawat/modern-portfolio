<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        About::create([
            'title' => 'A Dedicated Laravel Enthusiast',
            'description' => 'My journey in web development began with a focus on robust backend architectures, and Laravel quickly became my framework of choice. I specialize in building scalable, secure, and maintainable applications. I have extensive experience in Eloquent ORM, API development (RESTful & GraphQL), database design, and integrating various third-party services.

While my core strength is in the backend, I am proficient in modern frontend technologies like Vue.js/React and utilize tools like Tailwind CSS to deliver pixel-perfect, responsive user interfaces that complement the powerful backend structure. My goal is always to deliver efficient, high-quality, and user-centric web solutions.',

        ]);
    }
}
