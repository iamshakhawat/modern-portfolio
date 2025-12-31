<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DeleteAllFolder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Delete Storage folder from /public if exists
        if(File::exists(public_path('storage'))) {
            File::deleteDirectory(public_path('storage'));
            $this->command->info('Deleted public/storage folder successfully.');
        }

        Artisan::call('storage:link');
        $this->command->info('Created storage link successfully.');
    }
}
