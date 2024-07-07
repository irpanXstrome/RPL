<?php

namespace Database\Seeders;

use App\Models\Candidate;
use App\Models\Student;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        Student::factory(10)->create();
        Candidate::factory(6)->create();
    }
}
