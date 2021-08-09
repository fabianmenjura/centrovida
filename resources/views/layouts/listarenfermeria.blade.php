@extends('layouts.plantillas.listarfichas')
@section('content2')
<!-- page content -->
<div class="right_col " role="main">
    <div class="">
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12" >
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
                                        INSTRUMENTO ENFERMERÍA
                                    </address>
                                </div>
                                <!-- /.col -->

                                <div class="col-sm-2 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <br> <strong>FM</strong>
                                        <br>Versión 2.0
                                        <br>{{$enfermeria->created_at}}

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
                                        <strong>Cédula: </strong> {{$enfermeria->adulto->persona->id}}
                                        <br> <strong>Nombre: </strong> {{$enfermeria->adulto->persona->nombre}}
                                        {{$enfermeria->adulto->persona->apellido}}
                                        <br> <strong>Celular: </strong> {{$enfermeria->adulto->persona->celular}}
                                        <br> <strong>Dirección: </strong> {{$enfermeria->adulto->persona->direccion}}
                                        <br> <strong>Barrio: </strong> {{$enfermeria->adulto->persona->barrio}}
                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Fecha de nacimiento: </strong> {{$enfermeria->adulto->fechaNacimiento}}
                                        <br> <strong>Edad: </strong> {{$enfermeria->adulto->edad}} años
                                        <br> <strong>Género: </strong> {{$enfermeria->adulto->genero}}
                                        <br> <strong>Discapacidad: </strong> {{$enfermeria->adulto->discapacidad}}
                                        <br> <strong>Nivel sisbén: </strong> {{$enfermeria->adulto->nivelsisben}}

                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Cuidador: </strong>{{ $enfermeria->adulto->acudiente->persona->nombre}}
                                        {{ $enfermeria->adulto->acudiente->persona->apellido}}
                                        <br> <strong>Zona de residencia:
                                        </strong>{{$enfermeria->adulto->zona->nombrezona}}
                                        <br> <strong>EPS: </strong>{{$enfermeria->adulto->eps->nombreentidad}}
                                        <br> <strong>Régimen: </strong>{{$enfermeria->adulto->regimen->nombreregimen}}
                                        <br> <strong>Tipo de sangre:
                                        </strong>{{$enfermeria->adulto->sangre->nombresangre}}
                                    </address>
                                    <hr>


                                </div>
                                <!-- /.col -->
                            </div>

                            <!-- /.antecedentes-->
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>ANTECEDENTES DE SALUD</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 20%">Ítem</th>
                                                <th style="width: 70%">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Patológicos</td>
                                                <td>{{$enfermeria->pregunta1}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Farmacológicos</td>
                                                <td>{{$enfermeria->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Quirúrgicos</td>
                                                <td>{{$enfermeria->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Hospitalarios</td>
                                                <td>{{$enfermeria->pregunta4}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Toxicoalérgicos</td>
                                                <td>{{$enfermeria->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Traumatológicos</td>
                                                <td>{{$enfermeria->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Ginecológicos:</td>
                                                <td>{{$enfermeria->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Familiares:</td>
                                                <td>{{$enfermeria->pregunta8}}</td>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div> <br /></div>
                            <!-- /.Ayudas técnicas y dispositivos electrónicos-->
                            <div class="row">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>AYUDAS TÉCNICAS Y DISPOSITIVOS
                                                    ELECTRÓNICOS</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 20%">Ítem</th>
                                                <th style="width: 20%" class="text-center">Respuesta</th>
                                                <th style="width: 5%"></th>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 20%">Ítem</th>
                                                <th style="width: 20%" class="text-center">Respuesta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Prótesis dental</td>
                                                <td class="text-center">{{$enfermeria->pregunta9}}</td>
                                                <td> </td>
                                                <td>5</td>
                                                <td>Gafas</td>
                                                <td class="text-center">{{$enfermeria->pregunta10}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>Audífono auditivo</td>
                                                <td class="text-center">{{$enfermeria->pregunta11}}</td>
                                                <td> </td>
                                                <td>6</td>
                                                <td>Marcapasos</td>
                                                <td class="text-center">{{$enfermeria->pregunta12}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Bastón</td>
                                                <td class="text-center">{{$enfermeria->pregunta13}}</td>
                                                <td> </td>
                                                <td>7</td>
                                                <td>Muletas</td>
                                                <td class="text-center">{{$enfermeria->pregunta14}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Caminador</td>
                                                <td class="text-center">{{$enfermeria->pregunta15}}</td>
                                                <td> </td>
                                                <td>8</td>
                                                <td>Silla de ruedas</td>
                                                <td class="text-center">{{$enfermeria->pregunta16}}</td>

                                            </tr>



                                        </tbody>
                                    </table>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Otro:</label>
                                        <label for="exampleInputEmail1">{{$enfermeria->pregunta17}} </label>
                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <div> <br /></div>
                            <!-- /.tamizaje nutricional y signos vitales-->
                            <div class="row">
                                <div> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>TAMIZAJE NUTRICIONAL Y SIGNOS
                                                    VITALES</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 20%">Ítem</th>
                                                <th style="width: 20%">Respuesta</th>
                                                <th style="width: 5%"></th>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 20%">Ítem</th>
                                                <th style="width: 20%">Respuesta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>T.A </td>
                                                <td>{{$enfermeria->pregunta18}}</td>
                                                <td> </td>
                                                <td>5</td>
                                                <td>SATO2</td>
                                                <td>{{$enfermeria->pregunta22}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>FC</td>
                                                <td>{{$enfermeria->pregunta19}}</td>
                                                <td> </td>
                                                <td>6</td>
                                                <td>Talla</td>
                                                <td>{{$enfermeria->pregunta24}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>FR</td>
                                                <td>{{$enfermeria->pregunta20}}</td>
                                                <td> </td>
                                                <td>7</td>
                                                <td>Peso</td>
                                                <td>{{$enfermeria->pregunta23}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>T°</td>
                                                <td>{{$enfermeria->pregunta21}}</td>
                                                <td> </td>
                                                <td>8</td>
                                                <td>Índice de Masa Muscular (IMC)</td>
                                                <td>{{$enfermeria->pregunta25}}</td>

                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.VALORACIÓN POR SISTEMAS-->
                            <div> <br /><br /></div>
                            <div class="row">
                                <div> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
                                <div class="table-responsive">
                                    <div> <br /><br /></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>VALORACIÓN POR
                                                    SISTEMAS</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 20%">Ítem</th>
                                                <th style="width: 20%">Respuesta</th>
                                                <th style="width: 50%">Observación</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Presenta
                                                    fatiga?</td>
                                                <td>{{$enfermeria->pregunta26}}</td>
                                                <td>{{$enfermeria->pregunta27}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿Presenta
                                                    tos?</td>
                                                <td>{{$enfermeria->pregunta28}}</td>
                                                <td>{{$enfermeria->pregunta29}}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿Presenta dolor en
                                                    el tórax?</td>
                                                <td>{{$enfermeria->pregunta30}}</td>
                                                <td>¿Qué factores precipitan el dolor?: {{$enfermeria->pregunta31}}
                                                    <br />
                                                    <hr>¿Cómo describe el dolor?: {{$enfermeria->pregunta32}}
                                                    <br />
                                                    <hr> ¿Cuándo comenzó el dolor?: {{$enfermeria->pregunta33}}</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Ha notado algún cambio
                                                    en sus piernas?</td>
                                                <td>{{$enfermeria->pregunta34}}</td>
                                                <td>¿Frialdad?: {{$enfermeria->pregunta35}}
                                                    <br />
                                                    <hr>¿Entumecimiento?: {{$enfermeria->pregunta36}}
                                                    <br />
                                                    <hr>¿Enrojecimiento?: {{$enfermeria->pregunta37}}
                                                    <br />
                                                    <hr>¿Calor?: {{$enfermeria->pregunta38}}
                                                    <br />
                                                    <hr>¿Ardor?: {{$enfermeria->pregunta39}}

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Tiene dificultad para
                                                    realizar alguna actividad?</td>
                                                <td>{{$enfermeria->pregunta40}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿Realiza algún tipo de actividad física?</td>
                                                <td>{{$enfermeria->pregunta41}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>¿Usted o algún miembro de la familia tiene hábitos tóxicos?</td>
                                                <td>{{$enfermeria->pregunta42}}</td>
                                                <td>¿Tabaco?: {{$enfermeria->pregunta43}}
                                                    <br />
                                                    <hr>¿Alcohol?: {{$enfermeria->pregunta44}}
                                                    <br />
                                                    <hr>¿Drogas?: {{$enfermeria->pregunta45}}

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>¿Ha cocinado o cocina con leña?</td>
                                                <td>{{$enfermeria->pregunta46}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Coloración de la piel</td>
                                                <td>{{$enfermeria->pregunta47}}</td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>10</td>

                                                <td>¿Presenta disnea?
                                                    <br />
                                                    <hr> ¿Oxigenoterapia?
                                                </td>
                                                <td>{{$enfermeria->pregunta51}} <br/> <hr>{{$enfermeria->pregunta52}}</td>
                                            </tr>

                                            <tr>
                                                <td>11</td>
                                                <td>¿Presenta edemas?</td>
                                                <td>{{$enfermeria->pregunta58}}</td>
                                                <td>{{$enfermeria->pregunta59}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- /.actividad fisica-->
                            <div> <br /><br /><br /><br /><br /></div>
                            <div class="row">
                            <div class="row col-md-6">
                                <div class="  table border-dark">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>NIVEL DE ACTIVIDAD
                                                    FÍSICA</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 50%">Ítem</th>
                                                <th style="width: 35%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>En cama </td>
                                                <td class="text-center">{{$enfermeria->pregunta60}}</td>
                                                </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>En silla</td>
                                                <td class="text-center">{{$enfermeria->pregunta61}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                            <td>Deambulación frecuente </td>
                                            <td class="text-center">{{$enfermeria->pregunta62}}</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Deambulación ocasional</td>
                                                <td class="text-center">{{$enfermeria->pregunta63}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.Nivel de movilidad-->
                            <div class="row col-md-6">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>NIVEL DE MOVILIDAD</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 50%">Ítem</th>
                                                <th style="width: 35%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Completamente móvil </td>
                                                <td class="text-center">{{$enfermeria->pregunta64}}</td>

                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Completamente inmóvil</td>
                                                <td class="text-center">{{$enfermeria->pregunta65}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>Muy limitado </td>
                                                <td class="text-center">{{$enfermeria->pregunta66}}</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ligeramente limitado</td>
                                                <td class="text-center">{{$enfermeria->pregunta67}}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                            </div>
                            </div>
                            <!-- /.row -->
                            <!-- /.Nivel de marcha-->
                            <div class="row">
                                <div class="table-responsive">
                                    <div> <br /><br /></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>MARCHA</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 10%">Ítem</th>
                                                <th style="width: 10%">Respuesta</th>
                                                <th style="width: 5%"></th>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 10%">Ítem</th>
                                                <th style="width: 10%">Respuesta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Estable </td>
                                                <td>{{$enfermeria->pregunta68}}</td>
                                                <td> </td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>Alterada</td>
                                                <td>{{$enfermeria->pregunta69}}</td>
                                                <td> </td>
                                                <td></td>
                                                <td>Observaciones</td>
                                                <td>{{$enfermeria->pregunta70}}</td>

                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.digestivo-piel-->
                            <div class="row">
                                <div class="table-responsive">
                                    <div> <br /><br /><br /></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>DIGESTIVO-PIEL</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 35%">Ítem</th>
                                                <th style="width: 20%">Respuesta</th>
                                                <th style="width: 20%">Observación</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Qué alimentos consume habitualmente?
                                                </td>
                                                <td>{{$enfermeria->pregunta71}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿Hay algún alimento que le haga daño?
                                                </td>
                                                <td>{{$enfermeria->pregunta72}}</td>
                                                <td>{{$enfermeria->pregunta73}}</td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿En los últimos días ha cambiado su apetito?
                                                </td>
                                                <td>{{$enfermeria->pregunta74}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Ha presentado cambios en el peso?
                                                </td>
                                                <td>{{$enfermeria->pregunta75}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Ha presentado tos al momento de ingerir alimentos sólidos o
                                                    líquidos?
                                                </td>
                                                <td>{{$enfermeria->pregunta76}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿Siente dolor al pasar los alimentos?
                                                </td>
                                                <td>{{$enfermeria->pregunta77}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Integridad de la dentadura
                                                </td>
                                                <td>{{$enfermeria->pregunta83}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Características de la piel
                                                </td>
                                                <td>{{$enfermeria->pregunta81}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Características de las mucosas
                                                </td>
                                                <td>{{$enfermeria->pregunta82}}</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->

                            <!-- /.Urinaria-->
                            <div class="row">
                                <div class="table-responsive">
                                    <div> <br /><br /><br /></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>URINARIA</strong> </th>

                                            <tr>

                                                <th style="width: 2%">#</th>
                                                <th style="width: 15%">Ítem</th>
                                                <th style="width: 10%">Respuesta</th>
                                                <th style="width: 5%"></th>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 15%">Ítem</th>
                                                <th style="width: 10%">Respuesta</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Tiene alguna dificultad o dolor para orinar?</td>
                                                <td>{{$enfermeria->pregunta96}}</td>
                                                <td> </td>
                                                <td>6</td>
                                                <td>¿Tiene dificultad para defecar?</td>
                                                <td>{{$enfermeria->pregunta102}}</td>
                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>¿Se levanta durante la noche a orinar?</td>
                                                <td>{{$enfermeria->pregunta97}}</td>

                                                <td> </td>
                                                <td>7</td>
                                                <td>¿Utiliza alguna ayuda para defecar?</td>
                                                <td>{{$enfermeria->pregunta103}}</td>

                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>¿Presenta urgencia para ir a orinar?</td>
                                                <td>{{$enfermeria->pregunta98}}</td>
                                                <td> </td>
                                                <td>8</td>
                                                <td>¿Ha notado usted que suda frecuentemente?</td>
                                                <td>{{$enfermeria->pregunta104}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Tiene incontinencia urinaria?</td>
                                                <td>{{$enfermeria->pregunta99}}</td>
                                                <td> </td>
                                                <td>9</td>
                                                <td>¿De qué color es su orina?</td>
                                                <td>{{$enfermeria->pregunta100}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Utiliza Sonda Vesical?</td>
                                                <td>{{$enfermeria->pregunta101}}</td>
                                                <td> </td>
                                                <td>10</td>
                                                <td>Observaciones</td>
                                                <td>{{$enfermeria->pregunta105}}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                    <div class="form-group col-md-4">
                                        <label for="exampleInputEmail1">Observaciones: </label>
                                        <label for="exampleInputEmail1">{{$enfermeria->pregunta95}} </label>

                                    </div>
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <!-- /.Sexual-reproductiva-->
                            <table class="table table-striped">
                                <div> <br /><br /><br /> <br/></div>
                                <thead>
                                    <th colspan="5" class="text-center"> <strong>SEXUAL-REPRODUCTIVA</strong>
                                    </th>

                                </thead>
                            </table>
                            <div class="row">
                                <!-- /.mujer-->
                                <div class="row col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>MUJER</strong>
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
                                                    <td>Fecha de última citología</td>
                                                    <td>{{$enfermeria->pregunta106}}</td>

                                                </tr>


                                                <tr>
                                                    <td>2</td>
                                                    <td>¿Presenta alguna secreción o hemorragia vaginal?<br/></td>
                                                    <td>{{$enfermeria->pregunta109}}</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Características</td>
                                                    <td>{{$enfermeria->pregunta110}}</td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>¿Realiza autoexamen de Seno?</td>
                                                    <td>{{$enfermeria->pregunta111}}</td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- /.hombre-->
                                <div class="row col-md-6">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>HOMBRE</strong>
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
                                                    <td>¿Ya se realizó el examen
                                                        de próstata?</td>
                                                    <td>{{$enfermeria->pregunta112}}</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>¿Realiza el autoexamen
                                                        de testículo?</td>
                                                    <td>{{$enfermeria->pregunta113}}</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>¿Ha presentado dolor
                                                        testicular</td>
                                                    <td>{{$enfermeria->pregunta114}}</td>

                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>¿Presenta alguna
                                                        secreción?</td>
                                                    <td>{{$enfermeria->pregunta115}}</td>

                                                </tr>

                                            </tbody>
                                        </table>

                                    </div>

                                    <!-- /.col -->
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Observaciones: </label>
                                    <label for="exampleInputEmail1">{{$enfermeria->pregunta116}} </label>

                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.Neurológico y órganos de los sentidos-->
                            <div class="row">

                                <div class="table-responsive">
                                    <div> <br /><br /><br /><br /><br /><br /><br /><br /></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>NEUROLÓGICO Y ÓRGANOS DE LOS
                                                    SENTIDOS</strong> </th>

                                            <tr>
                                                <th style="width: 5%">#</th>
                                                <th style="width: 35%">Ítem</th>
                                                <th style="width: 20%">Respuesta</th>
                                                <th style="width: 20%">Observación</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>Presenta problema en (ojos,oídos, gusto, tacto, olfato).
                                                </td>
                                                <td>{{$enfermeria->pregunta117}}</td>
                                                <td>¿Cuál? {{$enfermeria->pregunta118}}</td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿Ha presentado alguna vez temblores o movimientos involuntarios?
                                                </td>
                                                <td>{{$enfermeria->pregunta119}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿Presenta algún tipo de dolor?
                                                </td>
                                                <td>{{$enfermeria->pregunta120}}</td>
                                                <td>Tipo de dolor: {{$enfermeria->pregunta121}}<br />
                                                    <hr>
                                                    Localización del dolor: {{$enfermeria->pregunta122}}</td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Ha tenido dolor de oído o sensación de oído lleno?
                                                </td>
                                                <td>{{$enfermeria->pregunta123}}</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Ha sentido ruidos como pitidos o silbidos en el oído?
                                                </td>
                                                <td>{{$enfermeria->pregunta124}}</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /.memoria-->
                                <div class="row col-md-4">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>MEMORIA</strong>
                                                </th>

                                                <tr>
                                                    <th style="width: 5%">#</th>
                                                    <th style="width: 40%">Ítem</th>
                                                    <th style="width: 20%">Respuesta</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Inmediatos</td>
                                                    <td>{{$enfermeria->pregunta125}}</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Recientes</td>
                                                    <td>{{$enfermeria->pregunta126}}</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Remotos</td>
                                                    <td>{{$enfermeria->pregunta127}}</td>

                                                </tr>

                                                <tr>
                                                    <td>4</td>
                                                    <td>Nivel de conciencia</td>
                                                    <td>{{$enfermeria->pregunta128}}</td>

                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Orientación (tiempo, lugar y persona)</td>
                                                    <td>{{$enfermeria->pregunta129}}</td>

                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Comprensión
                                                    </td>
                                                    <td>{{$enfermeria->pregunta130}}</td>

                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Agudeza Visual (tabla de snellen)
                                                    </td>
                                                    <td>{{$enfermeria->pregunta131}}</td>

                                                </tr>


                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- /.Lenguaje-->
                                <div class="row col-md-4">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>LENGUAJE</strong>
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
                                                    <td>Oral</td>
                                                    <td>{{$enfermeria->pregunta132}}</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Escrito</td>
                                                    <td>{{$enfermeria->pregunta133}}</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                                <!-- /.Sensibilidad-->
                                <div class="row col-md-4">
                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                            <thead>
                                                <th colspan="5" class="text-center"> <strong>SENSIBILIDAD</strong>
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
                                                    <td>Superficial</td>
                                                    <td>{{$enfermeria->pregunta134}}</td>

                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Profunda</td>
                                                    <td>{{$enfermeria->pregunta135}}</td>

                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Observaciones</td>
                                                    <td>{{$enfermeria->pregunta136}}</td>

                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- /.col -->
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.row -->
                            <!-- /.Manejo de salud-->
                            <div class="row">
                                <div class="table-responsive">
                                    <div> <br /><br /><br /></div>
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="8" class="text-center"> <strong>MANEJO DE SALUD</strong> </th>

                                            <tr>

                                                <th style="width: 2%">#</th>
                                                <th style="width: 15%">Ítem</th>
                                                <th style="width: 10%">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>¿Conoce sus enfermedades?</td>
                                                <td>{{$enfermeria->pregunta137}}</td>

                                            </tr>

                                            <tr>
                                                <td>2</td>
                                                <td>¿Sabe cuáles son sus complicaciones?</td>
                                                <td>{{$enfermeria->pregunta138}}</td>



                                            </tr>

                                            <tr>
                                                <td>3</td>
                                                <td>¿Está tomando medicamentos actualmente?</td>
                                                <td>{{$enfermeria->pregunta139}}</td>


                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>¿Toma medicamentos sin orden médica?</td>
                                                <td>{{$enfermeria->pregunta140}}</td>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>¿Utiliza remedios caseros y/o alternativos?</td>
                                                <td>{{$enfermeria->pregunta141}}</td>


                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>¿En los últimos 3 meses ha asistido a control médico?
                                                </td>
                                                <td>{{$enfermeria->pregunta142}}</td>

                                            </tr>

                                        </tbody>
                                    </table>

                                </div>
                                <!-- /.col -->
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Observaciones: </label>
                                    <label for="exampleInputEmail1">{{$enfermeria->pregunta147}} </label>

                                </div>



                            </div>
                            <!-- /.row -->
                          <!-- /.sueño y descanso-->
                          <div class="row">
                            <div class="table-responsive">
                                <div> <br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
                                <table class="table table-striped">
                                    <thead>
                                        <th colspan="8" class="text-center"> <strong>SUEÑO Y DESCANSO</strong> </th>

                                        <tr>

                                            <th style="width: 2%">#</th>
                                            <th style="width: 15%">Ítem</th>
                                            <th style="width: 10%">Respuesta</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>¿Cuántas horas duerme?</td>
                                            <td>{{$enfermeria->pregunta148}}</td>

                                        </tr>

                                        <tr>
                                            <td>2</td>
                                            <td>Utiliza alguna ayuda para poder dormir</td>
                                            <td>{{$enfermeria->pregunta149}}</td>



                                        </tr>

                                        <tr>
                                            <td>3</td>
                                            <td>Sufre de insomnio</td>
                                            <td>{{$enfermeria->pregunta150}}</td>


                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>¿Qué hace en su tiempo libre?</td>
                                            <td>{{$enfermeria->pregunta151}}</td>

                                        </tr>


                                    </tbody>
                                </table>
                                <div class="form-group col-md-4">
                                    <label for="exampleInputEmail1">Observaciones: </label>
                                    <label for="exampleInputEmail1">{{$enfermeria->pregunta156}} </label>

                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                           <!-- /.vacunacion-->
                           <div class="row">
                            <div class="table-responsive">
                                <div> <br /><br /><br /><br /></div>
                                <table class="table table-striped">
                                    <thead>
                                        <th colspan="5" class="text-center"> <strong>ESQUEMA DE VACUNACIÓN</strong>
                                        </th>

                                        <tr>
                                            <th style="width: 5%">#</th>
                                            <th style="width: 40%">Ítem</th>
                                            <th style="width: 70%">Respuesta</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <th colspan="5" class="text-left">Influenza estacional</th>
                                        <tr>
                                            <td>1</td>
                                            <td>Anual</td>
                                            <td>{{$enfermeria->pregunta157}}</td>

                                        </tr>
                                        <th colspan="5" class="text-left">Neumococo 23</th>
                                        <tr>
                                            <td></td>
                                            <td>Entre 60 y 64
                                                requieren 2 dosis a los 5 años de la primera dosis y Después de los 65
                                                dosis única.</td>
                                            <td>{{$enfermeria->pregunta158}}</td>

                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Observaciones </td>
                                            <td>{{$enfermeria->pregunta159}}</td>
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

                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">
                                    <div> <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /></div>
                                    <div class="table-responsive">

                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Enfermería</td>
                                                </tr>
                                                <tr>
                                                    <th>Fecha:</th>
                                                    <td>{{$enfermeria->created_at}}</td>
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

                                <div class=" " <br /><br /><br /><br /><br /><br /><br /><br /><br />>

                                    <button class="btn btn-default" onclick="window.print();">  <i
                                        class="fa fa-download"></i> Descargar </button>

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
