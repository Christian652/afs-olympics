<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public function olimpiadas()
    {
        return Matricula::all()->where('aluno_id', $this->id);
    }
}
