@extends('layouts.plantilla')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <form action="{{route('storetbsocial')}}" method="POST">
        @csrf
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel card border-info">
                        <div class="x_title">
                            <h2 class="card-header bg-info mb-0 text-white alert-heading">TRABAJO SOCIAL <small></small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a><i class="fas fa-briefcase"></i></a>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <p>Para realizar una nueva valoración, el adulto mayor debe estar previamente registrado.
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
                            <!-- Tabs -->
                            <div id="wizard_verticle" class="form_wizard wizard_verticle">
                                <ul class="list-unstyled wizard_steps">
                                    <li>
                                        <a href="#step-1">
                                            <span class="step_no">1</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-2">
                                            <span class="step_no">2</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-3">
                                            <span class="step_no">3</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-4">
                                            <span class="step_no">4</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-5">
                                            <span class="step_no">5</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-6">
                                            <span class="step_no">6</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-7">
                                            <span class="step_no">7</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#step-8">
                                            <span class="step_no">8</span>
                                        </a>
                                    </li>
                                </ul>

                                <div id="step-1">
                                    <h2 class="StepTitle">Sección 1</h2>
                                    <span class="section">Datos de identificación</span>


                                    <div class="item form-group">
                                        <label class="col-form-label col-md-4 col-sm-2 label-align">Condición
                                            Laboral</label>
                                        <select id="pregunta1" class="form-control" name="pregunta1">
                                            <option value="Empleado">Empleado</option>
                                            <option value="Desempleado">Desempleado</option>
                                            <option value="Pensionado">Pensionado</option>
                                        </select>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-4 col-sm-2 label-align">¿A que se dedica
                                            actualmente?</label>
                                        <input type="text" class="form-control" name="pregunta2" id="pregunta2"
                                            required></input>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-4 col-sm-2 label-align">¿Es usuario de algun
                                            subsidio?</label>
                                        <input type="text" class="form-control" name="pregunta3" id="pregunta3"
                                            required></input>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-4 col-sm-2 label-align">Ingresos
                                            promedios</label>
                                        <input type="text" class="form-control" name="pregunta4" id="pregunta4"
                                            required></input>
                                    </div>
                                </div>


                                <div id="step-2">
                                    <h2 class="StepTitle">Sección 2</h2>

                                    <span class="section">Condiciones habitacionales</span>
                                    <div class="item form-group">

                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Tipo de
                                            vivienda<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta5" class="form-control" name="pregunta5">
                                                <option value="Casa">Casa</option>
                                                <option value="Apartamento">Apartamento</option>
                                                <option value="Casa Lote">Casa Lote</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Ocupación<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta6" class="form-control" name="pregunta6">
                                                <option value="Independiente">Independiente</option>
                                                <option value="Dependiente">Dependiente</option>
                                                <option value="Inquilinato">Inquilinato</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Presentación
                                            externa<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta7" class="form-control" name="pregunta7">
                                                <option value="Buena">Buena</option>
                                                <option value="Aceptable">Aceptable</option>
                                                <option value="Mala">Mala</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Presentación
                                            interna<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta8" class="form-control" name="pregunta8">
                                                <option value="Buena">Buena</option>
                                                <option value="Aceptable">Aceptable</option>
                                                <option value="Mala">Mala</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Servicios
                                            publicos instalados <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta9" id="pregunta9"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>

                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Estado de la
                                            vivienda<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta10" class="form-control" name="pregunta10">
                                                <option value="Terminada">Terminada</option>
                                                <option value="En Construcción">En Construcción</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Ubicación<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta11" class="form-control" name="pregunta11">
                                                <option value="Residencial">Residencial</option>
                                                <option value="Comercial">Comercial</option>
                                                <option value="Rural">Rural</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-3">
                                    <h2 class="StepTitle">Sección 3</h2>


                                    <span class="section">Distribución de la vivienda
                                    </span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No.
                                            de
                                            Alcobas<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta12" id="pregunta12"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No.
                                            de
                                            baños<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta13" id="pregunta13"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">No.
                                            de
                                            Cocinas<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta14" id="pregunta14"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Ambiente del
                                            sector<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta15" class="form-control" name="pregunta15">
                                                <option value="Buena">Bueno</option>
                                                <option value="Aceptable">Regular</option>
                                                <option value="Mala">Malo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Vías de
                                            Acceso<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta16" class="form-control" name="pregunta16">
                                                <option value="Buena">Bueno</option>
                                                <option value="Aceptable">Regular</option>
                                                <option value="Mala">Malo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Aseo y
                                            orden<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta17" class="form-control" name="pregunta17">
                                                <option value="Buena">Bueno</option>
                                                <option value="Aceptable">Regular</option>
                                                <option value="Mala">Malo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Dotación<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta18" class="form-control" name="pregunta18">
                                                <option value="Buena">Bueno</option>
                                                <option value="Aceptable">Regular</option>
                                                <option value="Mala">Malo</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Tenencia<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta19" class="form-control" name="pregunta19">
                                                <option value="Arrendada">Arrendada</option>
                                                <option value="Propia">Propia</option>
                                                <option value="Familiar">Familiar</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Estrato<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta20" class="form-control" name="pregunta20">
                                                <option value="1-2">1-2</option>
                                                <option value="3-4">3-4</option>
                                                <option value="5-6">5-6</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">La vivienda es
                                            propia<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta21" class="form-control" name="pregunta21">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Hace cuanto
                                            reside en ella? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta22" id="pregunta22"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Tiene
                                            hipoteca<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta23" class="form-control" name="pregunta23">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Valor de la
                                            hipoteca<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta24"
                                                id="pregunta24"></input>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-4">
                                    <h2 class="StepTitle">Sección 4</h2>

                                    <span class="section">Información económica</span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Posee
                                            ingresos?<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta25" class="form-control" name="pregunta25">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Valor total de
                                            los ingresos<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta26" id="pregunta26"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Posee
                                            egresos<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta27" class="form-control" name="pregunta27">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Valor total de
                                            los egresos<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta28" id="pregunta28"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-5">
                                    <h2 class="StepTitle">Sección 5</h2>

                                    <span class="section">Situación médica</span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Frecuencia con
                                            la que asiste al médico<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta29" id="pregunta29"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Dónde lo
                                            atienden? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta30" id="pregunta30"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Podría
                                            mencionar si tiene alguna enfermedad?<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta31" id="pregunta31"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Presenta algún
                                            tipo de discapacidad?<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta32" id="pregunta32"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-6">
                                    <h2 class="StepTitle">Sección 6</h2>

                                    <span class="section">Alimentación <br /><small>¿Con que frecuencia come los
                                            siguientes
                                            alimentos?</small></span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Pollo<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta33" id="pregunta33"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Carne de Res
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta34" id="pregunta34"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Cerdo<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta35" id="pregunta35"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Pescado <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta36" id="pregunta36"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Leche<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta37" id="pregunta37"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Verduras<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta38" id="pregunta38"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Huevo <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta39" id="pregunta39"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Frutas <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta40" id="pregunta40"
                                                required></input>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">
                                            Cereales<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <input type="text" class="form-control" name="pregunta41" id="pregunta41"
                                                required></input>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-7">
                                    <h2 class="StepTitle">Sección 7</h2>

                                    <span class="section">Red relacional, recreación y uso del tiempo libre
                                        familiar</span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Qué hace en su
                                            tiempo libre? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta42" id="pregunta42"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Con quién se
                                            relaciona? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta43" id="pregunta43"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Qué tipo de
                                            actividades le gusta?<span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta44" id="pregunta44"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Alguna
                                            actividad que desee hacer, pero puede? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta45" id="pregunta45"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div id="step-8">
                                    <h2 class="StepTitle">Sección 8</h2>

                                    <span class="section">Problemas sociales</span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Violencia
                                            intrafamiliar<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta46" class="form-control" name="pregunta46">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Delincuencia<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta47" class="form-control" name="pregunta47">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Alcoholismo<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta48" class="form-control" name="pregunta48">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Discriminación<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta49" class="form-control" name="pregunta49">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Adicciones<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta50" class="form-control" name="pregunta50">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Analfabetismo<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta51" class="form-control" name="pregunta51">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Pobreza<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta52" class="form-control" name="pregunta52">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label
                                            class="col-form-label col-md-3 col-sm-2 label-align">Desempleo<span></span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">

                                            <select id="pregunta53" class="form-control" name="pregunta53">
                                                <option value="Si">Si</option>
                                                <option value="No">No</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">¿Cuánto tiempo
                                            vive en el domicilio actual? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta54" id="pregunta54"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">¿Es
                                            beneficiario de algún programa social? <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta55" id="pregunta55"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align"
                                            for="first-name">Observaciones:
                                            <span class="required">*</span>
                                        </label>
                                        <div class="col-md-6 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta56" id="pregunta56"
                                                aria-label="With textarea" required></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="col-md-11 col-sm-9  offset-md-1">
                                            <button type="submit" class="btn btn-success col-md-10 btn-round"><i
                                                    class="fa fa-floppy-o"></i> Guardar valoración</button>
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
                                </div>
                            </div>
                            <!-- End SmartWizard Content -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
<!-- /page content -->

@endsection
