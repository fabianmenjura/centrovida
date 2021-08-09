@extends('layouts.plantilla')
@section('content')
<!-- page content -->
<div class="right_col" role="main">
    <form action="{{route('storefisico')}}" method="POST">
        @csrf
        <div class="">

            <div class="clearfix"></div>

            <div class="row">

                <div class="col-md-12 col-sm-12 ">
                    <div class="x_panel card border-info">
                        <div class="x_title">
                            <h2 class="card-header bg-info mb-0 text-white alert-heading">ACTIVIDAD FÍSICA <small>Mini examen</small>
                            </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a><i class="fas fa-futbol-o"></i></a>
                                </li>
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
                            <div  id="wizard" class="form_wizard wizard_horizontal">
                                <ul class="wizard_steps">
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


                                </ul>

                                <div id="step-1">
                                    <h2 class="StepTitle">Sección 1</h2>
                                    <span class="section">TINETTI - EVALUACIÓN DE LA MARCHA <br/><small> El paciente permanece de pie con el examinador, camina por el pasillo o habitación (unos 8 metros) a paso normal.</small></span>
                                    <br/>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Iniciación de la marcha<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta1" class="form-control" name="pregunta1">
                                            <option value="Algunas vacilaciones o múltiples intentos para empezar">Algunas vacilaciones o múltiples intentos para empezar</option>
                                            <option value="No vacila">No vacila</option>
                                        </select>
                                      </div>
                                    </div>
                                    <h4 class="card-title"><br/>Longitud y altura de paso</h4>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Movimiento pie derecho<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta2" class="form-control" name="pregunta2">
                                            <option value="No sobrepasa al pie izquierdo con el paso">No sobrepasa al pie izquierdo con el paso</option>
                                            <option value="Sobrepasa al pie izquierdo">Sobrepasa al pie izquierdo</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Movimiento pie derecho<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta3" class="form-control" name="pregunta3">
                                            <option value="El pie derecho no se separa completamente del suelo con el paso">El pie derecho no se separa completamente del suelo con el paso</option>
                                            <option value=" El pie derecho se separa completamente del suelo"> El pie derecho se separa completamente del suelo</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Movimiento pie izquierdo<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta4" class="form-control" name="pregunta4">
                                            <option value="No sobrepasa al pie derecho con el paso">No sobrepasa al pie derecho con el paso</option>
                                            <option value="Sobrepasa al pie derecho">Sobrepasa al pie derecho</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Movimiento pie izquierdo<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta5" class="form-control" name="pregunta5">
                                            <option value="El pie izquierdo no se separa completamente del suelo con el paso"> El pie izquierdo no se separa completamente del suelo con el paso</option>
                                            <option value="El pie izquierdo se separa completamente del suelo">El pie izquierdo se separa completamente del suelo</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Simetría del paso<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta6" class="form-control" name="pregunta6">
                                            <option value="La longitud de los pasos con los pies izqd. y dcho. no es igual">La longitud de los pasos con los pies izqd. y dcho. no es igual</option>
                                            <option value="La longitud parece igual">La longitud parece igual</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Fluidez del paso<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta7" class="form-control" name="pregunta7">
                                            <option value="Paradas entre los pasos">Paradas entre los pasos</option>
                                            <option value="Los pasos parecen continuos">Los pasos parecen continuos</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Trayectoria (observar el trazado que realiza uno de los pies durante tres metros)<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta8" class="form-control" name="pregunta8">
                                            <option value="Desviación grave de la trayectoria">Desviación grave de la trayectoria</option>
                                            <option value="Leve/moderada desviación o usa ayudas para mantener la trayectoria">Leve/moderada desviación o usa ayudas para mantener la trayectoria</option>
                                            <option value="Sin desviación o uso de ayudas">Sin desviación o uso de ayudas</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Tronco<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta9" class="form-control" name="pregunta9">
                                            <option value="Balanceo marcado o uso de ayudas">Balanceo marcado o uso de ayudas</option>
                                            <option value="No se balancea al caminar, pero flexiona las rodillas o la espalda o separa los brazos al caminar">No se balancea al caminar, pero flexiona las rodillas o la espalda o separa los brazos al caminar</option>
                                            <option value="No se balancea ni flexiona ni usa ayudas al caminar">No se balancea ni flexiona ni usa ayudas al caminar</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Postura al caminar<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta10" class="form-control" name="pregunta10">
                                            <option value="Talones separados">Talones separados</option>
                                            <option value="Talones casi juntos al caminar">Talones casi juntos al caminar</option>
                                        </select>
                                      </div>
                                    </div>
                                </div>

                                <div id="step-2">
                                    <h2 class="StepTitle">Sección 2</h2>

                                    <span class="section">TINETTI - EVALUACIÓN DEL EQUILIBRIO<br/><small>El paciente está sentado en una silla rígida sin apoyabrazos. Se realizan las siguientes maniobras.</small></span>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Equilibrio sentado<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta11" class="form-control" name="pregunta11">
                                            <option value="Se inclina o desliza en la silla">Se inclina o desliza en la silla</option>
                                            <option value="Se mantiene seguro">Se mantiene seguro</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Levantarse<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta12" class="form-control" name="pregunta12">
                                            <option value="Incapaz sin ayuda">Incapaz sin ayuda</option>
                                            <option value="Capaz, pero usa los brazos para ayudarse">Capaz, pero usa los brazos para ayudarse</option>
                                            <option value="Capaz sin usar los brazos">Capaz sin usar los brazos</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Intentos para levantarse<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta13" class="form-control" name="pregunta13">
                                            <option value="Incapaz sin ayuda">Incapaz sin ayuda</option>
                                            <option value="Capaz, pero necesita más de un intento">Capaz, pero necesita más de un intento</option>
                                            <option value="Capaz de levantarse en un intento">Capaz de levantarse en un intento</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Equilibrio en bipedestación inmediata (los cinco primeros segundos)<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta14" class="form-control" name="pregunta14">
                                            <option value="Inestable (se tambalea, mueve los pies), marcado balanceo del tronco"> Inestable (se tambalea, mueve los pies), marcado balanceo del tronco</option>
                                            <option value="Estable, pero usa el andador, bastón o se agarra a otro objeto para mantenerse">Estable, pero usa el andador, bastón o se agarra a otro objeto para mantenerse</option>
                                            <option value="Estable sin andador, bastón u otros apoyos">Estable sin andador, bastón u otros apoyos</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Equilibrio en bipedestación<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta15" class="form-control" name="pregunta15">
                                            <option value="Inestable">Inestable</option>
                                            <option value="Estable con apoyo amplio (talones separados más de 10 cm) y usa bastón u otros apoyos">Estable con apoyo amplio (talones separados más de 10 cm) y usa bastón u otros apoyos</option>
                                            <option value="Estable sin andador, bastón u otros apoyos">Estable sin andador, bastón u otros apoyos</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Empujar (el paciente en bipedestación con el tronco erecto y los pies tan juntos como sea posible. El examinador empuja suavemente en el esternón del paciente con la palma de la mano tres veces)<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta16" class="form-control" name="pregunta16">
                                            <option value="Empieza a caerse">Empieza a caerse</option>
                                            <option value="Se tambalea, se agarra pero se mantiene">Se tambalea, se agarra pero se mantiene</option>
                                            <option value="Estable">Estable</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Ojos cerrados<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta17" class="form-control" name="pregunta17">
                                            <option value="Inestable">Inestable</option>
                                            <option value="Estable">Estable</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Vuelta de 360 grados<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta18" class="form-control" name="pregunta18">
                                            <option value="Pasos discontinuos">Pasos discontinuos</option>
                                            <option value="Continuos">Continuos</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Vuelta de 360 grados<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta19" class="form-control" name="pregunta19">
                                            <option value="Inestable">Inestable</option>
                                            <option value="Estable">Estable</option>
                                        </select>
                                      </div>
                                    </div>
                                    <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-2 label-align">Sentarse<span ></span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">

                                        <select id="pregunta20" class="form-control" name="pregunta20">
                                            <option value="Inseguro, calcula mal la distancia, cae en la silla">Inseguro, calcula mal la distancia, cae en la silla</option>
                                            <option value="Usa los barzos o el movimiento es brusco">Usa los barzos o el movimiento es brusco</option>
                                            <option value="Seguro, movimiento suave">Seguro, movimiento suave</option>
                                        </select>
                                      </div>
                                    </div>
                                      <div class="item form-group">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                                        </label>
                                        <div class="col-md-7 col-sm-6 ">
                                            <textarea type="text" class="form-control" name="pregunta21" id="pregunta21" aria-label="With textarea"  required></textarea>
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
