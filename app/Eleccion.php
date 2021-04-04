<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eleccion extends Model
{
    
    protected $table = 'eleccion';
    protected $primaryKey = 'pk_eleccion';

    public function tipoeleccion()
    {
        return $this->belongsTo(TipoEleccion::class, 'pk_tipo_eleccion');
    }
}
