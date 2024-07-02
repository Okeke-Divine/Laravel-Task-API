<?php

namespace Database\Factories;

use App\Models\Pirority;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(),
            'is_completed' => rand(0, 1),
            'pirority_id' => rand(0, 1) === 0 ? NULL : Pirority::pluck('id')->random()
        ];
    }
}
