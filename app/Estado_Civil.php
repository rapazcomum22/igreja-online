<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estado_Civil extends Model
{
    protected $table = 'estado_civil';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');
}
