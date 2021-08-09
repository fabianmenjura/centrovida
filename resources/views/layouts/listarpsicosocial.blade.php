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

                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>ESCALA DE DEPRESIÓN GERIÁTRICA
                                                    (TEST DE YESAVAGE)</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 70%">Pregunta</th>
                                                <th style="width: 10%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Está usted básicamente, satisfecho(a) con su vida?</td>
                                                <td class="text-center">{{$psico->pregunta1}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿Ha suspendido usted muchas de sus actividades e intereses?</td>
                                                <td class="text-center">{{$psico->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿Siente usted que su vida está vacía?</td>
                                                <td class="text-center">{{$psico->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Se aburre usted a menudo?</td>
                                                <td class="text-center">{{$psico->pregunta4}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Está usted de buen humor la mayor parte del tiempo?</td>
                                                <td class="text-center">{{$psico->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿Tiene usted miedo de que algo malo le vaya a pasar?</td>
                                                <td class="text-center">{{$psico->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>¿Se siente feliz la mayor parte del tiempo?</td>
                                                <td class="text-center">{{$psico->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>¿Se siente usted a menudo indefenso(a)?</td>
                                                <td class="text-center">{{$psico->pregunta8}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>¿Prefiere usted quedarse en la casa, en vez de salir y hacer cosas
                                                    nuevas?</td>
                                                <td class="text-center">{{$psico->pregunta9}}</td>

                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>¿Con respecto a su memoria: ¿Siente usted que tiene más problemas
                                                    que
                                                    la mayoría de la gente?</td>
                                                <td class="text-center">{{$psico->pregunta10}}</td>

                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>¿Piensa usted que es maravilloso estar vivo(a) en este momento?</td>
                                                <td class="text-center">{{$psico->pregunta11}}</td>

                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>¿De la forma de cómo se siente usted en este momento, ¿Se siente
                                                    usted
                                                    inútil?</td>
                                                <td class="text-center">{{$psico->pregunta12}}</td>

                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>¿Se siente usted con mucha energía?</td>
                                                <td class="text-center">{{$psico->pregunta13}}</td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>¿Siente usted que su situación es irremediable?</td>
                                                <td class="text-center">{{$psico->pregunta14}}</td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>¿Piensa usted que la mayoría de las personas están en mejores
                                                    condiciones que usted?</td>
                                                <td class="text-center">{{$psico->pregunta15}}</td>

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
                                        {{$psico->pregunta16}}
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Psicología</td>
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
                                    <button class="btn btn-default" onclick="window.print();" ><i
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
