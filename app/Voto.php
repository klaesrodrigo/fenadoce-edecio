<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Voto extends Model
{
    //
    protected $fillable = ['nome', 'email', 'candidata_id'];
}
