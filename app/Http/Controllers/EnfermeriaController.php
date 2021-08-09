<?php

namespace App\Http\Controllers;

use App\enfermeria;
use Illuminate\Http\Request;
use App\AdultosMayores;

class EnfermeriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request->user()->authorizeRoles(['admin', 'enfermeria']);
        $adultos = AdultosMayores::all();
        return view('layouts.valoracionenfermeria', compact('adultos'));
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
        $request->user()->authorizeRoles(['admin', 'enfermeria']);
        $instrumentoAgregar = new enfermeria();

        $request->validate(
            [
                'pregunta159' => 'required',


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
        $instrumentoAgregar->pregunta57 = $request->pregunta57;
        $instrumentoAgregar->pregunta58 = $request->pregunta58;
        $instrumentoAgregar->pregunta59 = $request->pregunta59;
        $instrumentoAgregar->pregunta60 = $request->pregunta60;
        $instrumentoAgregar->pregunta61 = $request->pregunta61;
        $instrumentoAgregar->pregunta62 = $request->pregunta62;
        $instrumentoAgregar->pregunta63 = $request->pregunta63;
        $instrumentoAgregar->pregunta64 = $request->pregunta64;
        $instrumentoAgregar->pregunta65 = $request->pregunta65;
        $instrumentoAgregar->pregunta66 = $request->pregunta66;
        $instrumentoAgregar->pregunta67 = $request->pregunta67;
        $instrumentoAgregar->pregunta68 = $request->pregunta68;
        $instrumentoAgregar->pregunta69 = $request->pregunta69;
        $instrumentoAgregar->pregunta70 = $request->pregunta70;
        $instrumentoAgregar->pregunta71 = $request->pregunta71;
        $instrumentoAgregar->pregunta72 = $request->pregunta72;
        $instrumentoAgregar->pregunta73 = $request->pregunta73;
        $instrumentoAgregar->pregunta74 = $request->pregunta74;
        $instrumentoAgregar->pregunta75 = $request->pregunta75;
        $instrumentoAgregar->pregunta76 = $request->pregunta76;
        $instrumentoAgregar->pregunta77 = $request->pregunta77;
        $instrumentoAgregar->pregunta78 = $request->pregunta78;
        $instrumentoAgregar->pregunta79 = $request->pregunta79;
        $instrumentoAgregar->pregunta80 = $request->pregunta80;
        $instrumentoAgregar->pregunta81 = $request->pregunta81;
        $instrumentoAgregar->pregunta82 = $request->pregunta82;
        $instrumentoAgregar->pregunta83 = $request->pregunta83;
        $instrumentoAgregar->pregunta84 = $request->pregunta84;
        $instrumentoAgregar->pregunta85 = $request->pregunta85;
        $instrumentoAgregar->pregunta86 = $request->pregunta86;
        $instrumentoAgregar->pregunta87 = $request->pregunta87;
        $instrumentoAgregar->pregunta88 = $request->pregunta88;
        $instrumentoAgregar->pregunta89 = $request->pregunta89;
        $instrumentoAgregar->pregunta90 = $request->pregunta90;
        $instrumentoAgregar->pregunta91 = $request->pregunta91;
        $instrumentoAgregar->pregunta92 = $request->pregunta92;
        $instrumentoAgregar->pregunta93 = $request->pregunta93;
        $instrumentoAgregar->pregunta94 = $request->pregunta94;
        $instrumentoAgregar->pregunta95 = $request->pregunta95;
        $instrumentoAgregar->pregunta96 = $request->pregunta96;
        $instrumentoAgregar->pregunta97 = $request->pregunta97;
        $instrumentoAgregar->pregunta98 = $request->pregunta98;
        $instrumentoAgregar->pregunta99 = $request->pregunta99;
        $instrumentoAgregar->pregunta100 = $request->pregunta100;
        $instrumentoAgregar->pregunta101 = $request->pregunta101;
        $instrumentoAgregar->pregunta102 = $request->pregunta102;
        $instrumentoAgregar->pregunta103 = $request->pregunta103;
        $instrumentoAgregar->pregunta104 = $request->pregunta104;
        $instrumentoAgregar->pregunta105 = $request->pregunta105;
        $instrumentoAgregar->pregunta106 = $request->pregunta106;
        $instrumentoAgregar->pregunta107 = $request->pregunta107;
        $instrumentoAgregar->pregunta108 = $request->pregunta108;
        $instrumentoAgregar->pregunta109 = $request->pregunta109;
        $instrumentoAgregar->pregunta110 = $request->pregunta110;
        $instrumentoAgregar->pregunta111 = $request->pregunta111;
        $instrumentoAgregar->pregunta112 = $request->pregunta112;
        $instrumentoAgregar->pregunta113 = $request->pregunta113;
        $instrumentoAgregar->pregunta114 = $request->pregunta114;
        $instrumentoAgregar->pregunta115 = $request->pregunta115;
        $instrumentoAgregar->pregunta116 = $request->pregunta116;
        $instrumentoAgregar->pregunta117 = $request->pregunta117;
        $instrumentoAgregar->pregunta118 = $request->pregunta118;
        $instrumentoAgregar->pregunta119 = $request->pregunta119;
        $instrumentoAgregar->pregunta120 = $request->pregunta120;
        $instrumentoAgregar->pregunta121 = $request->pregunta121;
        $instrumentoAgregar->pregunta122 = $request->pregunta122;
        $instrumentoAgregar->pregunta123 = $request->pregunta123;
        $instrumentoAgregar->pregunta124 = $request->pregunta124;
        $instrumentoAgregar->pregunta125 = $request->pregunta125;
        $instrumentoAgregar->pregunta126 = $request->pregunta126;
        $instrumentoAgregar->pregunta127 = $request->pregunta127;
        $instrumentoAgregar->pregunta128 = $request->pregunta128;
        $instrumentoAgregar->pregunta129 = $request->pregunta129;
        $instrumentoAgregar->pregunta130 = $request->pregunta130;
        $instrumentoAgregar->pregunta131 = $request->pregunta131;
        $instrumentoAgregar->pregunta132 = $request->pregunta132;
        $instrumentoAgregar->pregunta133 = $request->pregunta133;
        $instrumentoAgregar->pregunta134 = $request->pregunta134;
        $instrumentoAgregar->pregunta135 = $request->pregunta135;
        $instrumentoAgregar->pregunta136 = $request->pregunta136;
        $instrumentoAgregar->pregunta137 = $request->pregunta137;
        $instrumentoAgregar->pregunta138 = $request->pregunta138;
        $instrumentoAgregar->pregunta139 = $request->pregunta139;
        $instrumentoAgregar->pregunta140 = $request->pregunta140;
        $instrumentoAgregar->pregunta141 = $request->pregunta141;
        $instrumentoAgregar->pregunta142 = $request->pregunta142;
        $instrumentoAgregar->pregunta143 = $request->pregunta143;
        $instrumentoAgregar->pregunta144 = $request->pregunta144;
        $instrumentoAgregar->pregunta145 = $request->pregunta145;
        $instrumentoAgregar->pregunta146 = $request->pregunta146;
        $instrumentoAgregar->pregunta147 = $request->pregunta147;
        $instrumentoAgregar->pregunta148 = $request->pregunta148;
        $instrumentoAgregar->pregunta149 = $request->pregunta149;
        $instrumentoAgregar->pregunta150 = $request->pregunta150;
        $instrumentoAgregar->pregunta151 = $request->pregunta151;
        $instrumentoAgregar->pregunta152 = $request->pregunta152;
        $instrumentoAgregar->pregunta153 = $request->pregunta153;
        $instrumentoAgregar->pregunta154 = $request->pregunta154;
        $instrumentoAgregar->pregunta155 = $request->pregunta155;
        $instrumentoAgregar->pregunta156 = $request->pregunta156;
        $instrumentoAgregar->pregunta157 = $request->pregunta157;
        $instrumentoAgregar->pregunta158 = $request->pregunta158;
        $instrumentoAgregar->pregunta159 = $request->pregunta159;

        $instrumentoAgregar->save();



        return back()->with('success', '¡Valoración guardada!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\enfermeria  $enfermeria
     * @return \Illuminate\Http\Response
     */
    public function show(enfermeria $enfermeria)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\enfermeria  $enfermeria
     * @return \Illuminate\Http\Response
     */
    public function edit(enfermeria $enfermeria)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\enfermeria  $enfermeria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, enfermeria $enfermeria)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\enfermeria  $enfermeria
     * @return \Illuminate\Http\Response
     */
    public function destroy(enfermeria $enfermeria)
    {
        //
    }
}
