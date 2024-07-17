<?php

namespace Database\Factories;

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
            'name' => $this->faker->sentence(),
            'description' => $this->faker->realText(),
            'due_date' => now()->addDays(7),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'completed']),
            'image_path' => $this->faker->imageUrl(),
            'priority' => $this->faker->randomElement(['low', 'medium', 'high']),
            'assigned_user_id' => 1,
            'updated_by' => 1,
            'created_by' => 1,
        ];
    }
}
