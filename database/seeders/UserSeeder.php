<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Shakhawat Hosen',
            'email' => 'shakhawat9083@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
