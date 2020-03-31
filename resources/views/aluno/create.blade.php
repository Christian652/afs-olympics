@extends('layouts.dashboard')

@section('title')
    Cadastrar Alunos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h2>Cadastrar Aluno</h2>

                        <form action="{{ route('admin.alunos.store') }}" method="post">
                            @csrf
                            <div class="form-group form-row">
                                <div class="col-8">
                                    <label>Nome</label>    

                                    <input type="text" name="nome" maxlength="255" class="form-control form-control-lg" placeholder="Digite Aqui O Nome Do Aluno:">
                                </div>

                                <div class="col-4">
                                    <label>Email</label>    

                                    <input type="email" name="email" maxlength="255" class="form-control form-control-lg" placeholder="Digite Aqui O Email Do Aluno:">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group form-row">
                                <div class="col-3">
                                    <label>Data De Nascimento</label>    

                                    <input type="text" name="nascimento" onkeypress="$(this).mask('00/00/0000')" class="form-control form-control-lg text-center" placeholder="00/00/0000">
                                </div>

                                <div class="col-4">
                                    <label>Telefone</label>    

                                    <input type="tel" name="telefone" minlength="15" maxlength="15" onkeypress="$(this).mask('(00) 00000-0000')" class="form-control form-control-lg" placeholder="Digite Aqui O Telefone Do Aluno:">
                                </div>

                                <div class="col-5">
                                    <label>Endereço</label>    

                                    <input type="text" name="endereco" maxlength="255" required placeholder="Digite Aqui O Endereço Do Aluno" class="form-control form-control-lg">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group form-row">
                                <div class="col-lg-6">
                                    <label>Cpf</label>    

                                    <input type="text" name="cpf" onkeypress="$(this).mask('000.000.000-00');" minlength="14" maxlength="14" placeholder="000.000.000-00" class="form-control form-control-lg">
                                </div>

                                <div class="col-lg-6">
                                    <label>Rg</label>    

                                    <input type="text" name="rg" placeholder="Rg" minlength="7" maxlength="20" class="form-control form-control-lg">
                                </div>
                            </div>

                            <div class="form-group form-row">
                                <div class="col-6">
                                    <select name="serie" class="form-control">
                                        <option>1°</option>
                                        <option>2°</option>
                                        <option>3°</option>
                                    </select>
                                </div>

                                <div class="col-6">
                                    <select name="curso" class="form-control">
                                        <option>Informática</option>
                                        <option>Administração</option>
                                        <option>Enfermágem</option>
                                        <option>Redes De Computadores</option>
                                        <option>Comércio</option>
                                    </select>
                                </div>
                            </div>

                            <button class="btn btn-primary">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection