<?php

namespace App\Http\Controllers;

use App\psicosocial4;
use Illuminate\Http\Request;

class Psicosocial4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $instrumentoAgregar = new Psicosocial4();

        $request->validate(
            [
                'pregunta23' => 'required',

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
        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\psicosocial4  $psicosocial4
     * @return \Illuminate\Http\Response
     */
    public function show(psicosocial4 $psicosocial4)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\psicosocial4  $psicosocial4
     * @return \Illuminate\Http\Response
     */
    public function edit(psicosocial4 $psicosocial4)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\psicosocial4  $psicosocial4
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, psicosocial4 $psicosocial4)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\psicosocial4  $psicosocial4
     * @return \Illuminate\Http\Response
     */
    public function destroy(psicosocial4 $psicosocial4)
    {
        //
    }
}
