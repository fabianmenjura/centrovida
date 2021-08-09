<?php

namespace App\Http\Controllers;

use App\psicosocial2;
use Illuminate\Http\Request;
use App\AdultosMayores;

class Psicosocial2Controller extends Controller
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
        $instrumentoAgregar = new psicosocial2();

        $request->validate(
            [
                'pregunta12' => 'required',

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

        if ($request->pregunta1=="Normal") {
            $contador = +0;
         } else if ($request->pregunta1=="Con dificultad"){
            $contador = +1;
         } else if ($request->pregunta1=="Necesita ayuda"){
            $contador = +2;
         } else {
            $contador = +3;
         }
         $contador = $contador;
         if ($request->pregunta2=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta2=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta2=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta3=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta3=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta3=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta4=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta4=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta4=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta5=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta5=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta5=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta6=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta6=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta6=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta7=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta7=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta7=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta8=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta8=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta8=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta9=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta9=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta9=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta10=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta10=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta10=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($request->pregunta11=="Normal") {
            $contador = $contador+0;
         } else if ($request->pregunta11=="Con dificultad"){
            $contador = $contador+1;
         } else if ($request->pregunta11=="Necesita ayuda"){
            $contador = $contador+2;
         } else {
            $contador = $contador+3;
         }
         if ($contador<6) {
            $resultadop="Normalidad";
         } else {
            $resultadop="Alteracion Funcional";
         }
         $instrumentoAgregar->pregunta13 = $resultadop;
        $instrumentoAgregar->save();

        return back()->with('success', '¡Registro exitoso!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\psicosocial2  $psicosocial2
     * @return \Illuminate\Http\Response
     */
    public function show(psicosocial2 $psicosocial2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\psicosocial2  $psicosocial2
     * @return \Illuminate\Http\Response
     */
    public function edit(psicosocial2 $psicosocial2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\psicosocial2  $psicosocial2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, psicosocial2 $psicosocial2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\psicosocial2  $psicosocial2
     * @return \Illuminate\Http\Response
     */
    public function destroy(psicosocial2 $psicosocial2)
    {
        //
    }
}
