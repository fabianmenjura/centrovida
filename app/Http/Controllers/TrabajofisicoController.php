<?php

namespace App\Http\Controllers;

use App\trabajofisico;
use Illuminate\Http\Request;
use App\AdultosMayores;

class TrabajofisicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'actividadfisica']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoraciontrabajofisico', compact('adultos'));
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
        $request->user()->authorizeRoles(['admin', 'actividadfisica']);
        $instrumentoAgregar = new trabajofisico();

        $request->validate(
            [
                'pregunta21' => 'required',

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
        $instrumentoAgregar->pregunta17 = $request->pregunta17;
        $instrumentoAgregar->pregunta18 = $request->pregunta18;
        $instrumentoAgregar->pregunta19 = $request->pregunta19;
        $instrumentoAgregar->pregunta20 = $request->pregunta20;
        $instrumentoAgregar->pregunta21 = $request->pregunta21;



        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trabajofisico  $trabajofisico
     * @return \Illuminate\Http\Response
     */
    public function show(trabajofisico $trabajofisico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trabajofisico  $trabajofisico
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajofisico $trabajofisico)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trabajofisico  $trabajofisico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trabajofisico $trabajofisico)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trabajofisico  $trabajofisico
     * @return \Illuminate\Http\Response
     */
    public function destroy(trabajofisico $trabajofisico)
    {
        //
    }
}
