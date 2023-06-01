@extends('layouts.app')
@section('content')
<body>
    <div class="registration-form">
        <form id="form">
            <div class="form-icon">
                <span><i class=" align-center fa-regular fa-user" style="line-height: unset "></i></span>
            </div>

            <div class="form-group">
                VAI SER UM SELECT MAIS ELABORADO
                <input type="text" class="form-control item" id="training_exp" placeholder="Experiencia treinando">
            </div>
            <div class="form-group">
                <label for="workoutFocus">Informe o foco do seu Treino:</label>
                <select name="workoutFocus" id="workoutFocus" form="form" class="form-control item">
                    <option value="Emagrecimento">Emagrecimento</option>
                    <option value="Hipertrofia">Hipertrofia</option>
                    <option value="Saude">Saude</option>
                </select>
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="birthDate" placeholder="Data de nacimento">
            </div>
            <div class="form-group">
                <input type="text" class="form-control item" id="phone-number" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <label for="gender">Informe o seu Genero:</label>
                <select name="gender" id="gender" form="form" class="form-control item">
                    <option value="m">Homem</option>
                    <option value="f">Mulher</option>
                    <option value="Other">Outros</option>
                </select>
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-block create-account ">Completar Cadastro</button>
            </div>
        </form>
    </div>
</body>
@endsection

