<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Candidata extends Model
{
    // indica os campos que podem ser inseridos na tabela (a partir do método create)
    protected $fillable = ['nome', 'clube', 'foto'];
}
