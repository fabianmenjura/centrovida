@extends('layouts.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel card border-info">
        <div class="x_title">
          <h2 class="card-header bg-info mb-0 text-white alert-heading">APGAR FAMILIAR<small>UNA HERRAMIENTA PARA DETECTAR DISFUNCIÓN FAMILIAR</small></h2>
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
          <form action="{{route('storepsi3')}}" method="POST">
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

                                 <br>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">1. Me satisface la ayuda que recibo de mi familia cuando tengo algún problema o necesidad<p>

                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold"> 2. Me satisface como en mi familia hablamos y compartimos nuestros problemas
    </p>

                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">
                                     <p class="font-weight-bold">3. Me satisface como mi familia acepta y apoya mi deseo de emprender nuevas actividades</p>

                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">4. Me satisface como mi familia expresa afecto y responde a mis emociones tales como rabia, tristeza, amor</p>


                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">5. Me satisface como compartimos en mi familia: <br> A. El tiempo para estar juntos</p>

                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">B. Los espacios de la casa</p>

                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">C. El dinero</p>

                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">6. ¿Usted tiene algún amigo cercano a quien pueda buscar cuando necesita ayuda?</p>

                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>
                                    <div class="form-group col-md-6">

                                        <p class="font-weight-bold">7. Estoy satisfecho con el soporte que recibo de mis amigos y amigas?
                                        </p>

                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Casi nunca" required/> Casi nunca <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Siempre" required/> Siempre <br>

                                    </div>


                    </div>
                    <br>

                    <div class="item form-group ol-md-12">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6">
                            <textarea type="text" class="form-control" name="pregunta10" id="pregunta10" aria-label="With textarea"  required></textarea>

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
