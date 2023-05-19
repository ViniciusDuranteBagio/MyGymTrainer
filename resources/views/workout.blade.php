@extends('layouts.app')

@section('content')
    @if (!empty($workouts))
        <div class="container mb-4">
            @foreach ($workouts as $workout)
                <a type="button" class="btn btn-primary btn-lg btn-block mb-2" style="width:100%;" onclick="postToSaveWorkoutUserHistory({{Auth::id()}},{{$workout['id']}})">Iniciar Treino</a>
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
            <a type="button" class="btn btn-primary btn-lg btn-block mb-2" href="{{config('app.url')}}/ranking" style="width:100%;">Voltar para tela de Ranking</a>
        </div>
    @endif
<script>

    async function postToSaveWorkoutUserHistory(clientId,workoutId) {
        const data = {
            clientId : clientId,
            workoutId: workoutId
        }
        //TODO ALTERAR ESSE 127.0.0.1
        fetch("{{config('app.url')}}/api/insertWorkoutHistory",{
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        }).then((response) =>
            window.location.href = "{{config('app.url')}}/treino-em-andamento/{{Auth::id()}}"
            )
    }
</script>
@endsection

