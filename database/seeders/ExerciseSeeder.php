<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Exercise::factory()->create([
            'nm_exercise' => 'PullDown'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Elevação Lateral'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' => 'Elevação Fromtal'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Rosca Simultanea'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Afundo'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Agachamento Livre'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Desenvolvimento Militar'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Agachamento Bulgaro'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' =>'Remada Baixa'
        ]);
        \App\Models\Exercise::factory()->create([
            'nm_exercise' => 'Remada Alta'
        ]);




    }
}
