<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Matricula extends Model
{
    public $timestamps = false;

    public function olimpiada()
    {
        return $this->belongsTo('App\Olimpiada');
    }

    public function aluno()
    {
        return $this->belongsTo('App\Aluno');
    }
}
