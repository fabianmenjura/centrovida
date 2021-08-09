@extends('layouts.plantilla')
@section('content')

<!-- page content -->
<div class="right_col" role="main">
    <form action="{{route('storeen')}}" method="POST">
        @csrf
        <div class="">
            <div class="row">
                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel card border-info">
                        <div class="x_title">
                            <h2 class="card-header bg-info mb-0 text-white alert-heading">ENFERMERÍA<small></small></h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up "></i></a>
                                </li>

                                <li><a><i class="fas fa-capsules"></i></a>
                                </li>
                            </ul>

                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            </p>Para realizar una nueva valoración, el adulto mayor debe estar previamente registrado.
                            </p>
                            <h4>Por favor seleccione el adulto mayor:</h4>

                            <hr>
                            <div class="form-group col-md-12">

                                <select id="adulto" class="form-control" name="adulto">
                                    @foreach ($adultos as $adultos)
                                    {{$a=$adultos->persona->nombre}}
                                    {{$b=$adultos->persona->apellido}}
                                    {{$c=$adultos->persona->id}}
                                    {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                                    <option value="{{$adultos['id']}}">{{($concat)}}</option>
                                    @endforeach
                                </select>
                                <hr>
                            </div>
                            <br />

                            <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                                <div class="form-group row"></div>

                                <div class="x_title">
                                    <h2 class="font-weight-bold">Antecedentes de salud<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Patológicos <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta1" id="pregunta1" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Farmacológicos <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta2" id="pregunta2" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Quirúrgicos <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta3" id="pregunta3" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Hospitalarios <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta4" id="pregunta4" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Toxicoalérgicos <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta5" id="pregunta5" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Traumatológicos: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta6" id="pregunta6" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Ginecológicos: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta7" id="pregunta7" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Familiares: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta8" id="pregunta8" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Ayudas técnicas y dispositivos
                                        electrónicos<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Prótesis dental
                                        </p>

                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Gafas
                                        </p>

                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Audífono auditivo
                                        </p>

                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Marcapasos
                                        </p>

                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Bastón
                                        </p>

                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Muletas
                                        </p>

                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Caminador
                                        </p>

                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">Silla de ruedas
                                        </p>

                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>

                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Otro?:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta17" id="pregunta17"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Signos vitales<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">T.A:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta18" id="pregunta18" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">FC:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta19" id="pregunta19" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">FR:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta20" id="pregunta20" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">T°:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta21" id="pregunta21" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">SATO2:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta22" id="pregunta22" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Tamizaje nutricional<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Peso:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta23" id="pregunta23" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Talla:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta24" id="pregunta24" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">IMC:
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta25" id="pregunta25" required="required"
                                            class="form-control ">
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Valoración por sistemas<small>
                                            Cardiovascular-respiratorio-osteoarticular</small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">¿Presenta
                                            fatiga?</label>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <select id="pregunta26" class="form-control" name="pregunta26">
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" name="pregunta27" id="pregunta27"
                                                        class="form-control" placeholder="¿Con qué actividad?">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">¿Presenta
                                            tos?</label>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <select id="pregunta28" class="form-control" name="pregunta28">
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" name="pregunta29" id="pregunta29"
                                                        class="form-control" placeholder="Características">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-md-2 col-sm-2 label-align">¿Presenta dolor en
                                            el tórax?</label>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <select id="pregunta30" class="form-control" name="pregunta30">
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-10">
                                                    <input type="text" name="pregunta31" id="pregunta31"
                                                        class="form-control"
                                                        placeholder="¿Qué factores precipitan el dolor?">
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="col-md-10 ml-auto">
                                                    <div class="form-group">
                                                        <br>
                                                        <input type="text" name="pregunta32" id="pregunta32"
                                                            class="form-control"
                                                            placeholder="¿Cómo describiría usted el dolor?">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-md-10 ml-auto">
                                                    <div class="form-group">

                                                        <input type="text" name="pregunta33" id="pregunta33"
                                                            class="form-control"
                                                            placeholder="¿Cuándo comenzó el dolor?">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha notado algún cambio
                                        en sus piernas?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta34" class="form-control" name="pregunta34">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <h4 class="card-title">¿Cuál?</h4>
                                <div class="row">

                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Frialdad</label>
                                        <select id="pregunta35" class="form-control" name="pregunta35">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Entumecimiento</label>
                                        <select id="pregunta36" class="form-control" name="pregunta36">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Enrojecimiento</label>
                                        <select id="pregunta37" class="form-control" name="pregunta37">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Calor</label>
                                        <select id="pregunta38" class="form-control" name="pregunta38">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="exampleInputEmail1">Ardor</label>
                                        <select id="pregunta39" class="form-control" name="pregunta39">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>

                                </div>
                                <div class="ln_solid"></div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Tiene dificultad para
                                        realizar alguna actividad?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta40" class="form-control" name="pregunta40">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Usted realiza algún
                                        tipo de actividad física?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta41" class="form-control" name="pregunta41">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"><br></div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align ">¿Usted o algún miembro
                                        de la familia tiene hábitos tóxicos?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta42" class="form-control" name="pregunta42">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>


                                <h4 class="card-title">¿Cuál?</h4>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Tabaco</label>
                                        <select id="pregunta43" class="form-control" name="pregunta43">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Alcohol</label>
                                        <select id="pregunta44" class="form-control" name="pregunta44">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Drogas</label>
                                        <select id="pregunta45" class="form-control" name="pregunta45">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"><br></div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Usted ha cocinado o
                                        cocina con leña?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta46" class="form-control" name="pregunta46">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Coloración de la piel: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" name="pregunta47" id="pregunta47" required="required"
                                            class="form-control ">
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">¿Presenta disnea?</label>
                                        <select id="pregunta51" class="form-control" name="pregunta51">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="exampleInputEmail1">Oxigenoterapia</label>
                                        <select id="pregunta52" class="form-control" name="pregunta52">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="ln_solid"><br></div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-form-label col-md-2 col-sm-5 label-align">¿Presenta
                                            edemas?</label>
                                        <div class="col-lg-10">
                                            <div class="row">
                                                <div class="col-md-2">
                                                    <select id="pregunta58" class="form-control" name="pregunta58">
                                                        <option value="Si">Si</option>
                                                        <option value="No">No</option>

                                                    </select>
                                                </div>
                                                <div class="col-md-6">
                                                    <input type="text" name="pregunta59" id="pregunta59"
                                                        class="form-control" placeholder="Ubicación">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ln_solid"><br></div>
                                <div class="row">
                                    <br>
                                    <h4 class="card-title font-weight-bold">Nivel de actividad física</h4>
                                    <br>
                                    <h4 class="form-group col-md-12 font-weight-bold"></h4>

                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">En cama</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta60" class="form-control" name="pregunta60">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">En silla</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta61" class="form-control" name="pregunta61">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Deambulación frecuente</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta62" class="form-control" name="pregunta62">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Deambulación ocasional</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta63" class="form-control" name="pregunta63">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="divider-dashed"></div>
                                    <h4 class="card-title font-weight-bold">Nivel de movilidad</h4>
                                    <br>
                                    <h4 class="form-group col-md-12 font-weight-bold"></h4>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Completamente móvil</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta64" class="form-control" name="pregunta64">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Completamente inmóvil</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta65" class="form-control" name="pregunta65">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Muy limitado</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta66" class="form-control" name="pregunta66">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Ligeramente limitado</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta67" class="form-control" name="pregunta67">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="divider-dashed"></div>
                                    <h4 class="card-title font-weight-bold">Marcha</h4>
                                    <br>
                                    <h4 class="form-group col-md-12 font-weight-bold"></h4>
                                    <br>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Estable</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta68" class="form-control" name="pregunta68">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="exampleInputEmail1">Alterada</label>
                                        <div class="col-md-8 col-sm-6 ">
                                            <select id="pregunta69" class="form-control" name="pregunta69">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>

                                </div>

                                <div class="item form-group">
                                    <br>
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta70" id="pregunta70"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Digestivo-piel<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿Qué
                                        alimentos consume habitualmente?<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta71" id="pregunta71"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Hay algún alimento que
                                        le haga daño?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta72" class="form-control" name="pregunta72">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿Cual?
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta73" id="pregunta73"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿En los últimos días ha
                                        cambiado su apetito?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta74" class="form-control" name="pregunta74">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha presentado cambios
                                        en el peso?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta75" class="form-control" name="pregunta75">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha presentado tos al
                                        momento de ingerir alimentos sólidos o
                                        líquidos?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta76" class="form-control" name="pregunta76">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Siente dolor al pasar
                                        los alimentos?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta77" class="form-control" name="pregunta77">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Integridad de la dentadura<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta83" class="form-control" name="pregunta83">
                                            <option value="Completa">Completa</option>
                                            <option value="Anodoncia parcial">Anodoncia parcial</option>
                                            <option value="Anodoncia total">Anodoncia total</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Características de la piel: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta81" id="pregunta81"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Características de las mucosas: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta82" id="pregunta82"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>

                                <div class="ln_solid"><br></div>

                                <div class="divider-dashed"></div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Vía de
                                        administración <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta92" id="pregunta92"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Presenta alguna
                                        alteración gastrointestinal?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta93" class="form-control" name="pregunta93">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">¿Cual?<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta94" id="pregunta94"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones:<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta95" id="pregunta95"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Urinaria<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                <div class="row">
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Tiene alguna dificultad o dolor para orinar?
                                        </p>

                                        <input type="radio" name="pregunta96" id="pregunta96" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta96" id="pregunta96" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Se levanta durante la noche a orinar?
                                        </p>

                                        <input type="radio" name="pregunta97" id="pregunta97" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta97" id="pregunta97" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Presenta urgencia para ir a orinar?</p>

                                        <input type="radio" name="pregunta98" id="pregunta98" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta98" id="pregunta98" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Tiene incontinencia urinaria?</p>

                                        <input type="radio" name="pregunta99" id="pregunta99" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta99" id="pregunta99" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Utiliza Sonda Vesical?</p>

                                        <input type="radio" name="pregunta101" id="pregunta101" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta101" id="pregunta101" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Tiene dificultad para defecar?</p>

                                        <input type="radio" name="pregunta102" id="pregunta102" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta102" id="pregunta102" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Utiliza alguna ayuda para defecar?</p>

                                        <input type="radio" name="pregunta103" id="pregunta103" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta103" id="pregunta103" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <p class="font-weight-bold">¿Ha notado usted que suda frecuentemente?
                                        </p>

                                        <input type="radio" name="pregunta104" id="pregunta104" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta104" id="pregunta104" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>

                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿De qué
                                        color es su orina?<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control" name="pregunta100" id="pregunta100"
                                            required></input>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones:<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta105" id="pregunta105"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Sexual-reproductiva<small> Dependiendo del sexo use el
                                            formato correspondiente y omita el otro</small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>

                                <h3>Mujer</h3>

                                <div class="item form-group"> <br>
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Fecha
                                        de última citología *: <span class="required"></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="date" name="pregunta106" id="pregunta106" class="form-control"
                                            value="2020-01-01" required>
                                    </div>
                                </div>


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Presenta alguna
                                        secreción o hemorragia vaginal?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta109" class="form-control" name="pregunta109">
                                            <option value="No aplica">No aplica</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Características<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta110" id="pregunta110"
                                            aria-label="With textarea"></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Realiza autoexamen de
                                        Seno?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta111" class="form-control" name="pregunta111">
                                            <option value="No aplica">No aplica</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="divider-dashed"><br> </div>
                                <h3>Hombre</h3>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ya se realizó el examen
                                        de próstata?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta112" class="form-control" name="pregunta112">
                                            <option value="No aplica">No aplica</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Realiza el autoexamen
                                        de testículo?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta113" class="form-control" name="pregunta113">
                                            <option value="No aplica">No aplica</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha presentado dolor
                                        testicular?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta114" class="form-control" name="pregunta114">
                                            <option value="No aplica">No aplica</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Presenta alguna
                                        secreción?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta115" class="form-control" name="pregunta115">
                                            <option value="No aplica">No aplica</option>
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta116" id="pregunta116"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Neurológico y órganos de los sentidos<small></small>
                                    </h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Presenta problema en
                                        (ojos,oídos, gusto, tacto, olfato).<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta117" class="form-control" name="pregunta117">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">¿Cual?<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control" name="pregunta118" id="pregunta118"
                                            required></input>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha presentado alguna
                                        vez temblores o movimientos involuntarios?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta119" class="form-control" name="pregunta119">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Presenta algún tipo de
                                        dolor?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta120" class="form-control" name="pregunta120">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Tipo de
                                        dolor
                                        <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta121" id="pregunta121"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
                                        Localización del dolor<span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta122" id="pregunta122"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha tenido dolor de oído
                                        o sensación de oído lleno?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta123" class="form-control" name="pregunta123">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Ha sentido ruidos como
                                        pitidos o silbidos en el oído?<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta124" class="form-control" name="pregunta124">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="divider-dashed"><br> </div>
                                <h4 class="card-title font-weight-bold">Memoria</h4>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Inmediatos<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta125" class="form-control" name="pregunta125">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Recientes<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta126" class="form-control" name="pregunta126">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Remotos<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta127" class="form-control" name="pregunta127">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nivel
                                        de conciencia: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta128" id="pregunta128"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Orientación (tiempo, lugar y persona) <span
                                            class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta129" id="pregunta129"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Comprensión<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta130" class="form-control" name="pregunta130">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Agudeza
                                        Visual (tabla de snellen) <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <input type="text" class="form-control" name="pregunta131" id="pregunta131"
                                            required></input>
                                    </div>
                                </div>
                                <div class="divider-dashed"><br> </div>
                                <h4 class="card-title font-weight-bold">Lenguaje</h4>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Oral<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta132" class="form-control" name="pregunta132">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Escrito<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta133" class="form-control" name="pregunta133">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="divider-dashed"><br> </div>
                                <h4 class="card-title font-weight-bold">Sensibilidad</h4>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Superficial<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta134" class="form-control" name="pregunta134">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Profunda<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta135" class="form-control" name="pregunta135">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta136" id="pregunta136"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Manejo de salud<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <p class="font-weight-bold">¿Conoce sus enfermedades?
                                        </p>

                                        <input type="radio" name="pregunta137" id="pregunta137" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta137" id="pregunta137" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <p class="font-weight-bold">¿Sabe cuáles son sus complicaciones?
                                        </p>

                                        <input type="radio" name="pregunta138" id="pregunta138" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta138" id="pregunta138" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <p class="font-weight-bold">¿Está tomando medicamentos actualmente?
                                        </p>

                                        <input type="radio" name="pregunta139" id="pregunta139" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta139" id="pregunta139" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <p class="font-weight-bold">¿Toma medicamentos sin orden médica?
                                        </p>

                                        <input type="radio" name="pregunta140" id="pregunta140" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta140" id="pregunta140" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <p class="font-weight-bold">¿Utiliza remedios caseros y/o alternativos?
                                        </p>

                                        <input type="radio" name="pregunta141" id="pregunta141" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta141" id="pregunta141" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <p class="font-weight-bold">¿En los últimos 3 meses ha asistido a control
                                            médico?
                                        </p>

                                        <input type="radio" name="pregunta142" id="pregunta142" class="form-input"
                                            value="Si" required /> Si <br>
                                        <input type="radio" name="pregunta142" id="pregunta142" class="form-input"
                                            value="No" required /> No <br>
                                        <br>
                                    </div>
                                </div>
                                <div class="divider-dashed"><br> </div>


                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-8 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta147" id="pregunta147"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>

                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Sueño y descanso<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Cuántas horas duerme?<span></span>
                                    </label>
                                    <div class="col-md-2 col-sm-6 ">

                                        <select id="pregunta148" class="form-control" name="pregunta148">
                                            <option value="1 hora">1 hora</option>
                                            <option value="2 horas">2 horas</option>
                                            <option value="3 horas">3 horas</option>
                                            <option value="4 horas">4 horas</option>
                                            <option value="5 horas">5 horas</option>
                                            <option value="6 horas">6 horas</option>
                                            <option value="7 horas">7 horas</option>
                                            <option value="8 horas">8 horas</option>
                                            <option value="9 horas">9 horas</option>
                                            <option value="10 horas">10 horas</option>
                                            <option value="11 horas">11 horas</option>
                                            <option value="12 horas">12 horas</option>
                                            <option value="13 horas">13 horas</option>
                                            <option value="14 horas">14 horas</option>
                                            <option value="15 horas">15 horas</option>
                                            <option value="16 horas">16 horas</option>
                                            <option value="17 horas">17 horas</option>
                                            <option value="18 horas">18 horas</option>
                                            <option value="19 horas">19 horas</option>
                                            <option value="20 horas">20 horas</option>
                                            <option value="21 horas">21 horas</option>
                                            <option value="22 horas">22 horas</option>
                                            <option value="23 horas">23 horas</option>
                                            <option value="24 horas">24 horas</option>
                                              </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Utiliza alguna
                                        ayuda para poder dormir<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta149" class="form-control" name="pregunta149">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Sufre de
                                        insomnio<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta150" class="form-control" name="pregunta150">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿Qué
                                        hace en su tiempo libre? <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta151" id="pregunta151"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="divider-dashed"><br> </div>

                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones: <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta156" id="pregunta156"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div><br></div>
                                <div class="form-group row"></div>
                                <div class="ln_solid"></div>
                                <div class="x_title">
                                    <h2 class="font-weight-bold">Esquema de vacunación<small></small></h2>

                                    <div class="clearfix"></div>
                                </div>
                                <p class="text-danger">Campos obligatorios (*)</p>
                                </p>Influenza Estacional</p>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Anual<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta157" class="form-control" name="pregunta157">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                </p>Neumococo 23</p>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-2 label-align">Entre 60 y 64
                                        requieren 2 dosis a los 5 años de la primera dosis y Después de los 65
                                        dosis única.<span></span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">

                                        <select id="pregunta158" class="form-control" name="pregunta158">
                                            <option value="Si">Si</option>
                                            <option value="No">No</option>

                                        </select>
                                    </div>
                                </div>
                                <div class="item form-group">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align"
                                        for="first-name">Observaciones <span class="required">*</span>
                                    </label>
                                    <div class="col-md-6 col-sm-6 ">
                                        <textarea type="text" class="form-control" name="pregunta159" id="pregunta159"
                                            aria-label="With textarea" required></textarea>
                                    </div>
                                </div>
                                <div class="ln_solid"></div>
                                <div class="item form-group">
                                    <div class="col-md-11 col-sm-9  offset-md-1">
                                        <button type="submit" class="btn btn-success col-md-10 btn-round"><i
                                                class="fa fa-floppy-o"></i> Guardar</button>
                                        <button
                                            class="btn waves-effect col-md-1 waves-light btn-round btn-outline-light"
                                            type="reset"><i class="fas fa-paint-brush"></i></button>
                                    </div>
                                </div>

                                @if (session('agregar'))
                                <div class="alert alert-succes mt-3">
                                    {{session('agregar')}}
                                </div>
                                @endif
                            </form>
    </form>
</div>
<!-- /page content -->



@endsection
