<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    protected $table = 'municipio';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');
}
