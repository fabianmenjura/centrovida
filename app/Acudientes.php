<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Acudientes extends Model
{
    public function parentesco(){ //$libro->categoria->nombre
        return $this->belongsTo(Parentescos::class); //Pertenece a una categoría.
    }
    public function persona(){ //$libro->categoria->nombre
        return $this->belongsTo(Personas::class); //Pertenece a una categoría.
    }
}
