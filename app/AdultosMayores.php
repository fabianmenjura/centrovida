<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdultosMayores extends Model
{
    public function persona(){ //$libro->categoria->nombre
        return $this->belongsTo(Personas::class); //Pertenece a una categoría.
    }
    public function sangre(){ //$libro->categoria->nombre
        return $this->belongsTo(TipoSangre::class); //Pertenece a una categoría.
    }
    public function zona(){ //$libro->categoria->nombre
        return $this->belongsTo(Zonas::class); //Pertenece a una categoría.
    }
    public function eps(){ //$libro->categoria->nombre
        return $this->belongsTo(EntidadesPrestadorasSalud::class); //Pertenece a una categoría.
    }
    public function regimen(){ //$libro->categoria->nombre
        return $this->belongsTo(RegimenVinculaciones::class); //Pertenece a una categoría.
    }
    public function acudiente(){ //$libro->categoria->nombre
        return $this->belongsTo(Acudientes::class); //Pertenece a una categoría.
    }
    public function bitacora2(){
        return $this->belongsTo(adultos_mayores_profesionales::class); // Muchos a muchos
    }

}
