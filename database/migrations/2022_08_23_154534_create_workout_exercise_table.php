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
        Schema::create('workout_exercise', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_id');
            $table->unsignedBigInteger('exercise_id');
            $table->foreign('workout_id')->references('id')->on('workouts')->onDelete('cascade');
            $table->foreign('exercise_id')->references('id')->on('exercises')->onDelete('cascade');
            $table->integer('weight')->nullable();
            $table->integer('rep');
            $table->integer('sets');
            $table->time('average_workout_time');
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
        Schema::dropIfExists('workout_exercise');
    }
};
