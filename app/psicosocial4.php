<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class psicosocial4 extends Model
{
    public function adulto(){ //$libro->categoria->nombre
        return $this->belongsTo(AdultosMayores::class); //Pertenece a una categoría.
    }
    public function persona(){ //$libro->categoria->nombre
        return $this->belongsTo(Personas::class); //Pertenece a una categoría.
    }
}
