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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('phone')->nullable();
            $table->string('gender', 1)->nullable();
            //todo passar esse score para outra tabela do banco e ter uma tebla só pra isso
            $table->integer('nr_score')->nullable();
            $table->date('dt_birth')->nullable();
            $table->string('password');
            $table->string('workout_focus')->nullable();
            $table->date('workout_updated_at')->nullable();
            //todo passar esse contract para uma tabela de contrato
            $table->date('contract_dueDate')->nullable();
            $table->boolean('fg_change_workout')->default(0);
            $table->rememberToken();
            $table->timestamps();
        });

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

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
