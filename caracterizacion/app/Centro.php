<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Centro extends Model
{
    public function user()
    {
        return $this->hasMany(Perfil::class);
    }
}
