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
        Schema::create('workout_client', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_workout_wc');
            $table->unsignedBigInteger('fk_exercise_wc');
            $table->foreign('fk_workout_wc')->references('id')->on('workouts');
            $table->foreign('fk_exercise_wc')->references('id')->on('exercises');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout_client');
    }
};
