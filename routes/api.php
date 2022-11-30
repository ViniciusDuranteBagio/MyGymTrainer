<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\WorkoutController;
use \App\Http\Controllers\UsersController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/workoutExercise', [WorkoutController::class, 'updateExercise']);

Route::post('/insertWorkoutHistory', [WorkoutController::class, 'insertDayInHistory']);
//Route::get('/workout{{id}}', [WorkoutController::class, 'show']);
//Route::delete('/workout', [WorkoutController::class, 'delete']);

