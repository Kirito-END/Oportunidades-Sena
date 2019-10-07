<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Oportunidad;

class Entidad extends Model
{
    public function oportunidad()
    {
        return $this->hasMany(Oportunidad::class);
    }

    public function municipio()
    {
      return $this->belongsTo(Municipio::class);
    }
}
