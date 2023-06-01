<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        //todo criar um get user logado com isso retornando o objeto do usuario
//        if (! $this->userHasCompleteInformation()) {
            //fazer um select de experiencia em academia -> vai setar um treino padrão para o usuario
            //fazer o backend dessa tela
//            return view('formCompleteUserInformation');
//        }
        return view('index');
    }

    public function userHasCompleteInformation(): bool
    {
        $user = \Auth::user()->getAttributes();
        if (! $user['workout_focus'] || ! $user['dt_birth'] || ! $user['gender'] || ! $user['phone']){
            return false;
        }

        return true;
    }
}
