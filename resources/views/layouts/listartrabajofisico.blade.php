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
                                        INSTRUMENTO ACTIVIDAD FÍSICA
                                    </address>
                                </div>
                                <!-- /.col -->

                                <div class="col-sm-2 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <br> <strong>FM</strong>
                                        <br>Versión 2.0
                                        <br>{{$tbfisico->created_at}}

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
                                        <strong>Cédula: </strong> {{$tbfisico->adulto->persona->id}}
                                        <br> <strong>Nombre: </strong> {{$tbfisico->adulto->persona->nombre}}
                                        {{$tbfisico->adulto->persona->apellido}}
                                        <br> <strong>Celular: </strong> {{$tbfisico->adulto->persona->celular}}
                                        <br> <strong>Dirección: </strong> {{$tbfisico->adulto->persona->direccion}}
                                        <br> <strong>Barrio: </strong> {{$tbfisico->adulto->persona->barrio}}
                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Fecha de nacimiento: </strong> {{$tbfisico->adulto->fechaNacimiento}}
                                        <br> <strong>Edad: </strong> {{$tbfisico->adulto->edad}} años
                                        <br> <strong>Género: </strong> {{$tbfisico->adulto->genero}}
                                        <br> <strong>Discapacidad: </strong> {{$tbfisico->adulto->discapacidad}}
                                        <br> <strong>Nivel sisbén: </strong> {{$tbfisico->adulto->nivelsisben}}

                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Cuidador: </strong>{{ $tbfisico->adulto->acudiente->persona->nombre}}
                                        {{ $tbfisico->adulto->acudiente->persona->apellido}}
                                        <br> <strong>Zona de residencia: </strong>{{$tbfisico->adulto->zona->nombrezona}}
                                        <br> <strong>EPS: </strong>{{$tbfisico->adulto->eps->nombreentidad}}
                                        <br> <strong>Régimen: </strong>{{$tbfisico->adulto->regimen->nombreregimen}}
                                        <br> <strong>Tipo de sangre: </strong>{{$tbfisico->adulto->sangre->nombresangre}}
                                    </address>
                                    <hr>


                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.TINETTI - EVALUACIÓN DE LA MARCHA -->
                            <div class="row">
                                <div class="table-responsive">
                                    <br /><br /><br /><br />
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"><strong>TINETTI - EVALUACIÓN DE LA MARCHA</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 7%">#</th>
                                                <th style="width: 40%">Ítem</th>
                                                <th style="width: 70%" >Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                                <td>1</td>
                                                <td>Iniciación de la marcha</td>
                                                <td >{{$tbfisico->pregunta1}}</td>

                                            </tr>
                                            <th colspan="5" class="text-left"> Longitud y altura de paso
                                                <tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Movimiento pie derecho</td>
                                                <td >{{$tbfisico->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Movimiento pie derecho</td>
                                                <td >{{$tbfisico->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Movimiento pie izquierdo</td>
                                                <td >{{$tbfisico->pregunta4}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Movimiento pie izquierdo</td>
                                                <td >{{$tbfisico->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Simetría del paso</td>
                                                <td >{{$tbfisico->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Fluidez del paso</td>
                                                <td >{{$tbfisico->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Trayectoria (observar el trazado que realiza uno de los pies durante tres metros)</td>
                                                <td >{{$tbfisico->pregunta8}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Tronco</td>
                                                <td >{{$tbfisico->pregunta9}}</td>

                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Postura al caminar</td>
                                                <td >{{$tbfisico->pregunta10}}</td>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.row -->
                            <!-- /.TINETTI - EVALUACIÓN DEL EQUILIBRIO -->
                            <div class="row">
                                <div class="table-responsive">
                                    <br /><br /><br /><br /><br />
                                    <br /><br /><br /><br /><br />
                                    <br /><br /><br /><br /><br />
                                    <br /><br /><br /><br /><br />
                                    <br /><br /><br /><br /><br />
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"><strong>TINETTI - EVALUACIÓN DEL EQUILIBRIO</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 7%">#</th>
                                                <th style="width: 40%">Ítem</th>
                                                <th style="width: 70%" >Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                                <td>1</td>
                                                <td>Equilibrio sentado</td>
                                                <td >{{$tbfisico->pregunta11}}</td>

                                            </tr>
                                            <th colspan="5" class="text-left"> Longitud y altura de paso
                                                <tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Levantarse</td>
                                                <td >{{$tbfisico->pregunta12}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Intentos para levantarse</td>
                                                <td >{{$tbfisico->pregunta13}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Equilibrio en bipedestación inmediata (los cinco primeros segundos)</td>
                                                <td >{{$tbfisico->pregunta14}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Equilibrio en bipedestación</td>
                                                <td >{{$tbfisico->pregunta15}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Empujar (el paciente en bipedestación con el tronco erecto y los pies tan juntos como sea posible. El examinador empuja suavemente en el esternón del paciente con la palma de la mano tres veces)</td>
                                                <td >{{$tbfisico->pregunta16}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Ojos cerrados</td>
                                                <td >{{$tbfisico->pregunta17}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Vuelta de 360 grados</td>
                                                <td >{{$tbfisico->pregunta18}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Vuelta de 360 grados</td>
                                                <td >{{$tbfisico->pregunta19}}</td>

                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Sentarse</td>
                                                <td >{{$tbfisico->pregunta20}}</td>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div class="row">
                                <!-- accepted payments column -->

                                <div class="col-md-6">
                                    <div><br /><br /><br /> <br /><br /><br /><br /><br /></div>

                                    <p class="lead">Observaciones: </p>

                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                        {{$tbfisico->pregunta21}} <br /><br /><br /><br /><br />
                                    </p>

                                </div>

                                <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="table-responsive">
                                        <div><br /><br /><br /><br /><br /> <br /><br /><br /><br /><br /></div>


                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Actividad física</td>
                                                </tr>
                                                <tr>
                                                    <th>Fecha:</th>
                                                    <td>{{$tbfisico->created_at}}</td>
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

                            <div><br /><br /><br /><br </div>


                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END content -->
@endsection
