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
        \App\Models\Exercise::create(['nm_exercise' => 'PullDown', 'im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Elevação Frontal','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Elevação Lateral','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Elevação Frontal','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Rosca Simultanea','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Afundo','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Agachamento Livre','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Desenvolvimento Militar','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Agachamento Bulgaro','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Remada Baixa','im_exercise' => 'path/image', 'description' => 'descrição do exercício']);
        \App\Models\Exercise::create(['nm_exercise' => 'Remada Alta','im_exercise' => 'path/image',  'description' => 'descrição do exercício']);
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
