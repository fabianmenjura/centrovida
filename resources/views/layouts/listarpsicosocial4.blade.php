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
                            <!-- Table row -->
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>ESCALA EMOCIONAL DEL CUIDADOR
                                                    (TEST DE ZARIT)</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 70%">Pregunta</th>
                                                <th style="width: 15%">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Piensa que su familiar le pide más ayuda de la que realmente
                                                    necesita?</td>
                                                <td>{{$psico->pregunta1}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿Piensa que debido al tiempo que dedica a su familiar no tiene
                                                    suficiente tiempo para
                                                    usted?</td>
                                                <td>{{$psico->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿Se siente agobiado por intentar compatibilizar el cuidado de su
                                                    familiar con otras
                                                    responsabilidades? (trabajo-familia)</td>
                                                <td>{{$psico->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Siente vergûenza con la conducta de su familiar?</td>
                                                <td>{{$psico->pregunta4}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Se siente enfadado cuando esta cerca de su familiar?</td>
                                                <td>{{$psico->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿Piensa que el cuidar de su familiar afecta negativamente la
                                                    relación que usted tiene con
                                                    otros miembros de su familia?</td>
                                                <td>{{$psico->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>¿Tiene miedo por el futuro de su familiar?</td>
                                                <td>{{$psico->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>¿Piensa que su familiar depende de usted?</td>
                                                <td>{{$psico->pregunta8}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>¿Se siente tenso cuando esta cerca de su familiar?</td>
                                                <td>{{$psico->pregunta9}}</td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>¿Piensa que su salud ha empeorado debido a tener que cuidar a su
                                                    familiar?</td>
                                                <td>{{$psico->pregunta10}}</td>

                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>¿Piensa que no tiene tanta intimidad como le gustaria debido a tener
                                                    que cuidar de su
                                                    familiar?</td>
                                                <td>{{$psico->pregunta11}}</td>

                                            </tr>
                                            <tr>
                                                <td>12</td>
                                                <td>¿Piensa que su vida social se ha visto afectada negativamente por
                                                    tener que cuidar de
                                                    su familiar?</td>
                                                <td>{{$psico->pregunta12}}</td>

                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>¿Se siente incomodo por distanciarse de sus amistades debido a tener
                                                    que cuidar a su
                                                    familiar?</td>
                                                <td>{{$psico->pregunta13}}</td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>¿Piensa que su familiar le considera a usted la unica persona que le
                                                    puede cuidar?</td>
                                                <td>{{$psico->pregunta14}}</td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>¿Piensa que no tiene suficientes ingresos económicos para los gastos
                                                    de cuidar a su
                                                    familiar ademas de sus otros gastos?</td>
                                                <td>{{$psico->pregunta15}}</td>

                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>¿Piensa que no será capaz de cuidar a su familiar por mucho tiempo
                                                    más?</td>
                                                <td>{{$psico->pregunta16}}</td>

                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>¿Siente que ha perdido el control de su vida desde que comenzó la
                                                    enfermedad en su familiar?</td>
                                                <td>{{$psico->pregunta17}}</td>

                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>¿Desearia poder dejar el cuidado de su familiar en otra persona?
                                                </td>
                                                <td>{{$psico->pregunta18}}</td>

                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>¿Se siente indeciso sobre que hacer con su familiar?</td>
                                                <td>{{$psico->pregunta19}}</td>

                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>¿Piensa que deberia hacer más por su familiar?</td>
                                                <td>{{$psico->pregunta20}}</td>

                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>¿Piensa que podria cuidar mejor a su familiar?</td>
                                                <td>{{$psico->pregunta21}}</td>

                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>Globalmente ¿Qué grado de “carga” experimenta por el hecho de cuidar
                                                    a su familiar?</td>
                                                <td>{{$psico->pregunta22}}</td>

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
                                        {{$psico->pregunta23}}
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Psicología TEST DE ZARIT</td>
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
