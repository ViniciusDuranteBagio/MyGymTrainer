<?php

namespace Database\Seeders;

use App\Models\UserWorkoutHistory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWorkoutHistorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserWorkoutHistory::factory()
            ->count(10)
            ->create();
    }
}
