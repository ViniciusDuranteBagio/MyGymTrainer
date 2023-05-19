@extends('layouts.app')


@section('content')
<div class="container">
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
                    <button type="button" class="btn btn-primary position-absolute top-18 end-2" data-bs-toggle="modal" data-bs-target="#exampleModal{{$key}}">
                        <i class="fa-solid fa-camera"></i>
                    </button>
                    <!--  Inicio Modal -->
                    <div class="modal fade" id="exampleModal{{$key}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">{{$exercise['name']}}</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <img src="{{asset($exercise['image'])}}" alt="tag" width="280" height="200">
                                    <p class="mt-4">{{$exercise['description']}}</p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--  End Modal -->
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

                            <div class="d-inline-block col-6">
                                <p>Peso</p>
                                <input type="text" class="form-control" id="weight{{$key}}" name="weight{{$key}}" size="10" value="{{$exercise['weight']}}" />
                            </div>
                        </form>
                    </div>
                    <div>
                        <button class="btn btn-primary mt-2" id="confirm{{$key}}" name="confirm{{$key}}" onclick="postToUpdateExercise({{$workout['id']}},{{$exercise['id']}},{{$key}})">Completar Exercicio</button>
                    </div>

                </div>
            </div>
        @endforeach
    @endforeach
    <div class="text-center" style="width:100%;">
        <a href="{{config("app.url")}}/treino-finalizado/{{Auth::id()}}" class="btn btn-primary mt-2" id="liveToastBtn" >Finalizar Treino</a>
    </div>
</div>
@endsection
<script>
    function postToUpdateExercise(workoutId,exerciseId,keyInput) {
        var weightInput = document.querySelector("#weight"+keyInput);
        var weight = weightInput.value;
        const data = {
            id : exerciseId,
            weight: weight,
            workoutId: workoutId
        }
        fetch('{{config("app.url")}}/api/workoutExercise',{
            method: "POST",
            headers: {
                "Content-Type": "application/json",
            },
            body: JSON.stringify(data),
        });

        weightInput.setAttribute('disabled',true);
        var confirmButton = document.querySelector("#confirm"+keyInput);
        confirmButton.setAttribute('disabled','');

    }

</script>
