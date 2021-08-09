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
                                        INSTRUMENTO FONOAUDIOLÓGICO
                                    </address>
                                </div>
                                <!-- /.col -->

                                <div class="col-sm-2 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <br> <strong>FM</strong>
                                        <br>Versión 2.0
                                        <br>{{$fono->created_at}}

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
                                        <strong>Cédula: </strong> {{$fono->adulto->persona->id}}
                                        <br> <strong>Nombre: </strong> {{$fono->adulto->persona->nombre}}
                                        {{$fono->adulto->persona->apellido}}
                                        <br> <strong>Celular: </strong> {{$fono->adulto->persona->celular}}
                                        <br> <strong>Dirección: </strong> {{$fono->adulto->persona->direccion}}
                                        <br> <strong>Barrio: </strong> {{$fono->adulto->persona->barrio}}
                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Fecha de nacimiento: </strong> {{$fono->adulto->fechaNacimiento}}
                                        <br> <strong>Edad: </strong> {{$fono->adulto->edad}} años
                                        <br> <strong>Género: </strong> {{$fono->adulto->genero}}
                                        <br> <strong>Discapacidad: </strong> {{$fono->adulto->discapacidad}}
                                        <br> <strong>Nivel sisbén: </strong> {{$fono->adulto->nivelsisben}}

                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Cuidador: </strong>{{ $fono->adulto->acudiente->persona->nombre}}
                                        {{ $fono->adulto->acudiente->persona->apellido}}
                                        <br> <strong>Zona de residencia: </strong>{{$fono->adulto->zona->nombrezona}}
                                        <br> <strong>EPS: </strong>{{$fono->adulto->eps->nombreentidad}}
                                        <br> <strong>Régimen: </strong>{{$fono->adulto->regimen->nombreregimen}}
                                        <br> <strong>Tipo de sangre: </strong>{{$fono->adulto->sangre->nombresangre}}
                                    </address>
                                    <hr>


                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.niveles deglucion -->
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"><strong>NIVELES DE DEGLUCIÓN</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 7%">#</th>
                                                <th style="width: 70%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Enfermedad natural</td>
                                                <td class="text-center">{{$fono->pregunta1}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Diagnóstico clínico actual</td>
                                                <td class="text-center">{{$fono->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Tiempo de evolución</td>
                                                <td class="text-center">{{$fono->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Diagnóstico terapéutico actual</td>
                                                <td class="text-center">{{$fono->pregunta4}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Estado de conciencia</td>
                                                <td class="text-center">{{$fono->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Postura corporal</td>
                                                <td class="text-center">{{$fono->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Vía de alimentación</td>
                                                <td class="text-center">{{$fono->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Tipo de respiración</td>
                                                <td class="text-center">{{$fono->pregunta8}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Modo de respiración</td>
                                                <td class="text-center">{{$fono->pregunta9}}</td>

                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Soporte ventilatorio o respiratorio</td>
                                                <td class="text-center">{{$fono->pregunta10}}</td>

                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Presenta dolor al deglutir</td>
                                                <td class="text-center">{{$fono->pregunta11}}</td>

                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>Acumula la comida en mejillas</td>
                                                <td class="text-center">{{$fono->pregunta12}}</td>

                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Carraspeo o molestia a nivel de laringe</td>
                                                <td class="text-center">{{$fono->pregunta13}}</td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Cambios de voz después de deglutir</td>
                                                <td class="text-center">{{$fono->pregunta14}}</td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Dificultad para tragar</td>
                                                <td class="text-center">{{$fono->pregunta15}}</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Movilización de secreciones</td>
                                                <td class="text-center">{{$fono->pregunta16}}</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Que consistencias tienen los alimentos que consume</td>
                                                <td class="text-center">{{$fono->pregunta17}}</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Presenta tos, ahogo o vomito después de la deglución</td>
                                                <td class="text-center">{{$fono->pregunta18}}</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Cambia de color su piel después de deglutir</td>
                                                <td class="text-center">{{$fono->pregunta19}}</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Reflejo vagal o nauseoso</td>
                                                <td class="text-center">{{$fono->pregunta20}}</td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>Reflejo tusígeno</td>
                                                <td class="text-center">{{$fono->pregunta21}}</td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>Reflejo deglutorio</td>
                                                <td class="text-center">{{$fono->pregunta22}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.Niveles Lingüísticos -->

                            <table class="table table-striped">
                                <div><br /><br /><br /><br /><br /></div>

                                <thead>
                                    <th colspan="5" class="text-center"> <strong>NIVELES LINGÜÍSTICOS</strong>
                                    </th>

                                </thead>
                            </table>
                            <div class="row">
                                <!-- /.forma-->
                                <div class="row col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>1. FORMA</strong>
                                                </th>

                                                <tr>
                                                    <th style="width: 5%">#</th>
                                                    <th style="width: 30%">Ítem</th>
                                                    <th style="width: 30%">Respuesta</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Fonética</td>
                                                    <td>{{$fono->pregunta23}}</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Sintáctico</td>
                                                    <td>{{$fono->pregunta24}}</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Morfológico</td>
                                                    <td>{{$fono->pregunta25}}</td>

                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- /. contenidos-->
                                <div class="row col-md-6">
                                    <div class="table-responsive">

                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>CONTENIDOS</strong>
                                                </th>

                                                <tr>
                                                    <th style="width: 5%">#</th>
                                                    <th style="width: 30%">Ítem</th>
                                                    <th style="width: 20%">Respuesta</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Rasgos semánticos</td>
                                                    <td>{{$fono->pregunta26}}</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Manejo de significados</td>
                                                    <td>{{$fono->pregunta27}}</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Nivel lectoescrito</td>
                                                    <td>{{$fono->pregunta28}}</td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Nivel auditivo</td>
                                                    <td>{{$fono->pregunta29}}</td>

                                                </tr>
                                                <tr>
                                                    <th></th>
                                                    <td></td>
                                                    <td></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <!-- accepted payments column -->
                                <div class="col-md-12">

                                    <p class="lead">Diagnóstico: </p>

                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                        {{$fono->pregunta31}}
                                    </p>
                                </div>
                                <div class="col-md-6">
                                    <div><br /><br /><br /></div>

                                    <p class="lead">Observaciones: </p>

                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                        {{$fono->pregunta30}} <br /><br /><br /><br /><br />
                                    </p>

                                </div>

                                <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="table-responsive">
                                        <div><br /><br /><br /><br /><br /></div>

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Fonoaudiología</td>
                                                </tr>
                                                <tr>
                                                    <th>Fecha:</th>
                                                    <td>{{$fono->created_at}}</td>
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
                            <div><br /><br /><br /><br /><br /></div>
                            <div><br /><br /><br /><br /><br /></div>
                            <div><br /><br /><br /><br /><br /></div>
                            <div><br /><br /><br /><br /><br /></div>
                            <div><br /><br /><br /><br /><br /><br /><br /></div>


                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END content -->
@endsection
