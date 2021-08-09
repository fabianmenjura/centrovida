<script>
    function f_Cmb(){
            document.frm.action="{{route('update2',$adultoActualizar->persona->id)}}";
            document.frm.submit();
    }

    function f_Cmb1(){
            document.frm.action="{{route('update4',$adultoActualizar->id)}}";
            document.submit();
    }
    </script>

@extends('layouts.plantillas.editar')
@section('content2')
    <div class="right_col" role="main">

        <div class="">

    <div class="row">
        <form name="frm" id="frm" action="" method="POST"  enctype="multipart/form-data">
            @method('PUT')
            @csrf


        <div class="col-md-12">
          <div class="x_panel card border-info ">
            <div class="x_title">

              <h2 class="font-weight-bold ">Datos personales<small>Por favor diligencie el siguiente formulario</small></h2>
                   <ul class="nav navbar-right panel_toolbox">

                </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <p class="text-danger">Campos obligatorios (*)</p>
              <br/>

              <form class="form-label-left input_mask">

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase has-feedback-left" name="cc" id="cc" value="{{$adultoActualizar->persona->id}}" disabled>
                  <span class="fa fa-circle-o-notch form-control-feedback left" aria-hidden="true"></span>

                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase" name="nombre1" id="nombre1" value="{{$adultoActualizar->persona->nombre}}" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase has-feedback-left" name="apellido" id="apellido" value="{{$adultoActualizar->persona->apellido}}" required>
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase" data-inputmask="'mask' : '(999) 999-9999'" name="celular" id="celular" value="{{$adultoActualizar->persona->celular}}" required>
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                  </div>


                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase has-feedback-left" name="direccion" id="direccion" value="{{$adultoActualizar->persona->direccion}}" required>
                    <span class="fa fa-building-o form-control-feedback left" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase" name="barrio" id="barrio" value="{{$adultoActualizar->persona->barrio}}" required>
                  <span class="fa fa-building-o form-control-feedback right" aria-hidden="true"></span>
                </div>


                      <div class="form-group col-md-12">
                        <input name="bt1" class="btn btn-success btn-block" type="submit" value="Actualizar datos personales" onclick="f_Cmb();" />
                    </div>




