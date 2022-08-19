@extends('layouts.app')

@section('content')
<div class="container mb-4">
<a type="button" class="btn btn-primary btn-lg btn-block mb-2" href="http://127.0.0.1:8000/treino-em-andamento" style="width:100%;">Iniciar Treino</a>
    <div class="card text-center">
        <div class="card-header">
            Exercicio 1 de 15
        </div>
        <div class="card-body">
            <h5 class="card-title">
                Supino Reto
            </h5>
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
                    </form>
                    </div>
        </div>
    </div>
</div>
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
                  </form>
          </div>
      </div>
</div>
@endsection

