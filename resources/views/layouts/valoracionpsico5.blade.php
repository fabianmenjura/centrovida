@extends('layouts.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel card border-info">
        <div class="x_title">
          <h2 class="card-header bg-info mb-0 text-white alert-heading">MINI EXAMEN MENTAL ABREVIADO<small></small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a><i class="fas fa-hands-helping"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form action="{{route('storepsi5')}}" method="POST">
            @csrf
        <form>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align" for="first-name">Seleccione adulto mayor: <span class="required">*</span>
                </label>
                <div class="col-md-7 col-sm-6">
                    <select id="adulto" class="form-control" name="adulto">
                        @foreach ($adultos as $adultos)
                        {{$a=$adultos->persona->nombre}}
                        {{$b=$adultos->persona->apellido}}
                        {{$c=$adultos->persona->id}}
                        {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                            <option value="{{$adultos['id']}}">{{($concat)}}</option>
                        @endforeach
                </select>
                </div>
              </div>
              <h2>Por favor dígame la fecha de hoy</h2>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Día de la semana<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta1" class="form-control" name="pregunta1">
                    <option value="Bien">Bien</option>
                    <option value="Mal">Mal</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Mes<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta2" class="form-control" name="pregunta2">
                    <option value="Bien">Bien</option>
                    <option value="Mal">Mal</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Año<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta3" class="form-control" name="pregunta3">
                    <option value="Bien">Bien</option>
                    <option value="Mal">Mal</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Día<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta4" class="form-control" name="pregunta4">
                    <option value="Bien">Bien</option>
                    <option value="Mal">Mal</option>
                </select>
              </div>
            </div>
            <h2>Ahora le voy a nombrar tres objetos. Después que se los diga, le voy a pedir que repita en
                voz alta los que recuerde, en cualquier orden. Recuerde los objetos porque se los voy a pedir
                más adelante. ¿Tiene alguna pregunta para hacerme?</h2>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Árbol<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta5" class="form-control" name="pregunta5">
                    <option value="Bien">Bien</option>
                    <option value="Mal">No Recuerda</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Mesa<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta6" class="form-control" name="pregunta6">
                    <option value="Bien">Bien</option>
                    <option value="Mal">No Recuerda</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Avión<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta7" class="form-control" name="pregunta7">
                    <option value="Bien">Bien</option>
                    <option value="Mal">No Recuerda</option>
                </select>
              </div>
            </div>
            <h2>Ahora voy a decirle unos números y quiero que me los repita de atrás para adelante</h2>
            <h3>Numero: 13579 Respuesta Correcta: 97531</h3>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Número de dígitos en el orden correcto: <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-6 ">
                    <textarea type="text" class="form-control" name="pregunta8" id="pregunta8" aria-label="With textarea"  required></textarea>
                </div>
              </div>
              <h2>Le voy a dar un papel, tomelo con su mano derecha, doblelo por la mitad con ambas manos y
                coloquelo sobre sus piernas</h2>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Toma papel con mano derecha<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta9" class="form-control" name="pregunta9">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Dobla el papel por la mitad con ambas manos<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta10" class="form-control" name="pregunta10">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Coloca el papel sobre las piernas<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta11" class="form-control" name="pregunta11">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
              </div>
            </div>
            <h2>Hace un momento le leí una serie de palabras y usted repitio las que recordó, por favor
                digame las que recuerda</h2>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Árbol<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta12" class="form-control" name="pregunta12">
                    <option value="Correcto">Correcto</option>
                    <option value="Incorrecto">Incorrecto</option>
                    <option value="No Recuerda">No Recuerda</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Mesa<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta13" class="form-control" name="pregunta13">
                    <option value="Correcto">Correcto</option>
                    <option value="Incorrecto">Incorrecto</option>
                    <option value="No Recuerda">No Recuerda</option>
                </select>
              </div>
            </div>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Avión<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta14" class="form-control" name="pregunta14">
                    <option value="Correcto">Correcto</option>
                    <option value="Incorrecto">Incorrecto</option>
                    <option value="No Recuerda">No Recuerda</option>
                </select>
              </div>
            </div>
            <h2>Dibujo: Muestre el dibujo, la acción esta correcta si la figura no se cruza más de la mitad. Anote un punto
                si está correcto </h2>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">¿Logro realizar dibujo de manera satisfactoría?<span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">

                <select id="pregunta15" class="form-control" name="pregunta15">
                    <option value="Si">Si</option>
                    <option value="No">No</option>
                </select>
              </div>
            </div>

              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-6 ">
                    <textarea type="text" class="form-control" name="pregunta16" id="pregunta16" aria-label="With textarea"  required></textarea>
                </div>
              </div>




          <div class="form-group row">
            <div class="col-md-11 col-sm-9  offset-md-1">
                <button type="submit" class="btn btn-success col-md-10 btn-round"><i
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
</form>
</form>
        </div>
    </div>
</div>
</div>




@endsection
