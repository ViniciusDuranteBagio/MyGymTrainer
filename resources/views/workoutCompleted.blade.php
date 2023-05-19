@extends('layouts.app')

@section('content')
    @if(!empty($timeWorkout))
        <div class="container">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">
                        Treino Finalizado
                    </h1>
                    <p class="card-text">Parabens {{Auth::user()['name']}} você terminou seu treino!!</p>
                    <p class="card-text">Para terminar seu treino você levou <strong> {{$timeWorkout}} minutos </strong> </p>
                    <p class="card-text">Você acabou de ganhar <strong> {{round($score)}} GymPoints </strong> para o seu ranking mensal!!!</p>
                </div>
                <a href="{{config("app.url")}}/ranking" class="btn btn-primary ">Voltar para tela inical</a>
            </div>
        </div>
    @else
        <div class="container">
            <div class="card text-center">
                <div class="card-body">
                    <h1 class="card-title">
                        Treino Finalizado
                    </h1>
                    <p class="card-text">Você já recebeu pontos hoje portanto só poderá receber pontos amanhã</p>
                </div>
                <a href="{{config("app.url")}}/ranking" class="btn btn-primary ">Voltar para tela inical</a>
            </div>
        </div>
    @endif

@endsection

