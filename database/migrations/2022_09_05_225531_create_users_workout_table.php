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
        Schema::create('user_workout', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('workout_id');
            $table->unsignedBigInteger('user_id');
            $table->foreign('workout_id')->references('id')->on('workouts');
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('nr_sequential')->nullable();
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
        Schema::dropIfExists('user_workout');
    }
};
