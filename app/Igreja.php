<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Igreja extends Model
{
    protected $table = 'igreja';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');
}
