<?php

namespace App\Http\Controllers;

use App\Aluno;
use App\Matricula;
use App\Olimpiada;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function create()
    {
        $olimpiadas = Olimpiada::all();
        $alunos = Aluno::all();

        return view('matricula.create', ['olimpiadas'=>$olimpiadas, 'alunos'=>$alunos]);
    }

    public function store(Request $request)
    {
        $matricula = new Matricula();
        $matricula->aluno_id = $request->aluno;
        $matricula->olimpiada_id = $request->olimpiada;
        $matricula->save();

        return redirect()->route('admin.matriculas.create');
    }

    public function destroy(Matricula $matricula)
    {
        $matricula->delete();

        return redirect()->route('');
    }
}
