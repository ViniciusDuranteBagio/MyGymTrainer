@extends('layouts.app')

@section('content')

<div class="card">
  <div class="card-body">
    <h2 class="card-title text-center">Contrato Atual</h2>
    <ul class="list-group list-group-flush">
        <li class="list-group-item mb-4">Dia do vencimento: {{$expires}}</li>
{{--        <li class="list-group-item mb-4">Valor do contrato: 160 Reais</li>--}}
{{--        <li class="list-group-item mb-4">Tipo de Contrato: Mensal</li>--}}
    </ul>
    <div class="d-grid gap-2">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#paymentModal">
            Renovar Contrato
        </button>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="paymentModal" tabindex="-1" aria-labelledby="paymentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="paymentModalLabel">Renovação de Contrato</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Seu contrato atual é do valor de 160 reais mensal, caso deseje renovar o seu contrato faça um pix desse valor para o
          {{$config->nm_config}}:
          {{$config->value}}, e repasse o comprovante para o responsavel pelas finanças da academia.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
      </div>
    </div>
  </div>
</div>
@endsection
