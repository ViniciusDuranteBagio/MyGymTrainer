<?php

namespace Database\Factories;

use App\Models\Exercise;
use App\Models\User;
use App\Models\Workout;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class UserWorkoutHistoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'workout_id' => Workout::all()->random(),
            'exercise_id' => Exercise::all()->random(),
            'user_id' => User::all()->random(),
            'weight' => $this->faker->numberBetween(1,300),
            'rep' => $this->faker->numberBetween(8,20),
            'sets' => $this->faker->numberBetween(3,7),
            'date' => $this->faker->date()
        ];
    }
}
