<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missa extends Model
{
    protected $table = 'missa';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');
}
