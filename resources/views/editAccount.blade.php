@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">
                Editar Conta
            </h5>

            <form>
              <div class="form-group">
                <label for="name">Nome</label> 
                <input id="name" name="name" type="text" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="phone">Telefone</label> 
                <input id="phone" name="phone" type="text" class="form-control" required="required">
              </div>
              <div class="form-group">
                <label for="email">Email</label> 
                <input id="email" name="email" type="text" class="form-control" required="required">
              </div>
              <div class="form-group mb-5">
                <label for="select">Foco do Treino</label> 
                <div>
                  <select id="select" name="select" class="form-select" required="required">
                    <option value="emagrecimento">Emagrecimento</option>
                    <option value="hipertofria">Hipertofria</option>
                    <option value="Saude">Saude</option>
                  </select>
                </div>
              </div> 
              </div>
              <div class="mb-2">
                      <button name="submit" type="submit" class="btn btn-success btn-large d-inline-block ">
                      Salvar
                      </button>
            </form>              
                <a class="btn btn-danger btn-large d-inline-block" href="http://127.0.0.1:8000/minha-conta" >
                Cancelar
                </a>
        </div>
        
    </div>
    
</div>

@endsection


