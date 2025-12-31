<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CvSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete existing image from storage if exists
        if (Storage::disk('public')->exists('cv')) {
            Storage::disk('public')->deleteDirectory('cv');
        }
    }
}
