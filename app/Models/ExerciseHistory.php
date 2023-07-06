<?php

namespace App\Models;

use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseHistory extends Model
{
    use CrudTrait;
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'exercise_history';

    protected $fillable = [
        'user_id',
        'exercise_id',
        'rep',
        'sets',
        'date'
    ];

    protected $hidden = [
    ];

    //talvez fazer um belong to many ou has many, se precisar

}
