@extends('layouts.plantilla')
@section('content')

    <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel card border-info">
            <div class="x_title">
              <h2 class="card-header bg-info mb-0 text-white alert-heading">NUTRICIÓN<small></small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                </li>

                <li><a><i class="fas fa-utensils"></i></a>
                </li>
              </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br />
              <form action="{{route('storen')}}" method="POST">
                @csrf
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Seleccione adulto mayor : <span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
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
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Peso (Kg)<span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                    <input type="text" name="pregunta1" id="pregunta1" required="required" class="form-control ">
                  </div>
                </div>
                <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Estatura (Cm)<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" name="pregunta2" id="pregunta2"required="required" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">IMC (Indice de Masa Corporal)<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" name="pregunta3" id="pregunta3" required="required" class="form-control ">
                    </div>
                  </div> <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Relación circunferencia de<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" name="pregunta4" id="pregunta4" required="required" class="form-control ">
                    </div>
                  </div> <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">De nutricional según IMC<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" name="pregunta5" id="pregunta5" required="required" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Factores de riesgo identificados<span class="required"> *</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea type="text" class="form-control" name="pregunta6" id="pregunta6" aria-label="With textarea" placeholder="Tabaquismo, Alcohol, Drogas, Diabetes..." required></textarea>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Actividad física<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">

                        <select id="pregunta7" class="form-control" name="pregunta7">
                                <option value="Leve">Leve</option>
                                <option value="Moderada">Moderada</option>
                                <option value="Intensa">Intensa</option>

                        </select>
                    </div>
                  </div> <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Prescripción dietaría<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">

                      <select id="pregunta8" class="form-control" name="pregunta8">
                              <option value="Hipoglucida">Hipoglucida</option>
                              <option value="Hiposodica">Hiposodica</option>
                              <option value="Hipocalorica">Hipocalorica</option>
                              <option value="Hipercalorica">Hipercalorica</option>
                              <option value="Carne Blanca">Carne Blanca</option>
                              <option value="Normal">Intensa</option>

                      </select>
                  </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Permanencia de la dieta<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                      <input type="text" name="pregunta10" id="pregunta10" required="required" class="form-control ">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Toma de medicamentos para el diagnostico medico actual<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <select id="pregunta11" class="form-control" name="pregunta11">
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones<span class="required">*</span>
                    </label>
                    <div class="col-md-6 col-sm-6 ">
                        <textarea type="text" class="form-control" name="pregunta9" id="pregunta9" aria-label="With textarea"></textarea>
                    </div>
                  </div>

                <div class="ln_solid"></div>
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
              </form>

            </form>
            </div>
          </div>
        </div>
      </div>


@endsection
