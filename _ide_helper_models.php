<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Config
 *
 * @method static \Illuminate\Database\Eloquent\Builder|Config newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Config newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Config query()
 */
	class Config extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Exercise extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $phone
 * @property string $gender
 * @property int|null $nr_score
 * @property string $dt_birth
 * @property string $password
 * @property string|null $workout_focus
 * @property string|null $workout_updated_at
 * @property string|null $contract_dueDate
 * @property int $fg_change_workout
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Workout[] $workouts
 * @property-read int|null $workouts_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereContractDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDtBirth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereFgChangeWorkout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereGender($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereNrScore($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWorkoutFocus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWorkoutUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

namespace App\Models{
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
 */
	class UserWorkout extends \Eloquent {}
}

namespace App\Models{
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
 */
	class UserWorkoutHistory extends \Eloquent {}
}

namespace App\Models{
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
 */
	class Workout extends \Eloquent {}
}

namespace App\Models{
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
 */
	class WorkoutExercise extends \Eloquent {}
}

