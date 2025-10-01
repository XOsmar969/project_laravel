<?php

namespace Database\Seeders;

use App\Models\Guardian;
use App\Models\Student;
use App\Models\User;
use App\Models\Classroom;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        // Student::factory(10)->create();
          User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); 
        
        Guardian::factory(10)->create();
        Classroom::factory(4)->hasStudents(5)->create();

      
    }
}
