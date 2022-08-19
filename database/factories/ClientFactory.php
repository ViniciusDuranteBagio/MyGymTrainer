<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nm_client' => $this->faker->name(),
            'gender' => $this->faker->randomElement(['m','f']),
            'email' => $this->faker->email(),
            'phone' => $this->faker->phoneNumber(),
            'fk_workout' => $this->faker->numberBetween(1,10),
            'score' => $this->faker->numberBetween(0, 10000),
            'birth' => $this->faker->date(),
            'dt_workout' => $this->faker->date(),
            'fg_change_workout' => $this->faker->numberBetween(0, 1)
        ];
    }
}
