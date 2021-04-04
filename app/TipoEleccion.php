<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoEleccion extends Model
{
    public $timestamps = false;

    protected $table = 'tipo_eleccion';
    protected $primaryKey = 'pk_tipo_eleccion';

    public function eleccion()
    {
        return $this->hasMany(Eleccion::class, 'pk_eleccion');
    }

}
