@extends('layouts.plantilla')
@section('content')

<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel card border-info">
        <div class="x_title">
          <h2 class="card-header bg-info mb-0 text-white alert-heading">BITÁCORA<small></small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a><i class="fas fa-clipboard-list"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
          <br />
          <form action="{{route('storeb')}}" method="POST">
            @csrf
        <form>
            <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Profesional que realiza: <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-6 ">
                    <select id="profesional" class="form-control" name="profesional" required>
                        @foreach ($profe as $profe)
                        {{$a=$profe->persona->nombre}}
                        {{$b=$profe->persona->apellido}}
                        {{$c=$profe->persona->id}}
                        {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                            <option value="{{$profe['id']}}">{{($concat)}}</option>
                        @endforeach
                </select>
                </div>
              </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione adulto mayor: <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-6 ">
                    <select id="adulto" class="form-control" name="adulto" required>
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
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">Tipo de bitácora *: <span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">
                    <input type="radio" name="tbitacora" id="tbitacora" class="form-input" value="Visita domiciliaria" /> Visita domicilaria <br>
                    <input type="radio" name="tbitacora" id="tbitacora" class="form-input" value="Visita solicitada" /> Visita solicitada <br>
                    <input type="radio" name="tbitacora" id="tbitacora" class="form-input" value="Visita de rutina" /> Visita de rutina <br>
                    <input type="radio" name="tbitacora" id="tbitacora" class="form-input" value="Seguimiento" /> Seguimiento <br>


              </div>

            </div>
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Prescripción de la bitácora: <span class="required">*</span>
                </label>
                <div class="col-md-8 col-sm-6 ">
                    <textarea type="text" class="form-control" name="bitacora" id="bitacora" aria-label="With textarea"  required></textarea>
                </div>
              </div>




          <div class="form-group row">
            <div class="col-md-11 col-sm-9  offset-md-1">
                <button type="submit" class="btn btn-success col-md-10 btn-round"  ><i
        class="fa fa-floppy-o"></i> Guardar bitácora</button>
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
