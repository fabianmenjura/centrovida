@extends('layouts.plantilla')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel card border-info">
        <div class="x_title">
          <h2 class="card-header bg-info mb-0 text-white alert-heading">FORMATO CUESTIONARIO DE ACTIVIDAD FUNCIONAL DE PFEFFER (FAQ)</h2>
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
          <form action="{{route('storepsi2')}}" method="POST">
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
                                    <strong>0: Normal;</strong> o nunca lo hizo pero podría hacerlo solo/a<br>
                                    <strong>1: Con dificultad;</strong> pero se maneja solo; o nunca lo hizo y si tuviera que hacerlo ahora tendría
                                    dificultad<br>
                                    <strong>2: Necesita ayuda;</strong> pero lo hace/a<br>
                                    <strong>3: Dependiente;</strong> No puede realizarlo/a<br>
                                  </div>
                                 <br>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">1. ¿Maneja su propio dinero?<p>

                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Dependiente" required/> Dependiente <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold"> 2. ¿Puede hacer solo/a la compra (alimentos, ropa, cosas de casa)?</p>
    </p>

    <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Normal" required/> Normal <br>
    <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Con dificultad" required/> Con dificultad <br>
    <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
    <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Dependiente" required/> Dependiente <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                     <p class="font-weight-bold">3. ¿Puede preparase solo/a el café o el té y luego apagar el fuego?</p>

                                     <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Normal" required/> Normal <br>
                                     <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                     <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                     <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Dependiente" required/> Dependiente <br> <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">4. ¿Puede hacerse solo/a la comida?</p>


                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Dependiente" required/> Dependiente <br><br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">5. ¿Es capaz de mantenerse al tanto de los acontecimientos y de lo que pasa en el vecindario?</p>

                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Dependiente" required/> Dependiente <br><br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">6. ¿Es capaz de poner atención, entender y discutir un programa de radio, televisión o un artículo de periódico?</p>

                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Dependiente" required/> Dependiente <br>  <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">7. ¿Es capaz de recordar compromisos y acontecimientos familiares?</p>

                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Dependiente" required/> Dependiente <br>              <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">8. ¿Es (nombre) capaz de administrar o manejar sus propios medicamentos?</p>

                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Dependiente" required/> Dependiente <br><br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">9. ¿Es (nombre) capaz de andar por el vecindario y encontrar el
                                            camino de vuelta a casa?
                                        </p>

                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Dependiente" required/> Dependiente <br>    <br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">10. ¿Es (nombre) capaz de saludar a sus amigos adecuadamente?
                                        </p>

                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Dependiente" required/> Dependiente <br><br>
                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">11. ¿Es (nombre) capaz de quedarse solo en la casa sin problema?
                                        </p>

                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Normal" required/> Normal <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Con dificultad" required/> Con dificultad <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Necesita ayuda" required/> Necesita ayuda <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Dependiente" required/> Dependiente <br><br>
                                    </div>



                    </div>
                    <br>

                    <div class="item form-group ol-md-12">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6">
                            <textarea type="text" class="form-control" name="pregunta12" id="pregunta12" aria-label="With textarea"  required></textarea>

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
