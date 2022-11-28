<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\WorkoutExercise
 *
 * @property int $id
 * @property int $workout_id
 * @property int $exercise_id
 * @property int|null $weight
 * @property int $rep
 * @property int $sets
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\WorkoutExerciseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise query()
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereExerciseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereSets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|WorkoutExercise whereWorkoutId($value)
 * @mixin \Eloquent
 */
class WorkoutExercise extends Pivot
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;


    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'workout_exercise';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'workout_id',
        'exercise_id',
        'weight',
        'rep',
        'sets'
    ];

    public function workouts()
    {
        return $this->hasMany(Workout::class, 'id','workout_id');
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'id','exercise_id');
    }


}
