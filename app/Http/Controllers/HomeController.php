<?php

namespace App\Http\Controllers;

use App\Acudientes;
use App\Personas;
use Illuminate\Http\Request;
use App;
use App\adultos_mayores_profesionales;
use App\Profesionales;
use App\AdultosMayores;
use App\Bitacoras;
use App\EntidadesPrestadorasSalud;
use App\Parentescos;
use App\RegimenVinculaciones;
use App\Role;
use App\TipoSangre;
use App\User;
use App\Zonas;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator', 'user']);
        $totaladul = App\AdultosMayores::all()->count();
        $hombres = App\AdultosMayores::where('genero', 'Masculino')->count();
        $mujeres = App\AdultosMayores::where('genero', 'Femenino')->count();
        $otros = App\AdultosMayores::where('genero', 'Otro')->count();
        $otros = App\AdultosMayores::where('genero', 'Otro')->count();
        $estadoA = App\AdultosMayores::where('estado', 'Activo')->count();
        $estadoI = App\AdultosMayores::where('estado', 'Inactivo')->count();

        $bitacorasC = App\adultos_mayores_profesionales::where('tipobitacora', 'Visita solicitada')->count();
        $bitacorasC2 = App\adultos_mayores_profesionales::where('tipobitacora', 'Visita de rutina')->count();
        $bitacorasC3 = App\adultos_mayores_profesionales::where('tipobitacora', 'Seguimiento')->count();
        $bitacorasC4 = App\adultos_mayores_profesionales::where('tipobitacora', 'Visita domiciliaria')->count();

        $trabajosocialC1 = App\trabajosocial::where('pregunta1', 'Empleado')->count();
        $trabajosocialC2 = App\trabajosocial::where('pregunta1', 'Desempleado')->count();
        $trabajosocialC3 = App\trabajosocial::where('pregunta1', 'Pensionado')->count();
        $trabajosocialC4 = App\trabajosocial::where('pregunta11', 'Residencial')->count();
        $trabajosocialC5 = App\trabajosocial::where('pregunta11', 'Comercial')->count();
        $trabajosocialC6 = App\trabajosocial::where('pregunta11', 'Rural')->count();

        $oxigenotera1 = App\enfermeria::where('pregunta52', 'Si')->count();
        $oxigenotera2 = App\enfermeria::where('pregunta52', 'No')->count();
        $atencionmedica1 = App\enfermeria::where('pregunta142', 'Si')->count();
        $atencionmedica2 = App\enfermeria::where('pregunta142', 'No')->count();

        $ayudast1 = App\enfermeria::where('pregunta9', 'Si')->count();
        $ayudast2 = App\enfermeria::where('pregunta10', 'Si')->count();
        $ayudast3 = App\enfermeria::where('pregunta11', 'Si')->count();
        $ayudast4 = App\enfermeria::where('pregunta12', 'Si')->count();
        $ayudast5 = App\enfermeria::where('pregunta13', 'Si')->count();
        $ayudast6 = App\enfermeria::where('pregunta14', 'Si')->count();
        $ayudast7 = App\enfermeria::where('pregunta15', 'Si')->count();
        $ayudast8 = App\enfermeria::where('pregunta16', 'Si')->count();

        $influenza1 = App\enfermeria::where('pregunta157', 'Si')->count();
        $influenza2 = App\enfermeria::where('pregunta157', 'No')->count();
        
        $adiccion1 = App\enfermeria::where('pregunta43', 'Si')->count();
        $adiccion2 = App\enfermeria::where('pregunta44', 'Si')->count();
        $adiccion3 = App\enfermeria::where('pregunta45', 'Si')->count();


        $dieta1 = App\nutricion::where('pregunta8','Hipoglucida')->count();
        $dieta2 = App\nutricion::where('pregunta8','Hiposodica')->count();
        $dieta3 = App\nutricion::where('pregunta8','Hipocalorica')->count();
        $dieta4 = App\nutricion::where('pregunta8','Hipercalorica')->count();
        $dieta5 = App\nutricion::where('pregunta8','Carne Blanca')->count();
        $dieta6 = App\nutricion::where('pregunta8','Normal')->count();

        $psisben1 = App\AdultosMayores::where('nivelsisben', '1')->count();
        $psisben2 = App\AdultosMayores::where('nivelsisben', '2')->count();
        $psisben3 = App\AdultosMayores::where('nivelsisben', '3')->count();

        $edad1 = App\AdultosMayores::where('edad','>=','60')->where('edad','<=','70')->where('genero','Femenino')->count();
        $edad2 = App\AdultosMayores::where('edad','>=','60')->where('edad','<=','70')->where('genero','Masculino')->count();
        $edad3 = App\AdultosMayores::where('edad','>=','71')->where('edad','<=','80')->where('genero','Femenino')->count();
        $edad4 = App\AdultosMayores::where('edad','>=','71')->where('edad','<=','80')->where('genero','Masculino')->count();
        $edad5 = App\AdultosMayores::where('edad','>=','81')->where('edad','<=','90')->where('genero','Femenino')->count();
        $edad6 = App\AdultosMayores::where('edad','>=','81')->where('edad','<=','90')->where('genero','Masculino')->count();
        $edad7 = App\AdultosMayores::where('edad','>=','91')->where('edad','<=','100')->where('genero','Femenino')->count();
        $edad8 = App\AdultosMayores::where('edad','>=','91')->where('edad','<=','100')->where('genero','Masculino')->count();
        $edad9 = App\AdultosMayores::where('edad','>','100')->where('genero','Femenino')->count();
        $edad10 = App\AdultosMayores::where('edad','>=','100')->where('genero','Masculino')->count();

        $yesavage1 = App\Psicosocial::where('pregunta17', 'Normal')->count();
        $yesavage2 = App\Psicosocial::where('pregunta17', 'Depresion Moderada')->count();
        $yesavage3 = App\Psicosocial::where('pregunta17', 'Depresion Severa')->count();

        $faq1 = App\psicosocial2::where('pregunta13', 'Normalidad')->count();
        $faq2 = App\psicosocial2::where('pregunta13', 'Alteracion Funcional')->count();

        $grupop1 = App\AdultosMayores::where('discapacidad1', 'Si')->count();
        $grupop2 = App\AdultosMayores::where('conflicto', 'Si')->count();
        $grupop3 = App\AdultosMayores::where('grupoetnico', 'Si')->count();
        $grupop4 = App\AdultosMayores::where('ningunogrupo', 'Si')->count();

        $primaria1 = App\AdultosMayores::where('primaria', 'No Presenta')->count();
        $primaria2 = App\AdultosMayores::where('primaria', 'Incompleta')->count();
        $primaria3 = App\AdultosMayores::where('primaria', 'Completa')->count();
        $secundaria1 = App\AdultosMayores::where('secundaria', 'No Presenta')->count();
        $secundaria2 = App\AdultosMayores::where('secundaria', 'Incompleta')->count();
        $secundaria3 = App\AdultosMayores::where('secundaria', 'Completa')->count();
        $superior1 = App\AdultosMayores::where('superior', 'No Presenta')->count();
        $superior2 = App\AdultosMayores::where('superior', 'Incompleta')->count();
        $superior3 = App\AdultosMayores::where('superior', 'Completa')->count();

        return view('home', compact(
            'hombres',
            'mujeres',
            'otros',
            'estadoA',
            'estadoI',
            'totaladul',
            'bitacorasC',
            'bitacorasC2',
            'bitacorasC3',
            'bitacorasC4',
            'trabajosocialC1',
            'trabajosocialC2',
            'trabajosocialC3',
            'trabajosocialC4',
            'trabajosocialC5',
            'trabajosocialC6',
            'oxigenotera1',
            'oxigenotera2',
            'atencionmedica1',
            'atencionmedica2',
            'ayudast1',
            'ayudast2',
            'ayudast3',
            'ayudast4',
            'ayudast5',
            'ayudast6',
            'ayudast7',
            'ayudast8',
            'ayudast9',
            'influenza1',
            'influenza2',
            'dieta1',
            'dieta2',
            'dieta3',
            'dieta4',
            'dieta5',
            'dieta6',
            'psisben1',
            'psisben2',
            'psisben3',
            'edad1',
            'edad2',
            'edad3',
            'edad4',
            'edad5',
            'edad6',
            'edad7',
            'edad8',
            'edad9',
            'edad10',
            'adiccion1',
            'adiccion2',
            'adiccion3',
            'yesavage1',
            'yesavage2',
            'yesavage3',
            'faq1',
            'faq2',
            'grupop1',
            'grupop2',
            'grupop3',
            'grupop4',
            'primaria1',
            'secundaria1',
            'superior1',
            'primaria2',
            'secundaria2',
            'superior2',
            'primaria3',
            'secundaria3',
            'superior3'
        ));
    }

    public function index2(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);

        return view('accesno');
    }
}
