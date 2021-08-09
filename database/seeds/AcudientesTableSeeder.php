<?php

use App\Acudientes;
use App\EntidadesPrestadorasSalud;
use Illuminate\Database\Seeder;

use App\Parentescos;
use App\Personas;
use App\RegimenVinculaciones;
use App\TipoSangre;
use App\Zonas;
use App\Role;
class AcudientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        //Parentescos::truncate(); // Evita duplicar datos

        $parentesco = new Parentescos();
        $parentesco->nombre = "Amigo";
        $parentesco->save();
        $parentesco = new Parentescos();
        $parentesco->nombre = "Hermano";
        $parentesco->save();

        //Personas::truncate();
        $persona= new Personas();
        $persona->id=1;
        $persona->nombre="Jaime";
        $persona->apellido="Martinez";
        $persona->celular="3204344200";
        $persona->barrio="San Mateo";
        $persona->direccion="Calle 18 N 14-30";
        $persona->save();

        //Acudientes::truncate();
        $acudiente= new Acudientes();
        $acudiente->ocupacion = "Independiente";
        $acudiente->persona_id= 1;
        $acudiente->parentesco_id=1;
        $acudiente->save();

        //TipoSangre::truncate();
        $tiposangre= new TipoSangre();
        $tiposangre->nombresangre = "O-";
        $tiposangre->save();

       // Zonas::truncate();
        $zona= new Zonas();
        $zona->nombrezona = "Urbano";
        $zona->save();
        
        //EntidadesPrestadorasSalud::truncate();
        $eps= new EntidadesPrestadorasSalud();
        $eps->nombreentidad = "Famisanar";
        $eps->save();

       // RegimenVinculaciones::truncate();
        $regimen= new RegimenVinculaciones();
        $regimen->nombreregimen = "Subsidiado";
        $regimen->save();

        $role = new Role();
        $role->name = 'admin';
        $role->description = 'Administrator';
        $role->save();

        $role = new Role();
        $role->name = 'professional';
        $role->description = 'Profesional';
        $role->save();

        $role = new Role();
        $role->name = 'operator';
        $role->description = 'Operador';
        $role->save();

        $role = new Role();
        $role->name = 'user';
        $role->description = 'User';
        $role->save();

        $role = new Role();
        $role->name = 'psicologia';
        $role->description = 'Psicologia';
        $role->save();

        $role = new Role();
        $role->name = 'nutricion';
        $role->description = 'Nutricion';
        $role->save();

        $role = new Role();
        $role->name = 'enfermeria';
        $role->description = 'Enfermeria';
        $role->save();

        $role = new Role();
        $role->name = 'trabajosocial';
        $role->description = 'Trabajo Social';
        $role->save();

        $role = new Role();
        $role->name = 'actividadfisica';
        $role->description = 'Actividad Fisica';
        $role->save();

        $role = new Role();
        $role->name = 'fonoaudiologia';
        $role->description = 'Fonoaudiologia';
        $role->save();

        
    }
}