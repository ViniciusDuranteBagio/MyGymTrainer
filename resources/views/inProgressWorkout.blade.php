@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card text-center">
        <div class="card-header">
            Exercicio 1 de 15
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Supino Reto
            </h5>
            <button type="button" class="btn btn-primary position-absolute top-18 end-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fa-solid fa-camera"></i>
            </button>
                <div class="row">    
                    <form id="formularioTreino">
                        <div class="d-inline-block col4 me-2" >
                        <p>Series</p>
                        <strong>4</strong>
                        </div>

                        <div class="d-inline-block col4">
                        <p>Repetições</p>
                        <strong>15</strong>
                        </div>
                        
                        <div class="d-inline-block col-6">
                        <p>Peso</p>
                        <input type="text" class="form-control" id="wheight" size="10" value="20" />
                        </div>
                    </form>
                    </div>
                    <div>
                    <a href="#" class="btn btn-primary mt-2">Completar Exercicio</a>
                    </div>
        </div>

        <div class="card-footer">
                <button class="btn btn-primary btn-sm d-inline-block">
                Exercicio Anterior
                </button>
                <button class="btn btn-primary btn-sm d-inline-block">
                Proximo exercicio
                </button>
        </div>
        
    </div>
    
</div>
<br>
<div class="container">
    <div class="card text-center">
        <div class="card-header">Exercicio 15 de 15</div>
        <div class="card-body">
            <h5 class="card-title">Pack Deck</h5>
                <div class="row">    
                    <form id="formularioTreino">
                    <div class="d-inline-block col4 me-2" >
                        <p>Series</p>
                        <strong>4</strong>
                        </div>

                        <div class="d-inline-block col4">
                        <p>Repetições</p>
                        <strong>15</strong>
                        </div>
                        <div class="d-inline-block col-6">
                        <p>Peso</p>
                        <input type="text" class="form-control" id="wheight" size="10" value="20" />
                        </div>
                    </form>
                    </div>
                    <div>
                    <a href="http://127.0.0.1:8000/treino-finalizado" class="btn btn-primary mt-2" id="liveToastBtn">Finalizar Treino</a>
                    </div>
        </div>

        <div class="card-footer">
                <button class="btn btn-primary btn-sm d-inline-block">
                Exercicio Anterior
                </button>
                <button class="btn btn-primary btn-sm d-inline-block">
                Proximo exercicio
                </button>
        </div>
        
    </div>
    
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Supino Reto </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="{{ asset('images/supino-reto-com-barra-animacao.webp') }}" alt="tag" width="280" height="200">
        <p class="mt-4">Deitado no banco reto, segure a barra (ou os halteres) com a palma das mãos voltadas para a frente. Deixe os braços afastados em uma distância pouco maior do que a entre os ombros. Os pés devem ficar apoiados no chão (ou no banco) durante toda a execução do movimento. Não tire as costas do banco ao fazer o exercício</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection

