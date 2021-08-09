<?php

namespace App\Http\Controllers;

use App\trabajosocial;
use Illuminate\Http\Request;
use App\AdultosMayores;

class TrabajosocialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'trabajosocial']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoraciontrabajosocial', compact('adultos'));
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
        $request->user()->authorizeRoles(['admin', 'trabajosocial']);
        $instrumentoAgregar = new trabajosocial();

        $request->validate(
            [
                'pregunta56' => 'required',

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
        $instrumentoAgregar->pregunta22 = $request->pregunta22;
        $instrumentoAgregar->pregunta23 = $request->pregunta23;
        $instrumentoAgregar->pregunta24 = $request->pregunta24;
        $instrumentoAgregar->pregunta25 = $request->pregunta25;
        $instrumentoAgregar->pregunta26 = $request->pregunta26;
        $instrumentoAgregar->pregunta27 = $request->pregunta27;
        $instrumentoAgregar->pregunta28 = $request->pregunta28;
        $instrumentoAgregar->pregunta29 = $request->pregunta29;
        $instrumentoAgregar->pregunta30 = $request->pregunta30;
        $instrumentoAgregar->pregunta31 = $request->pregunta31;
        $instrumentoAgregar->pregunta32 = $request->pregunta32;
        $instrumentoAgregar->pregunta33 = $request->pregunta33;
        $instrumentoAgregar->pregunta34 = $request->pregunta34;
        $instrumentoAgregar->pregunta35 = $request->pregunta35;
        $instrumentoAgregar->pregunta36 = $request->pregunta36;
        $instrumentoAgregar->pregunta37 = $request->pregunta37;
        $instrumentoAgregar->pregunta38 = $request->pregunta38;
        $instrumentoAgregar->pregunta39 = $request->pregunta39;
        $instrumentoAgregar->pregunta40 = $request->pregunta40;
        $instrumentoAgregar->pregunta41 = $request->pregunta41;
        $instrumentoAgregar->pregunta42 = $request->pregunta42;
        $instrumentoAgregar->pregunta43 = $request->pregunta43;
        $instrumentoAgregar->pregunta44 = $request->pregunta44;
        $instrumentoAgregar->pregunta45 = $request->pregunta45;
        $instrumentoAgregar->pregunta46 = $request->pregunta46;
        $instrumentoAgregar->pregunta47 = $request->pregunta47;
        $instrumentoAgregar->pregunta48 = $request->pregunta48;
        $instrumentoAgregar->pregunta49 = $request->pregunta49;
        $instrumentoAgregar->pregunta50 = $request->pregunta50;
        $instrumentoAgregar->pregunta51 = $request->pregunta51;
        $instrumentoAgregar->pregunta52 = $request->pregunta52;
        $instrumentoAgregar->pregunta53 = $request->pregunta53;
        $instrumentoAgregar->pregunta54 = $request->pregunta54;
        $instrumentoAgregar->pregunta55 = $request->pregunta55;
        $instrumentoAgregar->pregunta56 = $request->pregunta56;


        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\trabajosocial  $trabajosocial
     * @return \Illuminate\Http\Response
     */
    public function show(trabajosocial $trabajosocial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\trabajosocial  $trabajosocial
     * @return \Illuminate\Http\Response
     */
    public function edit(trabajosocial $trabajosocial)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\trabajosocial  $trabajosocial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, trabajosocial $trabajosocial)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\trabajosocial  $trabajosocial
     * @return \Illuminate\Http\Response
     */
    public function destroy(trabajosocial $trabajosocial)
    {
        //
    }
}
