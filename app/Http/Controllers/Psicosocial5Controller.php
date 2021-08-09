<?php

namespace App\Http\Controllers;

use App\psicosocial5;
use Illuminate\Http\Request;
use App\AdultosMayores;

class Psicosocial5Controller extends Controller
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
        $instrumentoAgregar = new Psicosocial5();

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
        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\psicosocial5  $psicosocial5
     * @return \Illuminate\Http\Response
     */
    public function show(psicosocial5 $psicosocial5)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\psicosocial5  $psicosocial5
     * @return \Illuminate\Http\Response
     */
    public function edit(psicosocial5 $psicosocial5)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\psicosocial5  $psicosocial5
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, psicosocial5 $psicosocial5)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\psicosocial5  $psicosocial5
     * @return \Illuminate\Http\Response
     */
    public function destroy(psicosocial5 $psicosocial5)
    {
        //
    }
}
