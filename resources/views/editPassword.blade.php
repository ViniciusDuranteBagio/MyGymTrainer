@extends('layouts.app')

@section('content')

<div class="container">
    <div class="card text-center">
        <div class="card-body">
            <h5 class="card-title">
                Editar Senha
            </h5>

            <form>
                <div class="form-group">
                  <label for="text">Senha atual</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-lock"></i>
                      </div>
                    </div>
                    <input id="text" name="text" type="text" class="form-control" required="required">
                  </div>
                </div>
                <div class="form-group mb-5">
                  <label for="text1">Nova Senha</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <div class="input-group-text">
                        <i class="fa fa-lock"></i>
                      </div>
                    </div>
                    <input id="text1" name="text1" type="text" class="form-control" required="required">
                  </div>
                </div>
              <div >
                      <button name="submit" type="submit" class="btn btn-success btn-large d-inline-block ">
                      Salvar
                      </button>
            </form>
                <a class="btn btn-danger btn-large d-inline-block" href="http://127.0.0.1:8000/minha-conta/{{Auth::id()}}" >
                Cancelar
                </a>
              </div>

    </div>

</div>

@endsection


