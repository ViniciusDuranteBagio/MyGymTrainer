@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <h1 class="card-title">
                Treino Finalizado
            </h1>
            <p class="card-text">Parabens Vinicius você terminou seu treino!!</p>
            <p class="card-text">Para terminar seu treino você levou <strong> 85 minutos </strong> </p>
{{--            <p class="card-text">Levando em media 5 minutos por exercicio</p>--}}
            <p class="card-text">Você acabou de ganhar <strong> 300 GymPoints </strong> para o seu ranking mensal e com isso está na <strong>10° posição no ranking</strong></p>
        </div>
        <a href="http://127.0.0.1:8000/ranking" class="btn btn-primary ">Voltar para tela inical</a>
      </div>
  </div>
@endsection

