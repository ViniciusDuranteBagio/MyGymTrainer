<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\UserWorkoutHistory
 *
 * @property int $id
 * @property int $workout_id
 * @property int $exercise_id
 * @property int $user_id
 * @property int|null $weight
 * @property int $rep
 * @property int $sets
 * @property string $date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserWorkoutHistoryFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereExerciseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereRep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereSets($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereWeight($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkoutHistory whereWorkoutId($value)
 * @mixin \Eloquent
 */
class UserWorkoutHistory extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_workout_history';

    protected $fillable = [
        'workout_id',
        'exercise_id',
        'user_id',
        'nr_sequential',
    ];


    protected $hidden = [

    ];

    public function workouts()
    {
        return $this->hasMany(Workout::class, 'id','workout_id');
    }

    public function exercises()
    {
        return $this->hasMany(Exercise::class, 'id','exercise_id');
    }

    public function users()
    {
        return $this->hasMany(User::class, 'id','user_id');
    }

}
