<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profesionales extends Model
{
    public function persona(){ //$libro->categoria->nombre
        return $this->belongsTo(Personas::class); //Pertenece a una categoría.
    }
    
}
