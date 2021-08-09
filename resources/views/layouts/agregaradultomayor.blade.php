@extends('layouts.plantilla')
@section('content')

    <div class="right_col" role="main">

        <div class="">

    <div class="row">
        <form action="{{route('store3')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <div class="col-md-12 col-sm-12">
          <div class="x_panel card border-info ">
            <div class="x_title">
                <h2 class="card-header bg-info mb-0 text-white alert-heading">Adulto mayor</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
            <div class="x_content">
                <h2 class="font-weight-bold ">Datos personales <br><br><small>Por favor diligencie el siguiente formulario</small></h2>

                <p class="text-danger">Campos obligatorios (*)</p>
              <br/>

              <form class="form-label-left input_mask" >

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase has-feedback-left" name="cc" id="cc" placeholder="Cédula" required>
                  <span class="fa fa-circle-o-notch form-control-feedback left" aria-hidden="true"></span>

                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase" name="nombre" id="nombre" placeholder="Nombres" required>
                    <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase has-feedback-left" name="apellido" id="apellido" placeholder="Apellidos">
                  <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                </div>

                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase" data-inputmask="'mask' : '(999) 999-9999'" name="celular" id="celular" placeholder="Celular" required>
                    <span class="fa fa-phone form-control-feedback right" aria-hidden="true"></span>
                  </div>


                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase has-feedback-left" name="direccion" id="direccion" placeholder="Dirección" required>
                    <span class="fa fa-building-o form-control-feedback left" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase" name="barrio" id="barrio" placeholder="Barrio" required>
                  <span class="fa fa-building-o form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="form-group row">


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
                        <input type="date" name="fechan" id="fechan" class="form-control" value="1960-01-01" required>
                    </div>
                  </div>
                  
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Género *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="radio" name="genero" id="genero" class="form-input" value="Masculino" /> Masculino <br>
                        <input type="radio" name="genero" id="genero" class="form-input" value="Femenino" /> Femenino <br>
                        <input type="radio" name="genero" id="genero" class="form-input" value="Otro" /> Otro <br>

                  </div>
                </div>
                
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-2 label-align">¿Posee algúna discapacidad?: <span ></span>
                </label>
                <div class="col-md-7 col-sm-6 ">
                    <select id="discapacidad1" class="form-control" name="discapacidad1">
                      <option value="Si">Si</option>
                      <option value="No">No</option>
                </select>
                </div>
              </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Discapacidad *:<span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="discapacidad" id="discapacidad" class="form-control" placeholder="Discapacidad">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Es victima del conflicto armado?: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="conflicto" class="form-control" name="conflicto">
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">¿Pertenecé a algún grupo etnico?: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="grupoetnico" class="form-control" name="grupoetnico">
                          <option value="Si">Si</option>
                          <option value="No">No</option>
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Puntaje *:<span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="puntajes" id="puntajes" class="form-control" placeholder="Ej, 42.5 12, 26">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Nivel sisbén *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="text" name="nsisben" id="nsisben" data-inputmask="'mask' : '9'"class="form-control" placeholder="Ingrese el nivel de sisbén" required>
                    </div>
                  </div>
                  <div class="ln_solid"></div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Cuidador *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="acudiente" class="form-control" name="acudiente">
                            @foreach ($acudientes as $acudientes)
                            {{$a=$acudientes->persona->nombre}}
                            {{$b=$acudientes->persona->apellido}}
                            {{$c=$acudientes->persona->id}}
                            {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                                <option value="{{$acudientes['id']}}">{{($concat)}}</option>
                            @endforeach
                    </select>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Zona de residencia *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <select id="zona" class="form-control" name="zona">
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
                            @foreach ($sangre as $sangre)
                                <option value="{{$sangre['id']}}">{{$sangre['nombresangre']}}</option>
                            @endforeach
                    </select>
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Estado Actual *: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="radio" name="estado" id="estado" class="form-input" value="Activo" /> Activo <br>                        
                        <input type="radio" name="estado" id="estado" class="form-input" value="Inactivo" /> Inactivo <br> 
                  </div>
                </div>
                <p class="text-danger">Nivel de Escolaridad</p>
                <div><br></div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-2 label-align">Primaria: <span ></span>
                  </label>
                  <div class="col-md-7 col-sm-6 ">
                      <select id="primaria" class="form-control" name="primaria">
                        <option value="No Presenta">No Presenta</option>
                        <option value="Incompleta">Incompleta</option>
                        <option value="Completa">Completa</option>
                  </select>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-2 label-align">Secundaria: <span ></span>
                  </label>
                  <div class="col-md-7 col-sm-6 ">
                      <select id="secundaria" class="form-control" name="secundaria">
                        <option value="No Presenta">No Presenta</option>
                        <option value="Incompleta">Incompleta</option>
                        <option value="Completa">Completa</option>
                  </select>
                  </div>
                </div>
                <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-2 label-align">Superior: <span ></span>
                  </label>
                  <div class="col-md-7 col-sm-6 ">
                      <select id="superior" class="form-control" name="superior">
                        <option value="No Presenta">No Presenta</option>
                        <option value="Incompleta">Incompleta</option>
                        <option value="Completa">Completa</option>
                  </select>
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
                        <input type="file" name="fotoadulto" id="fotoadulto"  class="form-control" accept="image/png, image/jpeg, image/jpg" required>
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Fotocopia cédula: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fcedula" id="fcedula" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Historia clínica: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fhistoria" id="fhistoria" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Declaración de consentimiento: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fdeclaracion" id="fdeclaracion" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Certificado EPS <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file"  name="feps" id="feps" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>

                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Certificado puntaje SISBÉN <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fpuntaje" id="fpuntaje" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>
                  </div>
                  <div class="item form-group">
                    <label class="col-form-label col-md-3 col-sm-2 label-align">Disentimiento informado: <span ></span>
                    </label>
                    <div class="col-md-7 col-sm-6 ">
                        <input type="file" name="fdisentimiento" id="fdisentimiento" class="form-control" accept="image/png, image/jpeg, image/jpg, application/pdf, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.openxmlformats-officedocument.wordprocessingml.document">
                    </div>

                  </div>


            </form>


 <div class="ln_solid"></div>

        </div>

          <div class="form-group row">
            <div class="col-md-11 col-sm-9  offset-md-1">
                            <button type="submit" class="btn btn-success col-md-10 btn-round"><i
                  class="fa fa-floppy-o"></i> Guardar</button>
                  <button class="btn waves-effect col-md-1 waves-light btn-round btn-outline-light" type="reset"><i
                    class="fas fa-paint-brush"></i></button>
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
</form>


</div>
</div>












@endsection


