@extends('layouts.dashboard')

@section('title')
    Detalhes Do Aluno
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-white d-flex align-items-center justify-content-between">
                    <h2>Detalhes Do Aluno</h2>

                    <div class="d-flex jutify-content-end">
                        <div class="ml-1">
                            <form action="{{ route('admin.alunos.destroy', ['aluno'=>$aluno->id]) }}" method="post">
                                {{ method_field('DELETE') }}
                                @csrf
                                <button class="btn btn-danger rounded-circle p-1">
                                    <div class="material-icons float-left">delete</div>
                                </button>
                            </form>
                        </div>
                            
                        <div class="ml-1">
                            <a href="{{ route('admin.alunos.edit', ['aluno'=>$aluno->id]) }}" class="btn btn-success rounded-circle p-1">
                                <div class="material-icons float-left">edit</div>
                            </a>
                        </div>

                        <div class="ml-1">
                            <a href="{{ route('admin.alunos.index') }}" class="btn btn-info rounded-circle p-1">
                                <div class="material-icons float-left">list</div>
                            </a>
                        </div>
                    </div>
                </div>

                <ul class="list-group">
                    <li class="list-group-item">
                        Nome: {{ $aluno->nome }}
                    </li>
                    <li class="list-group-item">
                        Turma: {{ $aluno->turma }}
                    </li>
                    <li class="list-group-item">
                        Email: {{ $aluno->email }}
                    </li>
                    <li class="list-group-item">
                        Cpf: {{ $aluno->cpf }}
                    </li>
                    <li class="list-group-item">
                        Rg: {{ $aluno->rg }}
                    </li>
                    <li class="list-group-item">
                        Data De Nascimento: {{ $aluno->nascimento }}
                    </li>
                    <li class="list-group-item">
                        Telefone: {{ $aluno->telefone }}
                    </li>
                    <li class="list-group-item">
                        Endereço: {{ $aluno->endereco }}
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
    <h2 class="text-center">Olimpiadas Em Que Foi Matriculado:</h2>
    <div class="row justify-content-center">
        @foreach($matriculas as $matricula)
        <div class="list-group-item p-2 px-3 shadow-sm">
            <p class="lead m-0">{{ $matricula->olimpiada()->first()->nome }}</p>
        </div>
        @endforeach
    </div>
</div>
    

@endsection