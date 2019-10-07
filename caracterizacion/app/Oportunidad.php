<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\TipoOportunidad;
use App\Entidad;
use App\Estado;

class Oportunidad extends Model
{

    protected $fillable = [
        'id', 'crea_id', 'edita_id', 'responsable_id', 'descripcion', 'fecha_origen', 'compromiso_aleado', 'compromiso_centro', 'resultado_relacional', 'seguimiento_id',
        'entidad_id', 'estado_id', 'cod_oportunidad'
    ];

    public function tipoOportunidad()
    {
        return $this->belongsTo(TipoOportunidad::class, 'cod_oportunidad');
    }

    public function entidad()
    {
        return $this->belongsTo(Entidad::class);
    }

    public function estado()
    {
        return $this->belongsTo(Estado::class);
    }
}
