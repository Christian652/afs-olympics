<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Olimpiada extends Model
{
    public $timestamps = false;

    public function alunos()
    {
        return Matricula::all()->where('olimpiada_id', $this->id);
    }
}
