@extends('layouts.dashboard')

@section('title')
    Editar {{$olimpiada->nome}}
@endsection

@section('content')

    <div class="container">
        <h2 class="display-4 text-center">Editar Olimpiada</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.olimpiadas.update', ['olimpiada'=>$olimpiada->id]) }}" method="post">
                    {{ method_field('PUT') }}
                    @csrf
                    <div class="form-group">
                        <input type="text" name="olimpiada" value="{{ $olimpiada->nome }}" class="form-control">
                    </div>

                    <button class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>

@endsection