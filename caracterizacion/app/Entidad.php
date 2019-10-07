<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Municipio;

class Entidad extends Model
{
    public function municipio()
    {
      return $this->belongsTo(Municipio::class);
    }
}
