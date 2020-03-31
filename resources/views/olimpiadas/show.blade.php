@extends('layouts.dashboard')

@section('title')
    {{ $olimpiada->nome }}
@endsection

@section('content')

    <div class="container">
        <h2 class="display-4 text-center">Detalhes - {{$olimpiada->nome}}</h2>
        <hr>
        <div class="row justify-content-center">
            @foreach($alunos as $aluno)
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="list-group-item shadow p-3 mb-2">
                    <p class="lead">{{ $aluno->nome }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>

@endsection