@extends('layouts.dashboard')

@section('title')
    Alunos Cadastrados No Sistema
@endsection

@section('content')

    <div class="container">
        <h2 class="text-center">Alunos Cadastrados No Sistema</h2>
        
        <div class="row justify-content-center">
            @foreach($alunos as $aluno)
            
            <div class="col-4">
                <div class="card">
                    <div class="card-header d-flex justify-content-end p-1">
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
                            <a href="{{ route('admin.alunos.show', ['aluno'=>$aluno->id]) }}" class="btn btn-info rounded-circle p-1">
                                <div class="material-icons float-left">book</div>
                            </a>
                        </div>
                    </div>

                    <div class="card-body p-2">
                        <p class="lead text-center">{{ $aluno->nome }}</p>
                        <hr>
                        <ul class="list-group">
                            <li class="list-group-item">
                                Email: {{ $aluno->email }}
                            </li>
                            <li class="list-group-item">
                                Telefone: {{ $aluno->telefone }}
                            </li>
                            <li class="list-group-item">
                                Turma: {{ $aluno->turma }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach                
        </div>
    </div>

@endsection