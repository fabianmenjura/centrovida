<?php

namespace App\Http\Controllers;

use App\Psicosocial;
use Illuminate\Http\Request;
use App\AdultosMayores;
use App\psicosocial2;

class PsicosocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionpsico', compact('adultos'));
    }
    public function index2(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionpsico2', compact('adultos'));
    }
    public function index3(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionpsico3', compact('adultos'));
    }
    public function index4(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionpsico4', compact('adultos'));
    }
    public function index5(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'psicologia']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionpsico5', compact('adultos'));
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
        $request->user()->authorizeRoles(['admin', 'psicologia']);
        $instrumentoAgregar = new Psicosocial();

        $request->validate(
            [
                'pregunta16' => 'required',

            ]
        );

        $instrumentoAgregar->adulto_id = $request->adulto;
        $instrumentoAgregar->pregunta1 = $request->pregunta1;
        $instrumentoAgregar->pregunta2 = $request->pregunta2;
        $instrumentoAgregar->pregunta3 = $request->pregunta3;
        $instrumentoAgregar->pregunta4 = $request->pregunta4;
        $instrumentoAgregar->pregunta5 = $request->pregunta5;
        $instrumentoAgregar->pregunta6 = $request->pregunta6;
        $instrumentoAgregar->pregunta7 = $request->pregunta7;
        $instrumentoAgregar->pregunta8 = $request->pregunta8;
        $instrumentoAgregar->pregunta9 = $request->pregunta9;
        $instrumentoAgregar->pregunta10 = $request->pregunta10;
        $instrumentoAgregar->pregunta11 = $request->pregunta11;
        $instrumentoAgregar->pregunta12 = $request->pregunta12;
        $instrumentoAgregar->pregunta13 = $request->pregunta13;
        $instrumentoAgregar->pregunta14 = $request->pregunta14;
        $instrumentoAgregar->pregunta15 = $request->pregunta15;
        $instrumentoAgregar->pregunta16 = $request->pregunta16;
        
        if ($request->pregunta1=="Si") {
           $contador = +1;
        } else {
           $contador = 0;
        }
        $contador = $contador;
        if ($request->pregunta2=="Si") {
            $contador = $contador+1;
         } else {
            $contador = $contador;
         }
    
         if ($request->pregunta3=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta4=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta5=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta6=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta7=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta8=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta9=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta10=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta11=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta12=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta13=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }

         if ($request->pregunta14=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         if ($request->pregunta15=="Si") {
            $contador = $contador+1;
         } else {
            $contador =  $contador;
         }
         

         if ($contador<=10) {
            $resultadop="Normal";
         } else if($contador>10 and $contador<=14 ) {
            $resultadop="Depresion Moderada";
         } else {
            $resultadop="Depresion Severa";
         }
        $instrumentoAgregar->pregunta17 = $resultadop;
        $instrumentoAgregar->save();

        return back()->with('success', '¡Registro exitoso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Psicosocial  $psicosocial
     * @return \Illuminate\Http\Response
     */
    public function show(Psicosocial $psicosocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Psicosocial  $psicosocial
     * @return \Illuminate\Http\Response
     */
    public function edit(Psicosocial $psicosocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Psicosocial  $psicosocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Psicosocial $psicosocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Psicosocial  $psicosocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Psicosocial $psicosocial)
    {
        //
    }
}
