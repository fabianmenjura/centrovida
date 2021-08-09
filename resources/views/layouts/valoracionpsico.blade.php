@extends('layouts.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel card border-info">
        <div class="x_title">
          <h2 class="card-header bg-info mb-0 text-white alert-heading">ESCALA DE DEPRESIÓN GERIÁTRICA (TEST DE YESAVAGE)</h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a><i class="fas fa-hands-helping"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <p>Para realizar una nueva valoración, el adulto mayor debe estar previamente registrado.</p>
            <h4>Por favor seleccione el adulto mayor:</h4>

<hr>
          <br />
          <form action="{{route('storepsi')}}" method="POST">
            @csrf
            <div class="col-md-12 col-sm-6">
                <select id="adulto" class="form-control" name="adulto">
                    @foreach ($adultos as $adultos)
                    {{$a=$adultos->persona->nombre}}
                    {{$b=$adultos->persona->apellido}}
                    {{$c=$adultos->persona->id}}
                    {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                        <option value="{{$adultos['id']}}">{{($concat)}}</option>
                    @endforeach
            </select>   <br />     <hr>
            </div>

            <form class="form-horizontal form-label-left">
                <div class="row">
                    <div class="col-lg-12 ">

                            <div class="card-body">
 <div class="alert border-warning alert-dismissible " role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                            </button>
                            <strong>Indicación:</strong> Se trata de un cuestionario tamizaje que mide la depresión en personas mayores
                            de 60 años. <br><br>
                            0-10: Normal<br>11-14: Depresión Moderada<br>&gt;14: Depresión Severa
                          </div>
                                 <br>
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">1. ¿Está usted básicamente, satisfecho(a) con su vida?<p>

                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold"> 2. ¿Ha suspendido usted muchas de sus actividades e intereses?</p>
    </p>

                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <p class="font-weight-bold">3. ¿Siente usted que su vida está vacía?</p>

                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">4. ¿Se aburre usted a menudo?</p>


                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">5. ¿Está usted de buen humor la mayor parte del tiempo?</p>

                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">6. ¿Tiene usted miedo de que algo malo le vaya a pasar?</p>

                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">7. ¿Se siente feliz la mayor parte del tiempo?</p>

                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">8. ¿Se siente usted a menudo indefenso(a)?</p>

                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">9. ¿Prefiere usted quedarse en la casa, en vez de salir y hacer cosas nuevas?
                                        </p>

                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">10. Con respecto a su memoria: ¿Siente usted que tiene más problemas que la mayoría de la gente?
                                        </p>

                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">11. ¿Piensa usted que es maravilloso estar vivo(a) en este momento?
                                        </p>

                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">12. ¿De la forma de cómo se siente usted en este momento, ¿Se siente usted inútil?
                                        </p>

                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">13. ¿Se siente usted con mucha energía?
                                        </p>

                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">14. ¿Siente usted que su situación es irremediable?
                                        </p>

                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">15. ¿Piensa usted que la mayoría de las personas están en mejores condiciones que usted?
                                        </p>

                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="Si" required/> Si <br>
                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="No" required/> No <br>
                                        <br>
                                    </div>


                    </div>
                    <br>

                    <div class="item form-group ol-md-12">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6">
                            <textarea type="text" class="form-control" name="pregunta16" id="pregunta16" aria-label="With textarea"  required></textarea>

                       <br>  <br>  </div>
    <hr>
                      </div>
                    <div class="form-group row">
                        <div class="col-md-11 col-sm-9  offset-md-1">
                            <button type="submit" class="btn btn-success col-md-10 btn-round ">  <span aria-hidden="true"></span><i
                    class="fa fa-floppy-o"></i> Guardar</button>
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

              </form>
            </form>


          </div>




        </div>
    </div>
</div>

@endsection
