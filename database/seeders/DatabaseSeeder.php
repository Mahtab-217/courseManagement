<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Teachers;
use App\Models\Students;
use App\Models\Classes;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(200)->create();
         Teachers::factory(10)->create();
          Classes::factory(5)->create();
         Students::factory(90)->create();
       

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
