<?php

namespace App\Http\Controllers;

use App\Fonoaudiologia;
use Illuminate\Http\Request;
use App\AdultosMayores;

class FonoaudiologiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'fonoaudiologia']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionfono', compact('adultos'));
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
        $request->user()->authorizeRoles(['admin', 'fonoaudiologia']);
        $instrumentoAgregar = new Fonoaudiologia();

        $request->validate(
            [
                'pregunta1' => 'required',
                'pregunta2' => 'required',
                'pregunta3' => 'required',
                'pregunta4' => 'required',
                'pregunta28' => 'required',
                'pregunta29' => 'required',
                'pregunta30' => 'required',
                'pregunta31' => 'required'
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
        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Fonoaudiologia  $fonoaudiologia
     * @return \Illuminate\Http\Response
     */
    public function show(Fonoaudiologia $fonoaudiologia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fonoaudiologia  $fonoaudiologia
     * @return \Illuminate\Http\Response
     */
    public function edit(Fonoaudiologia $fonoaudiologia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fonoaudiologia  $fonoaudiologia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fonoaudiologia $fonoaudiologia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fonoaudiologia  $fonoaudiologia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fonoaudiologia $fonoaudiologia)
    {
        //
    }
}
