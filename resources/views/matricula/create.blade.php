@extends('layouts.dashboard')

@section('title')
    Detalhes Do Aluno
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Matricula Em Olimpiadas</h3>
                </div>

                <div class="card-body">
                    <form action="{{ route('admin.matriculas.store') }}" method="post">
                        @csrf
                        <div class="form-group">
                            <select name="aluno" class="form-control">
                                @foreach($alunos as $aluno)
                                <option value="{{ $aluno->id }}">{{ $aluno->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <select name="olimpiada" class="form-control">
                                @foreach($olimpiadas as $olimpiada)
                                <option value="{{ $olimpiada->id }}">{{ $olimpiada->nome }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button class="btn btn-primary">Matricular</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection