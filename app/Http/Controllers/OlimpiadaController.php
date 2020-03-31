<?php

namespace App\Http\Controllers;

use App\Olimpiada;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OlimpiadaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $olimpiadas = Olimpiada::all();

        return view('olimpiadas.index', ['olimpiadas'=>$olimpiadas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('olimpiadas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $olimpiada = new Olimpiada();
        $olimpiada->nome = $request->olimpiada;
        $olimpiada->save();

        return redirect()->route('admin.olimpiadas.index');
    }

    public function show(Olimpiada $olimpiada)
    {
        $alunos = $olimpiada->alunos();

        return view('olimpiadas.show', ['olimpiada'=>$olimpiada, 'alunos'=>$alunos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function edit(Olimpiada $olimpiada)
    {
        return view('olimpiadas.edit', ['olimpiada'=>$olimpiada]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Olimpiada $olimpiada)
    {
        $olimpiada->nome = $request->olimpiada;
        $olimpiada->save();

        return redirect()->route('admin.olimpiadas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Olimpiada  $olimpiada
     * @return \Illuminate\Http\Response
     */
    public function destroy(Olimpiada $olimpiada)
    {
        $olimpiada->delete();

        return redirect()->route('admin.olimpiadas.index');
    }
}
