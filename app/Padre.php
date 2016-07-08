<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Padre extends Model
{
    protected $table = 'padre';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');


    public function PadreIgreja()
    {
        return $this->belongsTo('App\Igreja', 'id_igreja', 'id');
    }
}
