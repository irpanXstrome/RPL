<?php

namespace Database\Factories;

use App\Models\Candidate;
use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Voting>
 */
class VotingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nim' => fake()->unique()->numberBetween(2206001,2206001 + Student::all()->count()),
            'candidate_id' => fake()->unique()->numberBetween(0,Candidate::all()->count()),
        ];
    }
}
