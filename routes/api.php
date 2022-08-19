<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\WorkoutController;

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

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/client/{id}', [ClientController::class, 'show']);
Route::post('/client', [ClientController::class, 'store']);
Route::put('/client/{id}', [ClientController::class, 'update']);
Route::delete('/client/{id}', [ClientController::class, 'destroy']);

Route::get('/exercises', [ExerciseController::class, 'index']);
Route::post('/exercise', [ExerciseController::class, 'store']);
//Route::get('/exercise{{id}}', [ExerciseController::class, 'show']);
//Route::delete('/exercise{{id}}', [ExerciseController::class, 'delete']);

Route::get('/workouts', [WorkoutController::class, 'index']);
Route::post('/workout', [WorkoutController::class, 'store']);
//Route::get('/workout{{id}}', [WorkoutController::class, 'show']);
//Route::delete('/workout', [WorkoutController::class, 'delete']);