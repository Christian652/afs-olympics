<?php

namespace App\Http\Controllers;

use App\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alunos = Aluno::all();

        return view('aluno.index', ['alunos'=>$alunos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('aluno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $aluno = new Aluno();
        $aluno->nome = $request->nome;
        $aluno->rg = $request->rg;
        $aluno->cpf = $request->cpf;
        $aluno->telefone = $request->telefone;
        $aluno->endereco = $request->endereco;
        $aluno->email = $request->email;
        $aluno->nascimento = $request->nascimento;
        $aluno->turma = $request->serie."-".$request->curso;

        $aluno->save();

        return redirect()->route('admin.alunos.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno $aluno)
    {
        $matriculas = $aluno->olimpiadas();

        return view('aluno.show', ['aluno'=>$aluno, 'matriculas'=>$matriculas]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno $aluno)
    {
        return view('aluno.edit', ['aluno'=>$aluno]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno $aluno)
    {
        $aluno->nome = $request->nome;
        $aluno->rg = $request->rg;
        $aluno->cpf = $request->cpf;
        $aluno->telefone = $request->telefone;
        $aluno->endereco = $request->endereco;
        $aluno->email = $request->email;
        $aluno->nascimento = $request->nascimento;
        $aluno->turma = $request->serie."-".$request->curso;
        $aluno->save();

        return redirect()->route('admin.alunos.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno  $aluno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno $aluno)
    {
        $aluno->delete();

        return redirect()->route('admin.users.index');
    }
}
