<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Exercise
 *
 * @property int $id
 * @property string $nm_exercise
 * @property string|null $im_exercise
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Workout[] $workouts
 * @property-read int|null $workouts_count
 * @method static \Database\Factories\ExerciseFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise query()
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise whereImExercise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise whereNmExercise($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Exercise whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Exercise extends Model
{
    use \Backpack\CRUD\app\Models\Traits\CrudTrait;
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exercises';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nm_exercise',
        'im_exercise',
        'description'
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    public function workouts()
    {
        return $this->belongsToMany(Workout::class, 'workout_exercise');
    }
}
