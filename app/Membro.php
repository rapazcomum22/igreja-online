<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membro extends Model
{
    protected $table = 'membro';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');

    public function MembroIgreja()
    {
        return $this->belongsTo('App\Igreja', 'id_igreja', 'id');
    }
}
