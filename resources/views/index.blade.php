@extends('layouts.app')
@section('content')
    <div class="container mb-4">
        <h1 class="text-center"> Bem Vindo ao My Gym Trainer {{Auth::user()->name}}</h1>
    </div>
@endsection

