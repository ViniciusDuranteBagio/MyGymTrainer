@extends('layouts.app')

@section('content')

    @if (!empty($timeWithWorkout))
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center dislay-1">Mudança de Treino</h1>
                <ul class="list-unstyled">
                    <li class="mb-5 mt-5 text-center">Fazem <strong> {{$timeWithWorkout}}</strong> dias que você está com esse treino</li>
                    <li class="mb-5 text-center">O ideal é utilizar o mesmo treino por no minimo <strong> 90 </strong> dias para que o seu corpo se acostume com aquele treino e posteriormente trocar por um novo treino</li>
                </ul>
                <div class="d-grid gap-2">
                    <label class="form-label text-center">Tem certeza que deseja solicitar a troca de treino ?</label>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exchangeWorkoutModal">
                        Solicitar troca
                    </button>
                </div>
            </div>
        </div>

        <!-- Modal Proposito do meu treino não esteja alinhado com o meu objetivo com a academia -->
        <div class="modal fade" id="exchangeWorkoutModal" tabindex="-1" aria-labelledby="exchangeWorkoutModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title text-center" id="exchangeWorkoutModalLabel">Solicitação de Mudança de Treino</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="form-label" for="select">Motivo da Solicitação da troca de treino</label>
                                <div>
                                    <select id="select" name="select" class="form-select">
                                        <option value="uneffective_workout">Treino muito fraco</option>
                                        <option value="not_aling_workout">Meu foco não é o mesmo do treino</option>
                                    </select>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button name="submit" type="submit" class="btn btn-primary">Solicitar Troca</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="card">
            <div class="card-body">
                <h1 class="card-title text-center dislay-1">Você ainda não tem treino para solicitar uma troca!</h1>
                <div class="d-grid gap-2">
                    <a type="button" class="btn btn-primary btn-lg btn-block mb-2" href="{{config('app.url')}}/ranking" style="width:100%;">Voltar para tela de Ranking</a>
                </div>
            </div>
        </div>
    @endif


@endsection
