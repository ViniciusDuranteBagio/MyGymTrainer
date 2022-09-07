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

Route::get('/clients', [UsersController::class, 'index']);
Route::get('/client/{id}', [UsersController::class, 'show']);
Route::get('/clientWithWorkouts/{id}', [UsersController::class, 'getUserWithWorkout']);
Route::post('/client', [UsersController::class, 'store']);
Route::put('/client/{id}', [UsersController::class, 'update']);
Route::delete('/client/{id}', [UsersController::class, 'destroy']);
Route::get('/test', [UsersController::class, 'test']);

Route::get('/exercises', [ExerciseController::class, 'index']);
Route::post('/exercise', [ExerciseController::class, 'store']);
//Route::get('/exercise{{id}}', [ExerciseController::class, 'show']);
//Route::delete('/exercise{{id}}', [ExerciseController::class, 'delete']);

Route::get('/workouts', [WorkoutController::class, 'index']);
Route::get('/workouts/{id}', [WorkoutController::class, 'show']);
Route::post('/workout', [WorkoutController::class, 'store']);
//Route::get('/workout{{id}}', [WorkoutController::class, 'show']);
//Route::delete('/workout', [WorkoutController::class, 'delete']);

