@extends('layouts.dashboard')

@section('title')
    Olimpiadas Cadastradas
@endsection

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="display-4">Olimpiadas Cadastradas</h2>

                <table class="table table-striped table-inverse">
                    <thead class="thead-inverse">
                        <tr>
                            <th>Nome</th>
                            <th>Deletar</th>
                            <th>Editar</th>
                            <th>Matriculados</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($olimpiadas as $olimpiada)
                        <tr>
                            <td>{{ $olimpiada->nome }}</td>
                            <td>
                                <form action="{{ route('admin.olimpiadas.destroy', ['olimpiada'=>$olimpiada->id]) }}" method="post">
                                    {{ method_field('DELETE') }}
                                    @csrf
                                    <button class="btn btn-danger p-2 rounded-circle">
                                        <div class="material-icons float-left">delete</div>
                                    </button>
                                </form>
                            </td>
                            <td>
                                <a href="{{ route('admin.olimpiadas.edit', ['olimpiada'=>$olimpiada->id]) }}" class="btn btn-terciary p-2 rounded-circle">
                                    <div class="material-icons float-left">edit</div>
                                </a>        
                            </td>
                            <td>
                                <a href="{{ route('admin.olimpiadas.show', ['olimpiada'=>$olimpiada->id]) }}" class="btn btn-info rounded-circle p-2">
                                    <div class="material-icons float-left">
                                        book
                                    </div>
                                </a>
                            </td> 
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>


@endsection