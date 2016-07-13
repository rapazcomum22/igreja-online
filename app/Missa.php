<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Missa extends Model
{
    protected $table = 'missa';
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $guarded = array('_token');

    public static function getMissa($dataInicial, $dataFinal)
    {
        $query = \DB::table('missa')
            ->select('*')
            ->whereBetween('data_missa',[$dataInicial,$dataFinal])
            ->get();
        return $query;
    }

    public function getPadre()
    {
        return $this->hasOne('App\Padre','id_padre', 'id');
    }

}
