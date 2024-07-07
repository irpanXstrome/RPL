<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Candidate>
 */
class CandidateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numberBetween(2206001, 2206001 + Student::all()->count()),
            'candidate_id' => fake()->numberBetween(1,3),
            'visi' => fake()->text(),
            'misi' => fake()->text(130),
            'role' => fake()->randomElement(['1','0'])
        ];
    }
}
