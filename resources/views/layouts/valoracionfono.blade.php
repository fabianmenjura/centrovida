@extends('layouts.plantilla')
@section('content')
 <!-- page content -->
 <div class="right_col" role="main">
    <form action="{{route('storeaudio')}}" method="POST">
        @csrf
  <div class="">

    <div class="clearfix"></div>

    <div class="row">

      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel card border-info">
               <div class="x_title">
            <h2 class="card-header bg-info mb-0 text-white">FONOAUDIOLOGÍA<small></small></h2>
            <ul class="nav navbar-right panel_toolbox">
              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
              </li>
              <li><a><i class="fas fa-user-md"></i></a>
              </li>
                   </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">


            <!-- Smart Wizard -->
            <p>Para realizar una nueva valoración, el adulto mayor debe estar previamente registrado.</p>
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

            <div id="wizard" class="form_wizard wizard_horizontal">
              <ul class="wizard_steps">
                <li>
                  <a href="#step-1">
                    <span class="step_no">1</span>
                    <span class="step_descr">
                                      Paso 1<br />
                                      <small></small>
                                  </span>
                  </a>
                </li>
                <li>
                  <a href="#step-2">
                    <span class="step_no">2</span>
                    <span class="step_descr">
                                      Paso 2<br />
                                      <small></small>
                                  </span>
                  </a>
                </li>


              </ul>

              <div id="step-1">
                <form class="form-horizontal form-label-left">
                    <div class="row">
                        <div class="col-lg-12 ">

                                <div class="card-body">
                                    <h4 class="card-title">Niveles de deglución y masticación</h4>
                                     <br>
                                    <div class="row">
                                        <div class="form-group col-md-6"><hr>
                                            <label for="exampleInputEmail1" >Enfermedad natural</label>
                                            <input type="text" name="pregunta1" id="pregunta1" class="form-control " placeholder="Ej.: Hipertensión, EPOC, etc." required><br/>
                                        </div>

                                        <div class="form-group col-md-6"><hr>
                                            <label for="exampleInputEmail1">Diagnóstico clínico actual</label>
                                            <input type="text" name="pregunta2" id="pregunta2" class="form-control" placeholder="Ej.: Discapacidad para..." required><br/>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Tiempo de evolución</label>
                                            <input type="text" name="pregunta3" id="pregunta3" class="form-control" placeholder="Ej.: 10 años, 3 meses, etc." required><br/><hr>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Diagnostico terapéutico actual</label>
                                            <input type="text" name="pregunta4" id="pregunta4" class="form-control" placeholder="Ej.: Requiere terapias para..." required><br/><hr><br/>
                                        </div>

                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Estado de conciencia</label>
                                                        <select id="pregunta5" class="form-control" name="pregunta5">
                                                                <option value="Alerta">Alerta</option>
                                                                <option value="Somnoliento">Somnoliento</option>
                                                                <option value="Estupor">Estupor</option>
                                                        </select>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Postura corporal</label>
                                                        <select id="pregunta6" class="form-control" name="pregunta6">
                                                                <option value="Decúbito supino">Decúbito supino</option>
                                                                <option value="Decúbito prono">Decúbito prono</option>
                                                                <option value="Decúbito lateral">Decúbito lateral</option>
                                                                <option value="Sedente">Sedente</option>
                                                                <option value="Semisedente">Semisedente</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Vía de alimentación</label>
                                                        <select id="pregunta7" class="form-control" name="pregunta7">
                                                                <option value="Vía oral">Vía oral</option>
                                                                <option value="Enteral">Enteral</option>
                                                                <option value="Parenteral">Parenteral</option>

                                                        </select><br/><br/>
                                                </div>

                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Tipo de respiración</label>
                                                        <select id="pregunta8" class="form-control" name="pregunta8">
                                                                <option value="Costal abdominal">Costal abdominal</option>
                                                                <option value="Costal diafragmático">Costal diafragmático </option>


                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Modo de respiración</label>
                                                        <select id="pregunta9" class="form-control" name="pregunta9">
                                                                <option value="Oral">Oral</option>
                                                                <option value="Nasal">Nasal</option>
                                                                <option value="Nasal con cánula de oxigeno">Nasal con cánula de oxigeno</option>
                                                                <option value="Oxigeno">Oxigeno</option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Soporte ventilatorio o respiratorio</label>
                                                        <select id="pregunta10" class="form-control" name="pregunta10">
                                                                <option value="Cánula de traqueotomía">Cánula de traqueotomía</option>
                                                                <option value="Ya fue decanulado">Ya fue decanulado</option>
                                                                <option value="Presenta secreción en exceso">Presenta secreción en exceso</option>

                                                        </select><br/><br/>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Presenta dolor al deglutir</label>
                                                        <select id="pregunta11" class="form-control" name="pregunta11">
                                                                <option value="Si">Si</option>
                                                                <option value="No">No</option>

                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Acumula la comida en mejillas</label>
                                                        <select id="pregunta12" class="form-control" name="pregunta12">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Carraspeo o molestia a nivel de laringe</label>
                                                        <select id="pregunta13" class="form-control" name="pregunta13">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select><br/><br/>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Cambios de voz después de deglutir</label>
                                                        <select id="pregunta14" class="form-control" name="pregunta14">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Dificultad para tragar</label>
                                                        <select id="pregunta15" class="form-control" name="pregunta15">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Movilización de secreciones</label>
                                                        <select id="pregunta16" class="form-control" name="pregunta16">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select><br/><br/>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Que consistencias tienen los alimentos que consume</label>
                                                        <select id="pregunta17" class="form-control" name="pregunta17">
                                                                <option value="Solido">Solido</option>
                                                                <option value="Semisólido">Semisólido</option>
                                                                <option value="Liquido">Liquido</option>

                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Presenta tos, ahogo o vomito después de la deglución</label>
                                                        <select id="pregunta18" class="form-control" name="pregunta18">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4"><br/>
                                                    <label for="exampleInputEmail1">Cambia de color su piel después de deglutir</label>
                                                        <select id="pregunta19" class="form-control" name="pregunta19">
                                                            <option value="Si">Si</option>
                                                            <option value="No">No</option>

                                                        </select><br/><br/>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Reflejo vagal o nauseoso</label>
                                                        <select id="pregunta20" class="form-control" name="pregunta20">
                                                            <option value="Presente">Presente </option>
                                                            <option value="Ausente">Ausente </option>
                                                            <option value="Aumentado ">Aumentado </option>
                                                            <option value="Disminuido ">Disminuido </option>
                                                            <option value="Zona de desencadenamiento posterior">Zona de desencadenamiento posterior </option>
                                                            <option value="Anterior ">Anterior </option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Reflejo tusígeno</label>
                                                        <select id="pregunta21" class="form-control" name="pregunta21">
                                                            <option value="Presente">Presente </option>
                                                            <option value="Ausente">Ausente </option>
                                                            <option value="Aumentado ">Aumentado </option>
                                                            <option value="Disminuido ">Disminuido </option>
                                                        </select>
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="exampleInputEmail1">Reflejo deglutorio</label>
                                                        <select id="pregunta22" class="form-control" name="pregunta22">
                                                            <option value="Presente">Presente </option>
                                                            <option value="Ausente">Ausente </option>
                                                            <option value="Aumentado ">Aumentado </option>
                                                            <option value="Disminuido ">Disminuido </option>

                                                        </select><br/>
                                                </div>

                        </div>
                        </div>

                    </div>
                    </div>


                </form>
                </div>


            <div id="step-2">
                <div class="row">
                    <div class="col-lg-12 ">

                            <div class="card-body">

                                <div class="row">
                                    <h4 class="card-title font-weight-bold">Niveles Lingüísticos</h4>
                                    <br>
                                    <h4 class="form-group col-md-12 font-weight-bold">1. Forma</h4>

                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Fonética</label>
                                        <div class="col-md-8 col-sm-6 ">
                                        <select id="pregunta23" class="form-control" name="pregunta23">
                                                <option value="Verbal">Verbal</option>
                                                <option value="No verbal">No verbal</option>

                                            </select>
                                    </div>
                                </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Sintáctico</label>
                                        <div class="col-md-8 col-sm-6 ">
                                        <select id="pregunta24" class="form-control" name="pregunta24">
                                                <option value="Organización">Organización</option>
                                                <option value="Estructuración">Estructuración</option>
                                                <option value="Simples">Simples</option>
                                                <option value="Compuestos">Compuestos</option>
                                                <option value="Armonía">Armonía</option>
                                                <option value="Extensión">Extensión</option>

                                            </select>
                                    </div>
                                </div>
                                    <div class="form-group col-md-6">
                                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Morfológico</label>
                                        <div class="col-md-8 col-sm-6 ">
                                        <select id="pregunta25" class="form-control" name="pregunta25">
                                                <option value="Maneja conceptos de verbo ">Maneja conceptos de verbo</option>
                                                <option value="Adjetivo">Adjetivo</option>
                                                <option value="Pronombres">Pronombres</option>
                                                <option value="Artículos">Artículos</option>
                                                <option value="Nombres">Nombres</option>
                                                <option value="Adverbios">Adverbios</option>

                                            </select><br/><br/>
                                    </div>
                                </div>

 <h4 class="form-group col-md-12 font-weight-bold">2. contenidos</h4>
    <div class="form-group col-md-6">
                                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Rasgos semánticos</label>
                        <div class="col-md-8 col-sm-6 ">
                        <select id="pregunta26" class="form-control" name="pregunta26">
                                <option value="Si">Si</option>
                                <option value="No">No</option>

                            </select>
                    </div>
                      </div>
                    <div class="form-group col-md-6">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Manejo de significados</label>
                        <div class="col-md-8 col-sm-6 ">
                        <select id="pregunta27" class="form-control" name="pregunta27">
                                <option value="Lexicales">Lexicales</option>
                                <option value="Estructurales">Estructurales</option>

                            </select><br/><br/>
                        </div>
                        <br/>

                    </div>

                   


                    <br>
                    <div class="form-group col-md-6">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Nivel lectoescrito *:</label>
                        <div class="col-md-8 col-sm-6 ">
                        <select id="pregunta28" class="form-control" name="pregunta28">
                            <option value="Si">Si</option>
                            <option value="No">No</option>

                            </select><br/><br/>
                        </div>
                        <br/>

                    </div>
                    <br/>
                    <div class="form-group col-md-6">
                        <label  class="col-form-label col-md-3 col-sm-3 label-align" for="exampleInputEmail1">Nivel auditivo *:</label>
                        <div class="col-md-8 col-sm-6 ">
                        <select id="pregunta29" class="form-control" name="pregunta29">
                            <option value="Si">Si</option>
                            <option value="No">No</option>

                            </select><br/><br/>
                        </div>
                        <br/>

                    </div>
                    <br/>
                      
                      <h4 class="card-title font-weight-bold">Observaciones generales</h4>
                      <br>
                      <div class="form-group col-md-12">
                        <br>
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-6 ">
                        <textarea type="text" class="form-control" name="pregunta30" id="pregunta30" aria-label="With textarea"  required></textarea>
                    </div>
                  </div>
                  <div class="form-group col-md-12">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Diagnóstico: <span class="required">*</span>
                    </label>
                    <div class="col-md-8 col-sm-6 ">
                        <textarea type="text" class="form-control" name="pregunta31" id="pregunta31" aria-label="With textarea"  required></textarea>
                    </div><br/><br/><br/>
                  </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-11 col-sm-9  offset-md-1">
                                <button type="submit" class="btn btn-success col-md-10 btn-round"><i
                      class="fa fa-floppy-o"></i> Guardar valoración</button>
                      <button class="btn waves-effect col-md-1 waves-light btn-round btn-outline-light" type="reset"><i
                        class="fas fa-paint-brush"></i></button>
                </div>
                        </div>
                        @if (session('agregar'))
                        <div class="alert alert-succes mt-3">
                            {{session('agregar')}}
                        </div>
                    @endif
                    </div>

                </div>
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


@endsection
