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
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PersonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexs(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        return view('layouts.sisben');
    }
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $paren = Parentescos::all();
        return view('layouts.agregaracudiente', compact('paren'));
    }
    public function index2(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        return view('layouts.agregarprofesional');
    }
    public function index3(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $sangre = TipoSangre::all();
        $zona = Zonas::all();
        $eps = EntidadesPrestadorasSalud::all();
        $regi = RegimenVinculaciones::all();
        $acudientes = Acudientes::all();

        return view('layouts.agregaradultomayor', compact('sangre', 'zona', 'eps', 'regi', 'acudientes'));
    }
    public function bitacoras(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia']);
        $profe = Profesionales::all();
        $adultos = AdultosMayores::all();
        return view('layouts.agregarbitacoras', compact('profe', 'adultos'));
    }


    public function leer(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $acudientes = App\Acudientes::all();
        return view('layouts.veracudientes', compact('acudientes'));
    }
    public function leer2(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $profesionales = App\Profesionales::all();
        return view('layouts.verprofesionales', compact('profesionales'));
    }
    public function leer3(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $adultos = App\AdultosMayores::all();
        return view('layouts.veradultosmayores', compact('adultos'));
    }
    public function leer4(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $users = App\User::all();
        $rols = Role::all();
        return view('layouts.adminroles', compact('users', 'rols'));
    }

    public function reporte(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
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

        return view('layouts.reportes', compact(
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
            'trabajosocialC6'
        ));
    }

    public function ficha($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha = App\AdultosMayores::findOrFail($id);
        $profesionalFicha = App\adultos_mayores_profesionales::where('adulto_id', $id)->orderBy('created_at', 'desc')->get();
        $nutricionFicha = App\nutricion::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $enfermeriaFicha = App\enfermeria::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $fonoaudioFicha = App\Fonoaudiologia::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $psicosocialFicha = App\Psicosocial::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $psicosocialFicha2 = App\psicosocial2::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $psicosocialFicha3 = App\psicosocial3::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $psicosocialFicha4 = App\psicosocial4::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $psicosocialFicha5 = App\psicosocial5::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $trabajosocialFicha = App\trabajosocial::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();
        $trabajofisicoFicha = App\trabajofisico::where('adulto_id', $id)->orderBy('created_at', 'desc')->take(1)->get();


        return view('layouts.ficha', compact('personaFicha', 'profesionalFicha', 'psicosocialFicha', 'psicosocialFicha2', 'psicosocialFicha3', 'psicosocialFicha4', 'psicosocialFicha5', 'fonoaudioFicha', 'enfermeriaFicha', 'nutricionFicha', 'trabajosocialFicha', 'trabajofisicoFicha'));
    }

    public function vernutricion($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $nutricion = App\nutricion::findOrFail($id);
        return view('layouts.listarnutricion', compact('nutricion'));
    }
    public function verenfermeria($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $enfermeria = App\enfermeria::findOrFail($id);
        return view('layouts.listarenfermeria', compact('enfermeria'));
    }
    public function verfonoaudio($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $fono = App\Fonoaudiologia::findOrFail($id);
        return view('layouts.listarfono', compact('fono'));
    }
    public function verpsico($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $psico = App\Psicosocial::findOrFail($id);
        return view('layouts.listarpsicosocial', compact('psico'));
    }
    public function verpsico2($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $psico = App\psicosocial2::findOrFail($id);
        return view('layouts.listarpsicosocial2', compact('psico'));
    }
    public function verpsico3($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $psico = App\psicosocial3::findOrFail($id);
        return view('layouts.listarpsicosocial3', compact('psico'));
    }
    public function verpsico4($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $psico = App\psicosocial4::findOrFail($id);
        return view('layouts.listarpsicosocial4', compact('psico'));
    }
    public function verpsico5($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $psico = App\psicosocial5::findOrFail($id);
        return view('layouts.listarpsicosocial5', compact('psico'));
    }
    public function vertrabajosocial($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $tbsocial = App\trabajosocial::findOrFail($id);
        return view('layouts.listartrabajosocial', compact('tbsocial'));
    }
    public function vertrabajofisico($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $tbfisico = App\trabajofisico::findOrFail($id);
        return view('layouts.listartrabajofisico', compact('tbfisico'));
    }
    public function viewspdfs1($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha2 = App\AdultosMayores::findOrFail($id);
        return view('layouts.viewspdfs.anexocc', compact('personaFicha2'));
    }
    public function viewspdfs2($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha3 = App\AdultosMayores::findOrFail($id);
        return view('layouts.viewspdfs.anexodecl', compact('personaFicha3'));
    }
    public function viewspdfs3($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha4 = App\AdultosMayores::findOrFail($id);
        return view('layouts.viewspdfs.anexodisenti', compact('personaFicha4'));
    }
    public function viewspdfs4($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha5 = App\AdultosMayores::findOrFail($id);
        return view('layouts.viewspdfs.anexoeps', compact('personaFicha5'));
    }
    public function viewspdfs5($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha6 = App\AdultosMayores::findOrFail($id);
        return view('layouts.viewspdfs.anexohist', compact('personaFicha6'));
    }
    public function viewspdfs6($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia', 'operator']);
        $personaFicha7 = App\AdultosMayores::findOrFail($id);
        return view('layouts.viewspdfs.anexosisben', compact('personaFicha7'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $personaAgregar = new Personas;
        $acudienteAgregar = new Acudientes;
        $request->validate(
            [
                'cc' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'celular' => 'required',
                'direccion' => 'required',
                'barrio' => 'required',
                'ocupacion' => 'required',
                'parentesco' => 'required'
            ]
        );
        $personaAgregar->id = $request->cc;
        $personaAgregar->nombre = $request->nombre;
        $personaAgregar->apellido = $request->apellido;
        $personaAgregar->celular = $request->celular;
        $personaAgregar->direccion = $request->direccion;
        $personaAgregar->barrio = $request->barrio;
        $acudienteAgregar->ocupacion = $request->ocupacion;
        $acudienteAgregar->persona_id = $request->cc;
        $acudienteAgregar->parentesco_id = $request->parentesco;
        $personaAgregar->save();
        $acudienteAgregar->save();
        return back()->with('success', '¡Registro exitoso!');
    }

    public function store2(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $personaAgregar = new Personas;
        $profesionalAgregar = new Profesionales;
        $request->validate(
            [
                'cc' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'celular' => 'required',
                'direccion' => 'required',
                'barrio' => 'required',
                'especialidad' => 'required',

            ]
        );
        $personaAgregar->id = $request->cc;
        $personaAgregar->nombre = $request->nombre;
        $personaAgregar->apellido = $request->apellido;
        $personaAgregar->celular = $request->celular;
        $personaAgregar->direccion = $request->direccion;
        $personaAgregar->barrio = $request->barrio;
        $profesionalAgregar->persona_id = $request->cc;
        $profesionalAgregar->especialidad = $request->especialidad;
        $personaAgregar->save();
        $profesionalAgregar->save();
        return back()->with('success', '¡Registro exitoso!');
    }

    public function store3(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $personaAgregar = new Personas;
        $adultoAgregar = new AdultosMayores;

        if ($request->hasFile('fotoadulto')) {
            $archivo = $request->file('fotoadulto');
            $name = time() . $archivo->getClientOriginalName();
            $archivo->move(public_path() . '/images/', $name);
        }
        if ($request->hasFile('fcedula')) {
            $archivo2 = $request->file('fcedula');
            $name2 = time() . $archivo2->getClientOriginalName();
            $archivo2->move(public_path() . '/pdfs/', $name2);
            $adultoAgregar->anexocedula = $name2;
        } else {
            $adultoAgregar->anexocedula = $request->fcedula;
        }

        if ($request->hasFile('fhistoria')) {
            $archivo3 = $request->file('fhistoria');
            $name3 = time() . $archivo3->getClientOriginalName();
            $archivo3->move(public_path() . '/pdfs/', $name3);
            $adultoAgregar->anexohistoriaclinica = $name3;
        } else {
            $adultoAgregar->anexohistoriaclinica = $request->fhistoria;
        }

        if ($request->hasFile('fdeclaracion')) {
            $archivo4 = $request->file('fdeclaracion');
            $name4 = time() . $archivo4->getClientOriginalName();
            $archivo4->move(public_path() . '/pdfs/', $name4);
            $adultoAgregar->anexodeclaracionconsentimiento = $name4;
        } else {
            $adultoAgregar->anexodeclaracionconsentimiento = $request->fdeclaracion;
        }

        if ($request->hasFile('feps')) {
            $archivo5 = $request->file('feps');
            $name5 = time() . $archivo5->getClientOriginalName();
            $archivo5->move(public_path() . '/pdfs/', $name5);
            $adultoAgregar->anexocertificacioneps = $name5;
        } else {
            $adultoAgregar->anexocertificacioneps = $request->feps;
        }

        if ($request->hasFile('fpuntaje')) {
            $archivo6 = $request->file('fpuntaje');
            $name6 = time() . $archivo6->getClientOriginalName();
            $archivo6->move(public_path() . '/pdfs/', $name6);
            $adultoAgregar->anexopuntajesisben = $name6;
        } else {
            $adultoAgregar->anexopuntajesisben = $request->fpuntaje;
        }
        if ($request->hasFile('fdisentimiento')) {
            $archivo7 = $request->file('fdisentimiento');
            $name7 = time() . $archivo7->getClientOriginalName();
            $archivo7->move(public_path() . '/pdfs/', $name7);
            $adultoAgregar->anexodisentimientoinformado = $name7;
        } else {
            $adultoAgregar->anexodisentimientoinformado = $request->fdisentimiento;
        }



        $request->validate(
            [
                'cc' => 'required',
                'nombre' => 'required',
                'apellido' => 'required',
                'celular' => 'required',
                'direccion' => 'required',
                'barrio' => 'required',
                'fechan' => 'required',
                // 'edad' => 'required',
                'fechan' => 'required',
                'nsisben' => 'required',
                'sangre' => 'required',
                'zona' => 'required',
                'epsa' => 'required',
                'regimen' => 'required',
                'acudiente' => 'required',
                'genero' => 'required',
                'discapacidad' => 'required',
                'puntajes' => 'required',
                'discapacidad1' => 'required',
            ]
        );
        $personaAgregar->id = $request->cc;
        $personaAgregar->nombre = $request->nombre;
        $personaAgregar->apellido = $request->apellido;
        $personaAgregar->celular = $request->celular;
        $personaAgregar->direccion = $request->direccion;
        $personaAgregar->barrio = $request->barrio;

        $adultoAgregar->persona_id = $request->cc;
        $adultoAgregar->fechaNacimiento = $request->fechan;
        $adultoAgregar->genero = $request->genero;
        $adultoAgregar->estado = $request->estado;
        $adultoAgregar->discapacidad = $request->discapacidad;
        $adultoAgregar->discapacidad1 = $request->discapacidad1;
        $adultoAgregar->conflicto = $request->conflicto;
        $adultoAgregar->grupoetnico = $request->grupoetnico;
        $adultoAgregar->primaria = $request->primaria;
        $adultoAgregar->secundaria = $request->secundaria;
        $adultoAgregar->superior = $request->superior;
        $adultoAgregar->puntajes = $request->puntajes;
        $fecha_nacimiento  = $request->fechan;
        $edad = \Carbon\Carbon::parse($fecha_nacimiento)->age;
        $adultoAgregar->edad = $edad;
        $adultoAgregar->nivelsisben = $request->nsisben;
        $adultoAgregar->anexofoto = $name;
        $adultoAgregar->sangre_id = $request->sangre;
        $adultoAgregar->zona_id = $request->zona;
        $adultoAgregar->eps_id = $request->epsa;
        $adultoAgregar->regimen_id = $request->regimen;
        $adultoAgregar->acudiente_id = $request->acudiente;
        if ($request->discapacidad1=="Si" or $request->conflicto=="Si" or $request->grupoetnico=="Si") {
            $adultoAgregar->ningunogrupo = null;
         } else {
            $adultoAgregar->ningunogrupo = "Si";
         }
         
        $personaAgregar->save();
        $adultoAgregar->save();
        return back()->with('success', '¡Registro exitoso!');
    }
    public function storeb(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia', 'nutricion', 'enfermeria', 'trabajosocial', 'actividadfisica', 'fonoaudiologia']);
        $bitacoraAgregar = new adultos_mayores_profesionales();

        $request->validate(
            [
                'bitacora' => 'required',
                'tbitacora' => 'required',

            ]
        );
        $bitacoraAgregar->profesional_id = $request->profesional;
        $bitacoraAgregar->adulto_id = $request->adulto;
        $bitacoraAgregar->descripcionbitacora = $request->bitacora;
        $bitacoraAgregar->tipobitacora = $request->tbitacora;


        $bitacoraAgregar->save();

        return back()->with('success', '¡La bitácora se agregó correctamente!');
    }
    public function edit1($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $paren = Parentescos::all();
        $acudienteActualizar = App\Acudientes::findOrFail($id);
        return view('layouts.editarpersonas.editaracudiente', compact('acudienteActualizar', 'paren'));
    }
    public function edit2($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $profesionalActualizar = App\Profesionales::findOrFail($id);
        return view('layouts.editarpersonas.editarprofesional', compact('profesionalActualizar'));
    }

    public function edit3($id, Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $adultoActualizar = App\AdultosMayores::findOrFail($id);
        $sangre = TipoSangre::all();
        $zona = Zonas::all();
        $eps = EntidadesPrestadorasSalud::all();
        $regi = RegimenVinculaciones::all();
        $acudientes = Acudientes::all();

        return view('layouts.editarpersonas.editaradultomayor', compact('adultoActualizar', 'sangre', 'zona', 'eps', 'regi', 'acudientes'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function show(Personas $personas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function edit(Personas $personas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Personas $personas)
    {
        //
    }
    public function updatepersonas(Request $request, $id)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $personasUpdate = Personas::findOrFail($id);
        $personasUpdate->nombre = $request->nombre1;
        $personasUpdate->apellido = $request->apellido;
        $personasUpdate->celular = $request->celular;
        $personasUpdate->direccion = $request->direccion;
        $personasUpdate->barrio = $request->barrio;
        $personasUpdate->save();
        return back()->with('success', '¡Actualización exitosa!');
    }
    public function updateacudientes(Request $request, $id)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $acudienteUpdate = Acudientes::findOrFail($id);
        $acudienteUpdate->ocupacion = $request->ocupacion;
        $acudienteUpdate->parentesco_id = $request->parentesco;
        $acudienteUpdate->save();
        return back()->with('success', '¡Actualización exitosa!');
    }
    public function updateprofesionales(Request $request, $id)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $profesionalUpdate = Profesionales::findOrFail($id);
        $profesionalUpdate->especialidad = $request->especialidad;
        $profesionalUpdate->save();
        return back()->with('success', '¡Actualización exitosa!');
    }
    public function updateadultos(Request $request, $id)
    {
        $request->user()->authorizeRoles(['admin', 'operator']);
        $adultoUpdate = AdultosMayores::findOrFail($id);

        if ($request->hasFile('fotoadulto')) {

            if (is_null($adultoUpdate->anexofoto)) {
                var_dump(is_null($adultoUpdate->anexofoto));
            } else {
                $image_path = public_path() . "/images/$adultoUpdate->anexofoto";
                unlink($image_path);
            }



            $archivo = $request->file('fotoadulto');
            $name = time() . $archivo->getClientOriginalName();
            $archivo->move(public_path() . '/images/', $name);
            $adultoUpdate->anexofoto = $name;
        }

        if ($request->hasFile('fcedula')) {
            if (is_null($adultoUpdate->anexocedula)) {
                var_dump(is_null($adultoUpdate->anexocedula));
            } else {
                $image_path2 = public_path() . "/pdfs/$adultoUpdate->anexocedula";
                unlink($image_path2);
            }

            $archivo2 = $request->file('fcedula');
            $name2 = time() . $archivo2->getClientOriginalName();
            $archivo2->move(public_path() . '/pdfs/', $name2);
            $adultoUpdate->anexocedula = $name2;
        }

        if ($request->hasFile('fhistoria')) {
            if (is_null($adultoUpdate->anexohistoriaclinica)) {
                var_dump(is_null($adultoUpdate->anexohistoriaclinica));
            } else {
                $image_path3 = public_path() . "/pdfs/$adultoUpdate->anexohistoriaclinica";
                unlink($image_path3);
            }



            $archivo3 = $request->file('fhistoria');
            $name3 = time() . $archivo3->getClientOriginalName();
            $archivo3->move(public_path() . '/pdfs/', $name3);
            $adultoUpdate->anexohistoriaclinica = $name3;
        }

        if ($request->hasFile('fdeclaracion')) {
            if (is_null($adultoUpdate->anexodeclaracionconsentimiento)) {
                var_dump(is_null($adultoUpdate->anexodeclaracionconsentimiento));
            } else {
                $image_path4 = public_path() . "/pdfs/$adultoUpdate->anexodeclaracionconsentimiento";
                unlink($image_path4);
            }



            $archivo4 = $request->file('fdeclaracion');
            $name4 = time() . $archivo4->getClientOriginalName();
            $archivo4->move(public_path() . '/pdfs/', $name4);
            $adultoUpdate->anexodeclaracionconsentimiento = $name4;
        }

        if ($request->hasFile('feps')) {
            if (is_null($adultoUpdate->anexocertificacioneps)) {
                var_dump(is_null($adultoUpdate->anexocertificacioneps));
            } else {
                $image_path5 = public_path() . "/pdfs/$adultoUpdate->anexocertificacioneps";
                unlink($image_path5);
            }


            $archivo5 = $request->file('feps');
            $name5 = time() . $archivo5->getClientOriginalName();
            $archivo5->move(public_path() . '/pdfs/', $name5);
            $adultoUpdate->anexocertificacioneps = $name5;
        }

        if ($request->hasFile('fpuntaje')) {
            if (is_null($adultoUpdate->anexopuntajesisben)) {
                var_dump(is_null($adultoUpdate->anexopuntajesisben));
            } else {
                $image_path6 = public_path() . "/pdfs/$adultoUpdate->anexopuntajesisben";
                unlink($image_path6);
            }


            $archivo6 = $request->file('fpuntaje');
            $name6 = time() . $archivo6->getClientOriginalName();
            $archivo6->move(public_path() . '/pdfs/', $name6);
            $adultoUpdate->anexopuntajesisben = $name6;
        }
        if ($request->hasFile('fdisentimiento')) {
            if (is_null($adultoUpdate->anexodisentimientoinformado)) {
                var_dump(is_null($adultoUpdate->anexodisentimientoinformado));
            } else {
                $image_path7 = public_path() . "/pdfs/$adultoUpdate->anexodisentimientoinformado";
                unlink($image_path7);
            }



            $archivo7 = $request->file('fdisentimiento');
            $name7 = time() . $archivo7->getClientOriginalName();
            $archivo7->move(public_path() . '/pdfs/', $name7);
            $adultoUpdate->anexodisentimientoinformado = $name7;
        }



        $adultoUpdate->fechaNacimiento = $request->fechan;
        $adultoUpdate->edad = $request->edad;
        $adultoUpdate->genero = $request->genero;
        $adultoUpdate->estado = $request->estado;
        $adultoUpdate->discapacidad = $request->discapacidad;
        $adultoUpdate->puntajes = $request->puntajes;
        $adultoUpdate->nivelsisben = $request->nsisben;
        $adultoUpdate->sangre_id = $request->sangre;
        $adultoUpdate->zona_id = $request->zona;
        $adultoUpdate->eps_id = $request->epsa;
        $adultoUpdate->regimen_id = $request->regimen;
        $adultoUpdate->acudiente_id = $request->acudiente;

        $adultoUpdate->save();
        return back()->with('success', '¡Actualización exitosa!');
    }

    public function updatepermisos(Request $request, $id)
    { }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Personas  $personas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Personas $personas)
    {
        //
    }
}
