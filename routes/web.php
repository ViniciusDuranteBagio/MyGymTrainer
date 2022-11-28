<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Auth\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', function(){
    return view('index');
})->name("index");

Route::get('/ranking', [\App\Http\Controllers\UsersController::class, 'ranking'])->name("ranking");

Route::get('/login', function(){
    return view('login');
})->name("login");

Route::get('/register', function(){
    return view('register');
})->name("register");

Route::get('/treino-em-andamento/{id}', [\App\Http\Controllers\WorkoutController::class, "inProgressWorkout"])->name("inProgressWorkout");

Route::get('/treino-finalizado', function(){
    return view('workoutCompleted');
})->name("workoutCompleted");

Route::get('/treino-iniciar/{id}', [\App\Http\Controllers\WorkoutController::class, "startWorkout"])->name("workout");

Route::get('/minha-conta/{id}', [\App\Http\Controllers\UsersController::class, 'myAccount'])->name("myAccount");

Route::get('/editar-minha-conta/{id}', [\App\Http\Controllers\UsersController::class, 'editMyAcount'])->name("editAccount");

Route::get('/trocar-senha', function(){
    return view('editPassword');
})->name("editPassword");

Route::get('/troca-treino/{id}',[\App\Http\Controllers\UsersController::class, "changeWorkout"])->name("changeWorkout");

Route::get('/vencimento/{id}', [\App\Http\Controllers\UsersController::class, "contract"])->name("expireDate");

Route::group(['middleware' => ['auth']], function() {

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

