<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Grau_Instrucao extends Model
{
    protected $table = 'grau_instrucao';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');
}
