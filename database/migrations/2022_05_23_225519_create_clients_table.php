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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('nm_client');
            $table->string('email');
            $table->string('phone');
            $table->string('gender', 1);
            $table->integer('fk_workout');
            $table->integer('score')->nullable();
            $table->date('birth');
            $table->date('dt_workout')->nullable();
            $table->boolean('fg_change_workout')->default(0);
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
        Schema::dropIfExists('clients');
    }
};
