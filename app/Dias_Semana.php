<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dias_Semana extends Model
{
    protected $table = 'dias_semana';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');
}
