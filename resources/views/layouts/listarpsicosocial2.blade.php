@extends('layouts.plantillas.listarfichas')
@section('content2')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12">
                <div class="x_panel card border-info">
                    <div class="x_title">

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <section class="content invoice">
                            <!-- title row -->
                            <!-- title row -->

                            <!-- info row -->
                            <div class="row invoice-info">
                                <div class="col-sm-1 invoice-col">

                                    <address>


                                    </address>
                                </div>
                                <div class="col-sm-2 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <div><img src="../assets/images/chiquinquira.png" WIDTH=80 HEIGHT=102> </div>
                                        891800475-0

                                    </address>
                                </div>
                                <!-- /.col -->

                                <div class="col-sm-5 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <br> <strong>ALCALDÍA MUNICIPAL DE CHIQUINQUIRÁ - BOYACÁ</strong>
                                        <br>Modelo Integrado de Planeación y Gestión – MIPG
                                        <br>
                                        INSTRUMENTO PSICOLÓGICO
                                    </address>
                                </div>
                                <!-- /.col -->

                                <div class="col-sm-2 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <br> <strong>FM</strong>
                                        <br>Versión 2.0
                                        <br>{{$psico->created_at}}

                                    </address>
                                </div>
                                <div class="col-sm-2 invoice-col">

                                    <address>


                                    </address>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- informacion adulto row -->
                            <div class="row invoice-info">

                                <div class="col-sm-5 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Cédula: </strong> {{$psico->adulto->persona->id}}
                                        <br> <strong>Nombre: </strong> {{$psico->adulto->persona->nombre}}
                                        {{$psico->adulto->persona->apellido}}
                                        <br> <strong>Celular: </strong> {{$psico->adulto->persona->celular}}
                                        <br> <strong>Dirección: </strong> {{$psico->adulto->persona->direccion}}
                                        <br> <strong>Barrio: </strong> {{$psico->adulto->persona->barrio}}
                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Fecha de nacimiento: </strong> {{$psico->adulto->fechaNacimiento}}
                                        <br> <strong>Edad: </strong> {{$psico->adulto->edad}} años
                                        <br> <strong>Género: </strong> {{$psico->adulto->genero}}
                                        <br> <strong>Discapacidad: </strong> {{$psico->adulto->discapacidad}}
                                        <br> <strong>Nivel sisbén: </strong> {{$psico->adulto->nivelsisben}}

                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Cuidador: </strong>{{ $psico->adulto->acudiente->persona->nombre}}
                                        {{ $psico->adulto->acudiente->persona->apellido}}
                                        <br> <strong>Zona de residencia: </strong>{{$psico->adulto->zona->nombrezona}}
                                        <br> <strong>EPS: </strong>{{$psico->adulto->eps->nombreentidad}}
                                        <br> <strong>Régimen: </strong>{{$psico->adulto->regimen->nombreregimen}}
                                        <br> <strong>Tipo de sangre: </strong>{{$psico->adulto->sangre->nombresangre}}
                                    </address>
                                    <hr>


                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- Table row -->
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>FORMATO CUESTIONARIO DE
                                                    ACTIVIDAD FUNCIONAL DE PFEFFER (FAQ)</strong> </th>

                                            <tr>
                                                <br>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 70%">Pregunta</th>
                                                <th style="width: 10%">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Maneja su propio dinero?</td>
                                                <td>{{$psico->pregunta1}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿puede hacer solo/a la compra (alimentos, ropa, cosas de
                                                    casa)?</td>
                                                <td>{{$psico->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿puede preparase solo/a el café o el té y luego apagar el fuego?
                                                </td>
                                                <td>{{$psico->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Puede hacerse solo/a la comida?</td>
                                                <td>{{$psico->pregunta4}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Es capaz de mantenerse al tanto de los acontecimientos y de
                                                    lo que pasa en el vecindario?</td>
                                                <td>{{$psico->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿Es capaz de poner atención, entender y discutir un programa
                                                    de radio, televisión o un artículo de periódico?</td>
                                                <td>{{$psico->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>¿Es capaz de recordar compromisos y acontecimientos
                                                    familiares?</td>
                                                <td>{{$psico->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>¿Es capaz de administrar o manejar sus propios
                                                    medicamentos?</td>
                                                <td>{{$psico->pregunta8}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>¿Es capaz de andar por el vecindario y encontrar el
                                                    camino de vuelta a casa?</td>
                                                <td>{{$psico->pregunta9}}</td>

                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>¿Es capaz de saludar a sus amigos adecuadamente?</td>
                                                <td>{{$psico->pregunta10}}</td>

                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>¿Es capaz de quedarse solo en la casa sin problema?</td>
                                                <td>{{$psico->pregunta11}}</td>

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
                                        {{$psico->pregunta12}}
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Psicología PFEFFER (FAQ)</td>
                                                </tr>
                                                <tr>
                                                    <th>Fecha:</th>
                                                    <td>{{$psico->created_at}}</td>
                                                </tr>
                                                <tr>
                                                    <th>Profesional:</th>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
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
                                    <button class="btn btn-default" onclick="window.print();"><i
                                            class="fa fa-print"></i> Imprimir</button>

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

@endsection
