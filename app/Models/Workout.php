<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Workout
 *
 * @property int $id
 * @property string $nm_workout
 * @property string $average_workout_time
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Exercise[] $exercises
 * @property-read int|null $exercises_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\User[] $users
 * @property-read int|null $users_count
 * @method static \Database\Factories\WorkoutFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Workout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Workout query()
 * @method static \Illuminate\Database\Eloquent\Builder|Workout whereAverageWorkoutTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workout whereNmWorkout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Workout whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Workout extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workouts';


    protected $fillable = [
        'nm_workout',
        'average_workout_time'
    ];

    protected $hidden = [
      'created_at'
    ];


    public function users()
    {
        return $this->belongsToMany(User::class, 'user_workout')->using(UserWorkout::class);
    }


    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, "workout_exercise")->using(WorkoutExercise::class)
            ->withPivot([
                'rep',
                'sets',
                'weight'])
            ->as('workout_exercise_details');
    }
}