<div><br></div>
                <div class="form-group row"></div>
                <div class="ln_solid"></div>
                      <div class="x_title">
                        <h2 class="font-weight-bold">Datos generales<small></small></h2>

                        <div class="clearfix"></div>
                      </div>
                      <p class="text-danger">Campos obligatorios (*)</p>
                <div class="item form-group"> <br>
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Fecha de nacimiento *: <span class="required"></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="date" name="fechan" id="fechan" class="form-control" value="{{$adultoActualizar->fechaNacimiento}}" required>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Edad *: <span class="required"></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="edad" id="edad" data-inputmask="'mask' : '99'" class="form-control" value="{{$adultoActualizar->edad}}" required>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Género *: <span ></span>
                    </label>
                    <input type="text" name="genero" id="genero" class="form-control" value="{{$adultoActualizar->genero}}" disabled>
                      <div class="col-md-7 col-sm-6 ">

                        <input type="radio" name="genero" id="genero" class="form-input" value="Masculino" required/> Masculino <br>
                        <input type="radio" name="genero" id="genero" class="form-input" value="Femenino" required/> Femenino <br>
                        <input type="radio" name="genero" id="genero" class="form-input" value="Otro" required/> Otro <br>

                  </div>
                </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Discapacidad *:<span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="discapacidad" id="discapacidad" class="form-control" value="{{$adultoActualizar->discapacidad}}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Puntaje *:<span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="puntajes" id="puntajes" class="form-control" value="{{$adultoActualizar->puntajes}}">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Nivel sisbén *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="nsisben" id="nsisben" data-inputmask="'mask' : '9'"class="form-control" value="{{$adultoActualizar->nivelsisben}}" required>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Cuidador *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                      {{$x=$adultoActualizar->acudiente->persona->nombre}}
                      {{$y=$adultoActualizar->acudiente->persona->apellido}}
                      {{$z=$adultoActualizar->acudiente->persona->id}}
                      
                      

                        <select id="acudiente" class="form-control" name="acudiente">
                            @foreach ($acudientes as $acudientes)
                            {{$a=$acudientes->persona->nombre}}
                            {{$b=$acudientes->persona->apellido}}
                            {{$c=$acudientes->persona->id}}
                            {{$concat = "CC ".$c." - ".$a." ".$b." " }}

                                <option value="{{$acudientes['id']}}">{{($concat)}}</option>
                            @endforeach
                            <option value="{{$adultoActualizar->acudiente_id}}" selected >{{$concat2 = "CC ".$z." - ".$x." ".$y." " }}</option>

                    </select>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Zona de residencia *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="zona" class="form-control" name="zona">
                            <option value="{{$adultoActualizar->zona_id}}" selected >{{$adultoActualizar->zona->nombrezona}}</option>
                            @foreach ($zona as $zona)
                                <option value="{{$zona['id']}}">{{$zona['nombrezona']}}</option>
                            @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">EPS actual *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="epsa" class="form-control" name="epsa">
                            <option value="{{$adultoActualizar->eps_id}}" selected >{{$adultoActualizar->eps->nombreentidad}}</option>
                            @foreach ($eps as $eps)
                                <option value="{{$eps['id']}}">{{$eps['nombreentidad']}}</option>
                            @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Régimen actual *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="regimen" class="form-control" name="regimen">
                            <option value="{{$adultoActualizar->regimen_id}}" selected >{{$adultoActualizar->regimen->nombreregimen}}</option>
                            @foreach ($regi as $regi)
                                <option value="{{$regi['id']}}">{{$regi['nombreregimen']}}</option>
                            @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Tipo de sangre *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="sangre" class="form-control" name="sangre">
                            <option value="{{$adultoActualizar->sangre_id}}" selected >{{$adultoActualizar->sangre->nombresangre}}</option>
                            @foreach ($sangre as $sangre)
                                <option value="{{$sangre['id']}}">{{$sangre['nombresangre']}}</option>
                            @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Estado Actual *: <span ></span>
                    </label>
                    <input type="text" name="estado" id="estado" class="form-control" value="{{$adultoActualizar->estado}}" disabled>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="radio" name="estado" id="estado" class="form-input" value="Activo" required/> Activo <br>                        
                        <input type="radio" name="estado" id="estado" class="form-input" value="Inactivo" required/> Inactivo <br> 
                  </div>
                </div>
                  <div class="form-group row"><br></div>
                  <div class="ln_solid"></div>
                        <div class="x_title">
                          <h2 class="font-weight-bold">Certificados<small>Formatos permitidos: PNG, JPEG, JPG, DOC, PDF, XLS</small></h2>

                          <div class="clearfix"></div>
                        </div>
                               <p class="text-danger">Campos obligatorios (*)</p>
<div><br></div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Foto *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fotoadulto" id="fotoadulto"  class="form-control" value="{{$adultoActualizar->anexofoto}}" accept="image/png, image/jpeg, image/jpg" >
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Fotocopia cédula: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fcedula" id="fcedula" class="form-control" value="{{$adultoActualizar->anexocedula}}" accept="image/png, image/jpeg, image/jpg, application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Historia clínica: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fhistoria" id="fhistoria" class="form-control" value="{{$adultoActualizar->anexohistoriaclinica}}" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Declaración de consentimiento: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fdeclaracion" id="fdeclaracion" class="form-control" value="{{$adultoActualizar->anexodeclaracionconsentimiento}}" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Certificado EPS <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file"  name="feps" id="feps" class="form-control" value="{{$adultoActualizar->anexocertificacioneps}}" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Certificado puntaje SISBÉN <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fpuntaje" id="fpuntaje" class="form-control" value="{{$adultoActualizar->anexopuntajesisben}}" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Disentimiento informado: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fdisentimiento" id="fdisentimiento" class="form-control" value="{{$adultoActualizar->anexodisentimientoinformado}}" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>

                  </div>


            </form>


 <div class="ln_solid"></div>

        </div>

        <div class="form-group col-md-12">
            <input class="btn btn-success btn-block" name="bt2" type="submit" value="Actualizar datos generales" onclick="f_Cmb1();" />
         </div>
         @if (session('agregar'))
          <div class="alert alert-succes mt-3">
              {{session('agregar')}}
          </div>
      @endif
       </div>
          </div>


        </form>

          </div>




</div>
</div>


@endsection
