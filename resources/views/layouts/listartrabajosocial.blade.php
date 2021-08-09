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
                                        INSTRUMENTO TRABAJO SOCIAL
                                    </address>
                                </div>
                                <!-- /.col -->

                                <div class="col-sm-2 invoice-col">

                                    <address ALIGN=center>
                                        <br>
                                        <br> <strong>FM</strong>
                                        <br>Versión 2.0
                                        <br>{{$tbsocial->created_at}}

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
                                        <strong>Cédula: </strong> {{$tbsocial->adulto->persona->id}}
                                        <br> <strong>Nombre: </strong> {{$tbsocial->adulto->persona->nombre}}
                                        {{$tbsocial->adulto->persona->apellido}}
                                        <br> <strong>Celular: </strong> {{$tbsocial->adulto->persona->celular}}
                                        <br> <strong>Dirección: </strong> {{$tbsocial->adulto->persona->direccion}}
                                        <br> <strong>Barrio: </strong> {{$tbsocial->adulto->persona->barrio}}
                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Fecha de nacimiento: </strong> {{$tbsocial->adulto->fechaNacimiento}}
                                        <br> <strong>Edad: </strong> {{$tbsocial->adulto->edad}} años
                                        <br> <strong>Género: </strong> {{$tbsocial->adulto->genero}}
                                        <br> <strong>Discapacidad: </strong> {{$tbsocial->adulto->discapacidad}}
                                        <br> <strong>Nivel sisbén: </strong> {{$tbsocial->adulto->nivelsisben}}

                                    </address>
                                    <hr>
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-3 invoice-col">
                                    <hr>
                                    <address>
                                        <strong>Cuidador: </strong>{{ $tbsocial->adulto->acudiente->persona->nombre}}
                                        {{ $tbsocial->adulto->acudiente->persona->apellido}}
                                        <br> <strong>Zona de residencia:
                                        </strong>{{$tbsocial->adulto->zona->nombrezona}}
                                        <br> <strong>EPS: </strong>{{$tbsocial->adulto->eps->nombreentidad}}
                                        <br> <strong>Régimen: </strong>{{$tbsocial->adulto->regimen->nombreregimen}}
                                        <br> <strong>Tipo de sangre:
                                        </strong>{{$tbsocial->adulto->sangre->nombresangre}}
                                    </address>
                                    <hr>


                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                            <table class="table table-striped">
                                <thead>
                                    <th colspan="5" class="text-center"> <strong>INSTRUMENTO TRABAJO SOCIAL</strong>
                                    </th>

                                </thead>
                            </table>
                            <div class="row">
                                <!-- /. -->
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Datos de
                                                    identificación</strong> </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Condición laboral</td>
                                                <td class="text-center">{{$tbsocial->pregunta1}}</td>

                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>¿A qué se dedica actualmente?</td>
                                                <td class="text-center">{{$tbsocial->pregunta2}}</td>

                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>¿Es usuario de algun subsidio?</td>
                                                <td class="text-center">{{$tbsocial->pregunta3}}</td>

                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Ingresos promedios</td>
                                                <td class="text-center">{{$tbsocial->pregunta4}}</td>


                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /. Condiciones habitacionales-->
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Condiciones
                                                    habitacionales</strong> </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Tipo de vivienda</td>
                                                <td class="text-center">{{$tbsocial->pregunta5}}</td>

                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Ocupación</td>
                                                <td class="text-center">{{$tbsocial->pregunta6}}</td>

                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>Presentación externa</td>
                                                <td class="text-center">{{$tbsocial->pregunta7}}</td>

                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Presentación interna</td>
                                                <td class="text-center">{{$tbsocial->pregunta8}}</td>

                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>Servicios públicos instalados</td>
                                                <td class="text-center">{{$tbsocial->pregunta9}}</td>

                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Estado de la vivienda</td>
                                                <td class="text-center">{{$tbsocial->pregunta10}}</td>

                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>Ubicación</td>
                                                <td class="text-center">{{$tbsocial->pregunta11}}</td>

                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->

                                <!-- /.Distribución de la vivienda -->
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Distribución de la
                                                    vivienda</strong> </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>12</td>
                                                <td>Número de alcobas</td>
                                                <td class="text-center">{{$tbsocial->pregunta12}}</td>

                                            </tr>
                                            <tr>
                                                <td>13</td>
                                                <td>Número de baños</td>
                                                <td class="text-center">{{$tbsocial->pregunta13}}</td>

                                            </tr>
                                            <tr>
                                                <td>14</td>
                                                <td>Número de cocinas</td>
                                                <td class="text-center">{{$tbsocial->pregunta14}}</td>

                                            </tr>
                                            <tr>
                                                <td>15</td>
                                                <td>Ambiente del sector</td>
                                                <td class="text-center">{{$tbsocial->pregunta15}}</td>
                                            </tr>
                                            <tr>
                                                <td>16</td>
                                                <td>Vías de Acceso</td>
                                                <td class="text-center">{{$tbsocial->pregunta16}}</td>
                                            </tr>
                                            <tr>
                                                <td>17</td>
                                                <td>Aseo y orden</td>
                                                <td class="text-center">{{$tbsocial->pregunta17}}</td>
                                            </tr>
                                            <tr>
                                                <td>18</td>
                                                <td>Dotación</td>
                                                <td class="text-center">{{$tbsocial->pregunta18}}</td>
                                            </tr>
                                            <tr>
                                                <td>19</td>
                                                <td>Tenencia</td>
                                                <td class="text-center">{{$tbsocial->pregunta19}}</td>
                                            </tr>
                                            <tr>
                                                <td>20</td>
                                                <td>Estrato</td>
                                                <td class="text-center">{{$tbsocial->pregunta20}}</td>
                                            </tr>
                                            <tr>
                                                <td>21</td>
                                                <td>La vivienda es propia</td>
                                                <td class="text-center">{{$tbsocial->pregunta21}}</td>
                                            </tr>
                                            <tr>
                                                <td>22</td>
                                                <td>¿Hace cuánto reside en ella? </td>
                                                <td class="text-center">{{$tbsocial->pregunta22}}</td>
                                            </tr>
                                            <tr>
                                                <td>23</td>
                                                <td>Tiene hipoteca</td>
                                                <td class="text-center">{{$tbsocial->pregunta23}}</td>
                                            </tr>
                                            <tr>
                                                <td>24</td>
                                                <td>Valor de la hipoteca</td>
                                                <td class="text-center">$ {{$tbsocial->pregunta24}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /. Problemas sociales-->
                                <div class="table-responsive col-md-6">
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Problemas sociales</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>46</td>
                                                <td>Violencia intrafamiliar</td>
                                                <td class="text-center">{{$tbsocial->pregunta46}}</td>
                                            </tr>
                                            <tr>
                                                <td>47</td>
                                                <td>Delincuencia</td>
                                                <td class="text-center">{{$tbsocial->pregunta47}}</td>
                                            </tr>
                                            <tr>
                                                <td>48</td>
                                                <td>Alcoholismo</td>
                                                <td class="text-center">{{$tbsocial->pregunta48}}</td>
                                            </tr>
                                            <tr>
                                                <td>49</td>
                                                <td>Discriminación</td>
                                                <td class="text-center">{{$tbsocial->pregunta49}}</td>
                                            </tr>
                                            <tr>
                                                <td>50</td>
                                                <td>Adicciones</td>
                                                <td class="text-center">{{$tbsocial->pregunta50}}</td>
                                            </tr>
                                            <tr>
                                                <td>51</td>
                                                <td>Analfabetismo</td>
                                                <td class="text-center">{{$tbsocial->pregunta51}}</td>
                                            </tr>
                                            <tr>
                                                <td>52</td>
                                                <td>Pobreza</td>
                                                <td class="text-center">{{$tbsocial->pregunta52}}</td>
                                            </tr>
                                            <tr>
                                                <td>53</td>
                                                <td>Desempleo</td>
                                                <td class="text-center">{{$tbsocial->pregunta53}}</td>
                                            </tr>
                                            <tr>
                                                <td>54</td>
                                                <td>¿Cuánto tiempo vive en el domicilio actual?</td>
                                                <td class="text-center">{{$tbsocial->pregunta54}}</td>
                                            </tr>
                                            <tr>
                                                <td>55</td>
                                                <td>¿Es beneficiario de algún programa social?</td>
                                                <td class="text-center">{{$tbsocial->pregunta55}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /. Información económica-->
                                <div class="table-responsive col-md-6">
                                    <br />
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Información económica</strong>
                                            </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>

                                            </tr>
                                            <tr>
                                                <td>25</td>
                                                <td>¿Posee ingresos?</td>
                                                <td class="text-center">{{$tbsocial->pregunta25}}</td>

                                            </tr>
                                            <tr>
                                                <td>26</td>
                                                <td>Valor total de los ingresos</td>
                                                <td class="text-center">$ {{$tbsocial->pregunta26}}</td>

                                            </tr>
                                            <tr>
                                                <td>27</td>
                                                <td>Posee egresos</td>
                                                <td class="text-center">{{$tbsocial->pregunta27}}</td>

                                            </tr>
                                            <tr>
                                                <td>28</td>
                                                <td>Valor total de los egresos</td>
                                                <td class="text-center">{{$tbsocial->pregunta28}}</td>

                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /. Situación médica-->
                                <div class="table-responsive col-md-6">
                                    <br />
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Situación médica</strong> </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>29</td>
                                                <td>Frecuencia con la que asiste al médico</td>
                                                <td class="text-center">{{$tbsocial->pregunta29}}</td>
                                            </tr>
                                            <tr>
                                                <td>30</td>
                                                <td>¿Dónde lo atienden?</td>
                                                <td class="text-center">{{$tbsocial->pregunta30}}</td>
                                            </tr>
                                            <tr>
                                                <td>31</td>
                                                <td>¿Podría mencionar si tiene alguna enfermedad?</td>
                                                <td class="text-center">{{$tbsocial->pregunta31}}</td>
                                            </tr>
                                            <tr>
                                                <td>32</td>
                                                <td>¿Presenta algún tipo de discapacidad?</td>
                                                <td class="text-center">{{$tbsocial->pregunta32}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /. Alimentación-->
                                <div class="table-responsive col-md-6">
                                    <br />
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Alimentación</strong> </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>33</td>
                                                <td>Pollo</td>
                                                <td class="text-center">{{$tbsocial->pregunta33}}</td>
                                            </tr>
                                            <tr>
                                                <td>34</td>
                                                <td>Carne de Res</td>
                                                <td class="text-center">{{$tbsocial->pregunta34}}</td>
                                            </tr>
                                            <tr>
                                                <td>35</td>
                                                <td>Cerdo</td>
                                                <td class="text-center">{{$tbsocial->pregunta35}}</td>
                                            </tr>
                                            <tr>
                                                <td>36</td>
                                                <td>Pescado</td>
                                                <td class="text-center">{{$tbsocial->pregunta36}}</td>
                                            </tr>
                                            <tr>
                                                <td>37</td>
                                                <td>Leche</td>
                                                <td class="text-center">{{$tbsocial->pregunta37}}</td>
                                            </tr>
                                            <tr>
                                                <td>38</td>
                                                <td>Verduras</td>
                                                <td class="text-center">{{$tbsocial->pregunta38}}</td>
                                            </tr>
                                            <tr>
                                                <td>39</td>
                                                <td>Huevo </td>
                                                <td class="text-center">{{$tbsocial->pregunta39}}</td>
                                            </tr>
                                            <tr>
                                                <td>40</td>
                                                <td>Frutas</td>
                                                <td class="text-center">{{$tbsocial->pregunta40}}</td>
                                            </tr>
                                            <tr>
                                                <td>41</td>
                                                <td>Cereales</td>
                                                <td class="text-center">{{$tbsocial->pregunta41}}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.col -->
                                <!-- /.Red relacional, recreación y uso del tiempo libre familiar -->
                                <div class="table-responsive col-md-6">
                                    <br />
                                    <table class="table table-striped">
                                        <thead>
                                            <th colspan="5" class="text-center"> <strong>Red relacional, recreación y
                                                    uso del tiempo libre familiar</strong> </th>

                                            <tr>
                                                <th style="width: 2%">#</th>
                                                <th style="width: 60%">Ítem</th>
                                                <th style="width: 40%" class="text-center">Respuesta</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>42</td>
                                                <td>¿Qué hace en su tiempo libre?</td>
                                                <td class="text-center">{{$tbsocial->pregunta42}}</td>
                                            </tr>
                                            <tr>
                                                <td>43</td>
                                                <td>¿Con quién se relaciona?</td>
                                                <td class="text-center">{{$tbsocial->pregunta43}}</td>
                                            </tr>
                                            <tr>
                                                <td>44</td>
                                                <td>¿Qué tipo de actividades le gusta?</td>
                                                <td class="text-center">{{$tbsocial->pregunta44}}</td>
                                            </tr>
                                            <tr>
                                                <td>45</td>
                                                <td>¿Alguna actividad que desee hacer, pero puede?</td>
                                                <td class="text-center">{{$tbsocial->pregunta45}}</td>
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
                                    <br /><br /> <br /><br />
                                    <p class="lead">Observaciones: </p>

                                    <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                                        {{$tbsocial->pregunta56}} <br /><br /><br /><br /><br />
                                    </p>
                                </div>
                                <!-- /.col -->
                                <div class="col-md-6">

                                    <div class="table-responsive">
                                        <table class="table">
                                            <br /><br /><br /><br /><br /><br />
                                            <tbody>
                                                <tr>
                                                    <th style="width:50%">Valoración:</th>
                                                    <td>Psicología</td>
                                                </tr>
                                                <tr>
                                                    <th>Fecha:</th>
                                                    <td>{{$tbsocial->created_at}}</td>
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
                            <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br /> <br /><br />
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->
@endsection
