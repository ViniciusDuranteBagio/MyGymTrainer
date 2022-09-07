<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $user =  new User();
        if (!$user->findByEmail('vinicius@hotmail.com')){
            \App\Models\User::factory()->create([
                'name' => 'Vinicius Durante Bagio',
                'email' => 'vinicius@hotmail.com',
                'password' => bcrypt('12345678'),
                'gender' => 'M',
                'dt_birth' => '2000-12-12',
                'workout_focus' => 'Emagrecimento',
                'contract_dueDate' => '2022-12-12',
                'fg_change_workout' => false
            ]);
        }

        \App\Models\Exercise::factory(10)->create();
        \App\Models\Workout::factory(10)->create();
        \App\Models\User::factory()->count(10)->create();
        \App\Models\WorkoutExercise::factory(10)->create();
        \App\Models\UserWorkoutHistory::factory()->count(10)->create();
        \App\Models\UserWorkout::factory(10)->create();


    }
}
