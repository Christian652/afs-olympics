@extends('layouts.dashboard')

@section('title')
    Cadastro De Usuarios
@endsection

@section('content')

    <div class="container">
        <h2 class="display-4 text-center">Cadastrar Usuarios</h2>

        <div class="row justify-content-center">
            <div class="col-8">
                <form action="{{ route('admin.users.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" required name="name" class="form-control" placeholder="Digite aqui o nome do usuario">
                    </div>

                    <div class="form-group">
                        <input type="email" required name="email" class="form-control" placeholder="Digite aqui o email do usuario">
                    </div>

                    <div class="form-group">
                        <input type="password" required name="password" class="form-control" placeholder="Digite aqui a senha do usuario">
                    </div>

                    <button class="btn btn-primary">Salvar</button>
                </form>
            </div>
        </div>
    </div>

@endsection