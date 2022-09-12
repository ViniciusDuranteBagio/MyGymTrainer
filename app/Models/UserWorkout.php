<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

/**
 * App\Models\UserWorkout
 *
 * @property int $id
 * @property int $workout_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Database\Factories\UserWorkoutFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout query()
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|UserWorkout whereWorkoutId($value)
 * @mixin \Eloquent
 */
class UserWorkout extends Pivot
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user_workout';


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'workout_id',
        'users_id'
    ];

}
