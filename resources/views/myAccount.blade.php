@extends('layouts.app')

@section('content')

<div class="container mt-5">

    <div class="row d-flex justify-content-center">

        <div class="col-md-7">

            <div class="card p-3 py-4">
                <h1 class="card-title text-center mb-3">{{$user->name}}</h1>
                <div class="text-center">
                    {{--ver para adicionar fotos na tabela usuario--}}
                    <img src="{{ asset('images/vinicius.png') }}" alt="tag" width="150" class="rounded-circle">
                </div>

                <div class="text-center mt-3">

                    <ul class="information-list">
                        <li class="mb-4"><i class="fa-solid fa-phone me-2"></i>Telefone: {{$user->phone}}</li>
                        <li class="mb-4"><i class="fa-solid fa-envelope me-2 display-inline"></i>Email:
                            {{$user->email}}</li>
                        <li class="mb-4"><i class="fa-solid fa-dumbbell me-2"></i>Foco do treino: {{$user->workout_focus}}</li>
                    </ul>

                    <div class="buttons">
                        <a class="btn btn-primary" href="{{config("app.url")}}/editar-minha-conta/{{Auth::id()}}">Editar Perfil</a>
                        <a class="btn btn-outline-primary" href="{{config("app.url")}}/trocar-senha">Trocar Senha ?</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
@endsection

