<?php

namespace App\Http\Controllers;

use App\psicosocial3;
use Illuminate\Http\Request;
use App\AdultosMayores;

class Psicosocial3Controller extends Controller
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
        $instrumentoAgregar = new Psicosocial3();

        $request->validate(
            [
                'pregunta10' => 'required',

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
        $instrumentoAgregar->save();

        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\psicosocial3  $psicosocial3
     * @return \Illuminate\Http\Response
     */
    public function show(psicosocial3 $psicosocial3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\psicosocial3  $psicosocial3
     * @return \Illuminate\Http\Response
     */
    public function edit(psicosocial3 $psicosocial3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\psicosocial3  $psicosocial3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, psicosocial3 $psicosocial3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\psicosocial3  $psicosocial3
     * @return \Illuminate\Http\Response
     */
    public function destroy(psicosocial3 $psicosocial3)
    {
        //
    }
}
