@extends('layouts.dashboard')

@section('title')
    Olimpiadas Cadastradas
@endsection

@section('content')

    <div class="container">
        <h2 class="display-4 text-center">Cadastrar Olimpiada</h2>
        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.olimpiadas.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="olimpiada" placeholder="Digite Aqui O Nome Da Olimpiada" class="form-control">
                    </div>

                    <button class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>

@endsection