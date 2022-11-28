@extends('layouts.app')

@section('content')
    @if (!empty($workouts))
        <div class="container mb-4">
            <a type="button" class="btn btn-primary btn-lg btn-block mb-2" href="http://127.0.0.1:8000/treino-em-andamento/{{Auth::id()}}" style="width:100%;">Iniciar Treino</a>
            @foreach ($workouts as $workout)
                <h1 class="text-center"> {{$workout['name']}} </h1>
                @foreach ($workout['exercises'] as $key => $exercise)
                    <div class="card text-center mb-4">
                        <div class="card-header">
                            Exercicio {{$key}} de {{$workout['countExercieses']}}
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">
                                {{$exercise['name']}}
                            </h5>
                            <div class="row">
                                <form id="formularioTreino">
                                    <div class="d-inline-block col4 me-2" >
                                        <p>Series</p>
                                        <strong>{{$exercise['sets']}}</strong>
                                    </div>

                                    <div class="d-inline-block col4">
                                        <p>Repetições</p>
                                        <strong>{{$exercise['rep']}}</strong>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    @else
        <div class="container mb-4">
            <h1 class="text-center"> Você ainda não tem treinos. </h1>
            <a type="button" class="btn btn-primary btn-lg btn-block mb-2" href="http://127.0.0.1:8000/ranking" style="width:100%;">Voltar para tela de Ranking</a>
        </div>
    @endif

@endsection

