<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sexo extends Model
{
    protected $table = 'sexo';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');

   
}
