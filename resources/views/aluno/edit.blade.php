@extends('layouts.dashboard')

@section('title')
    Editar Aluno
@endsection

@section('content')

<div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Editar Informações De {{ explode(' ', $aluno->nome, 2)[0] }}</h2>

                        <form action="{{ route('admin.alunos.update', ['aluno'=>$aluno->id]) }}" method="post">
                            @csrf
                            {{ method_field('PUT') }}
                            <div class="form-group form-row">
                                <div class="col-8">
                                    <label>Nome</label>    

                                    <input type="text" name="nome" maxlength="255" class="form-control form-control-lg" value="{{ $aluno->nome }}">
                                </div>

                                <div class="col-4">
                                    <label>Email</label>    

                                    <input type="email" name="email" maxlength="255" class="form-control form-control-lg" value="{{ $aluno->email }}">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group form-row">
                                <div class="col-3">
                                    <label>Data De Nascimento</label>    

                                    <input type="text" name="nascimento" onkeypress="$(this).mask('00/00/0000')" value="{{ $aluno->nascimento }}" class="form-control form-control-lg text-center" >
                                </div>

                                <div class="col-4">
                                    <label>Telefone</label>    

                                    <input type="tel" name="telefone" minlength="15" maxlength="15" onkeypress="$(this).mask('(00) 00000-0000')" class="form-control form-control-lg" value="{{ $aluno->telefone }}">
                                </div>

                                <div class="col-5">
                                    <label>Endereço</label>    

                                    <input type="text" name="endereco" maxlength="255" required value="{{ $aluno->endereco }}" class="form-control form-control-lg">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group form-row">
                                <div class="col-lg-6">
                                    <label>Cpf</label>    

                                    <input type="text" name="cpf" onkeypress="$(this).mask('000.000.000-00');" minlength="14" maxlength="14" value="{{ $aluno->cpf }}" class="form-control form-control-lg">
                                </div>

                                <div class="col-lg-6">
                                    <label>Rg</label>    

                                    <input type="text" name="rg" value="{{ $aluno->rg }}" minlength="7" maxlength="20" class="form-control form-control-lg">
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <div class="col-6">
                                    <label>Série</label>

                                    <select name="serie" class="form-control">
                                        <option>1°</option>
                                        <option>2°</option>
                                        <option>3°</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <label>Curso</label>

                                    <select name="curso" class="form-control">
                                        <option>Informática</option>
                                        <option>Administração</option>
                                        <option>Enfermágem</option>
                                        <option>Redes De Computadores</option>
                                        <option>Comércio</option>
                                    </select>
                                </div>
                            </div>

                            <button class="btn btn-primary">Salvar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection