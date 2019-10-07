<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Oportunidad;

class TipoOportunidad extends Model
{
    public function oportunidad()
    {
        return $this->hasMany(Oportunidad::class, 'cod_oportunidad');
    }
}
