<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Workout>
 */
class WorkoutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nm_workout' => $this->faker->firstName(),
            'rep_sets' => $this->faker->numberBetween(1,20),
            'weight' => $this->faker->numberBetween(1,100),
            'fk_exercise' => $this->faker->numberBetween(1,10)
        ];
    }
}
