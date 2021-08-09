<?php

namespace App\Http\Controllers;

use App\nutricion;
use Illuminate\Http\Request;
use App\AdultosMayores;

class NutricionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'nutricion']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionnutricion', compact('adultos'));
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
        $request->user()->authorizeRoles(['admin', 'nutricion']);
        $instrumentoAgregar = new nutricion();

        $request->validate(
            [
                'pregunta1' => 'required',
                'pregunta2' => 'required',
                'pregunta3' => 'required',
                'pregunta4' => 'required',
                'pregunta5' => 'required',
                'pregunta6' => 'required',
                'pregunta8' => 'required',
                'pregunta9' => 'required',
                'pregunta10' => 'required'
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
        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function show(nutricion $nutricion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function edit(nutricion $nutricion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, nutricion $nutricion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\nutricion  $nutricion
     * @return \Illuminate\Http\Response
     */
    public function destroy(nutricion $nutricion)
    {
        //
    }
}
