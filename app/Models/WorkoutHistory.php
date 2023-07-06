<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutHistory extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workout_history';

    protected $fillable = [
        'workout_id',
        'user_id',
        'timeWorkout'
    ];

    public static function insertHistory($workoutId, $userId)
    {
        $history = new WorkoutHistory();
        $history->workout_id = $workoutId;
        $history->user_id = $userId;
        $history->timeWorkout = Carbon::now();
        $history->save();
    }

}
