@extends('layouts.plantillas.editar')
@section('content2')
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
      <div class="clearfix"></div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel card border-info">
          <div class="x_title">
            <h2 class="card-header bg-info mb-0 text-white alert-heading">Nutrición</small></h2>

            <div class="clearfix"></div>
          </div>
          <div class="x_content">

            <section class="content invoice">
              <!-- title row -->
              <div class="row">
                <div class="  invoice-header">
                  <h2 class="text-uppercase">
                    <i class="fa fa-user"></i> {{$nutricion->adulto->persona->id}}

                              </h2>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="  invoice-header">
                  <h2 class="text-uppercase">
                    <i class="fa fa-user"></i> {{$nutricion->adulto->persona->nombre}} {{$nutricion->adulto->persona->apellido}}

                              </h2>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="  invoice-header">
                  <h2 class="text-uppercase">
                    <i class="fa fa-user"></i> {{$nutricion->adulto->edad}}

                              </h2>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="  invoice-header">
                  <h2 class="text-uppercase">
                    <i class="fa fa-user"></i> {{$nutricion->adulto->persona->direccion}}

                              </h2>
                </div>
                <!-- /.col -->
              </div>
              <div class="row">
                <div class="  invoice-header">
                  <h2 class="text-uppercase">
                    <i class="fa fa-user"></i> {{$nutricion->adulto->persona->celular}}

                              </h2>
                </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">

                  <address>
                                  <strong>Indicación: </strong>Se trata de un cuestionario tamizaje que mide la depresión en personas mayores
                                  de 60 años.
                                  <br>
                                  <br>0-10: Normal
                                  <br>11-14: Depresión Moderada
                                  <br>&gt;14: Depresión Severa
                              </address>
                </div>
                <!-- /.col -->


                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="table-responsive">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th style="width: 5%">#</th>
                        <th style="width: 70%">Pregunta</th>
                        <th style="width: 10%">Respuesta</th>

                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td>Peso</td>
                        <td>{{$nutricion->pregunta1}}</td>

                      </tr>
                      <tr>
                        <td>2</td>
                        <td>Estatura</td>
                        <td>{{$nutricion->pregunta2}}</td>

                      </tr>
                      <tr>
                        <td>3</td>
                        <td>IMC (Indice de Masa Corporal)</td>
                        <td>{{$nutricion->pregunta3}}</td>

                      </tr>
                      <tr>
                        <td>4</td>
                        <td>Relación circunferencia de</td>
                        <td>{{$nutricion->pregunta4}}</td>

                      </tr>
                      <tr>
                        <td>5</td>
                        <td>¿Está usted de buen humor la mayor parte del tiempo?</td>
                        <td>{{$nutricion->pregunta5}}</td>

                      </tr>
                      <tr>
                        <td>6</td>
                        <td>¿Tiene usted miedo de que algo malo le vaya a pasar?</td>
                        <td>{{$nutricion->pregunta6}}</td>

                      </tr>
                      <tr>
                        <td>7</td>
                        <td>¿Se siente feliz la mayor parte del tiempo?</td>
                        <td>{{$nutricion->pregunta7}}</td>

                      </tr>
                      <tr>
                        <td>8</td>
                        <td>¿Se siente usted a menudo indefenso(a)?</td>
                        <td>{{$nutricion->pregunta8}}</td>

                      </tr>
                      <tr>
                        <td>9</td>
                        <td>¿Prefiere usted quedarse en la casa, en vez de salir y hacer cosas nuevas?</td>
                        <td></td>

                      </tr>
                      <tr>
                        <td>10</td>
                        <td>¿Con respecto a su memoria: ¿Siente usted que tiene más problemas que
                            la mayoría de la gente?</td>
                        <td>{{$nutricion->pregunta10}}</td>

                      </tr>


                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-md-6">
                  <p class="lead">Observaciones: </p>

                  <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    {{$nutricion->pregunta16}}
                  </p>
                </div>
                <!-- /.col -->
                <div class="col-md-6">

                  <div class="table-responsive">
                    <table class="table">
                      <tbody>
                        <tr>
                          <th style="width:50%">Valoración:</th>
                          <td>Nutrición</td>
                        </tr>
                        <tr>
                          <th>Fecha:</th>
                          <td>{{$nutricion->created_at}}</td>
                        </tr>
                        <tr>
                          <th>Valoración realizada por:</th>
                          <td>{{ Auth::user()->name}}</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- this row will not appear when printing -->
              <div class="row no-print">
                <div class=" ">
                  <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Imprimir</button>

                </div>
              </div>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- /page content -->



<div class="row">

<form action="{{route('storen')}}" method="POST">
    @csrf
<form>
    <div class="row">
      <h1 class="form-group col-md-12">Atención Nutricional</h1>


      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value={{$nutricion->adulto->persona->nombre}} disabled>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" value={{$nutricion->adulto->persona->apellido}} disabled>
        </div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Peso</label>
    <input type="text" name="pregunta1" id="pregunta1" class="form-control" value={{$nutricion->pregunta1}} disabled>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Estatura</label>
    <input type="text" name="pregunta2" id="pregunta2" class="form-control" value={{$nutricion->pregunta2}} disabled>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">IMC (Indice de Masa Corporal) </label>
    <input type="text" name="pregunta3" id="pregunta3" class="form-control"  value={{$nutricion->pregunta3}} disabled>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Relación circunferencia de</label>
    <input type="text" name="pregunta4" id="pregunta4" class="form-control" value={{$nutricion->pregunta4}} disabled>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">De nutricional según IMC</label>
    <input type="text" name="pregunta5" id="pregunta5" class="form-control" value={{$nutricion->pregunta5}} disabled>
</div>
<div class="form-group col-md-6">
    <label for="exampleInputEmail1">Factores de riesgo identificados
        Tabaquismo
        Alcohol
        Drogas
        Diabetes
        Cáncer
        Hipertensión arterial
        Infarto agudo de miocardio
        Otro
        </label>
    <input type="text" name="pregunta6" id="pregunta6" class="form-control"  value={{$nutricion->pregunta6}} disabled>
</div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Actividad física</label>

                <input type="text" name="pregunta7" id="pregunta7" class="form-control"  value={{$nutricion->pregunta7}} disabled>

        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Prescripción dietaría</label>

            <input type="text" name="pregunta8" id="pregunta8" class="form-control"  value="{{$nutricion->pregunta8}}" disabled>
          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">Observaciones</label>

            <input type="text" name="pregunta9" id="pregunta9" class="form-control"  value="{{$nutricion->pregunta9}}" disabled>
          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Permanencia de la Dieta</label>
            <input type="text" name="pregunta10" id="pregunta10" class="form-control"  value="{{$nutricion->pregunta10}}" disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Toma de medicamentos para el diagnostico medico actual</label>

                <input type="text" name="pregunta11" id="pregunta11" class="form-control"  value={{$nutricion->pregunta11}} disabled>

        </div>
    </div>

    </div>

  </form>





</form>
@if (session('agregar'))
    <div class="alert alert-succes mt-3">
        {{session('agregar')}}
    </div>
@endif
</div>
@endsection
