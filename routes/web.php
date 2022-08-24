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

Route::get('/ranking', function(){
    return view('ranking');
})->name("ranking");

Route::get('/login', function(){
    return view('login');
})->name("login");

Route::get('/register', function(){
    return view('register');
})->name("register");

Route::get('/treino-em-andamento', function(){
    return view('inProgressWorkout');
})->name("inProgressWorkout");

Route::get('/treino-finalizado', function(){
    return view('workoutCompleted');
})->name("workoutCompleted");

Route::get('/treino-iniciar', function(){
    return view('workout');
})->name("workout");

Route::get('/minha-conta', function(){
    return view('myAccount');
})->name("myAccount");

Route::get('/editar-minha-conta', function(){
    return view('editAccount');
})->name("editAccount");

Route::get('/trocar-senha', function(){
    return view('editPassword');
})->name("editPassword");

Route::get('/troca-treino', function(){
    return view('changeWorkout');
})->name("changeWorkout");

Route::get('/vencimento', function(){
    return view('expireDate');
})->name("expireDate");

Route::group(['middleware' => ['auth']], function() {

    Route::get('/logout', [LogoutController::class, 'perform'])->name('logout');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

