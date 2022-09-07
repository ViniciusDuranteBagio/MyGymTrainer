<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WorkoutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Perna'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Braço'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Costas'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Ombro'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Aerobico'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Posterior e Gluteos'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Quadriceps'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Triceps'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Abdomen'
        ]);
        \App\Models\Workout::factory()->create([
            'nm_workout' => 'Treino de Peito'
        ]);
    }
}
