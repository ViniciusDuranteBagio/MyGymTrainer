@extends('layouts.app')

@section('content')

<div class="container mt-5">
    
    <div class="row d-flex justify-content-center">
        
        <div class="col-md-7">
            
            <div class="card p-3 py-4">
                 <h1 class="card-title text-center mb-3">Vinicius Durante Bagio</h1>
                <div class="text-center">
                    <img src="{{ asset('images/vinicius.png') }}" alt="tag" width="150" class="rounded-circle">
                </div>
                
                <div class="text-center mt-3">

                    <ul class="information-list">
                        <li class="mb-4"><i class="fa-solid fa-phone me-2"></i>Telefone: (48) 9 96980332</li>
                        <li class="mb-4"><i class="fa-solid fa-envelope me-2 display-inline"></i>Email: viniciusdurante@hotmail.com</li>
                        <li class="mb-4"><i class="fa-solid fa-dumbbell me-2"></i>Foco do treino: Emagrecimento</li>
                    </ul>
                    
                    <div class="buttons">
                        <a class="btn btn-primary" href="http://127.0.0.1:8000/editar-minha-conta">Editar Perfil</a>
                        <a class="btn btn-outline-primary" href="http://127.0.0.1:8000/trocar-senha">Trocar Senha ?</a>
                    </div>
                    
                </div>
                
               
                
                
            </div>
            
        </div>
        
    </div>
    
</div>
@endsection

