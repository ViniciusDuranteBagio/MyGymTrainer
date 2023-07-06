<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        \App\Models\Workout::create(['nm_workout' => 'Treino de Perna', 'average_workout_time' => '00:00:00','nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Braço', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Costas', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Ombro', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Aerobico', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Posterior e Gluteos', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Quadriceps', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Triceps', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Abdomen', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
        \App\Models\Workout::create(['nm_workout' => 'Treino de Peito', 'average_workout_time' => '00:00:00', 'nm_difficulty' => 'Facil']);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
