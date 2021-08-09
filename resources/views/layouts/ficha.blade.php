@extends('layouts.plantillas.editar')
@section('content2')
<!-- page content -->
<div class="right_col" role="main">
    <div class="">


        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                    <div class="x_title">
                        <h2 class="card-header bg-info mb-0 text-white alert-heading">Ficha {{$personaFicha->id}}</h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                                <a href="#"  data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-folder-open"></i></a>

                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <div class="col-md-3 col-sm-3  profile_left">
                            <div class="profile_img">
                                <div id="crop-avatar">
                                    <!-- Current avatar -->
                                    <img class="img-responsive avatar-view card border-primary" src="../images/{{$personaFicha->anexofoto}}"
                                        width="220" height="220" alt="Avatar"
                                        title="{{$personaFicha->persona->nombre}} {{$personaFicha->persona->apellido}}">

                                </div>
                            </div>


                            <blockquote class="message">
                                <div class="x_title">
                                    <h2> </h2>
                                    <div class="clearfix"></div>
                                  </div>
                                  <h5>Archivos adjuntos</h5>
                                  <ul class="list-unstyled project_files">
                                    <li><a href="javascript:window.open('{{route('viewp1', $personaFicha->id)}}','mywindowtitle','width=800,height=400')"><i class="fa fa-file-pdf-o"></i> Fotocopia cédula</a>
                                    </li>
                                    <li><a href="javascript:window.open('{{route('viewp5', $personaFicha->id)}}','mywindowtitle','width=800,height=400')"><i class="fa fa-file-pdf-o"></i> Historia clínica</a>
                                    </li>
                                    <li><a href="javascript:window.open('{{route('viewp2', $personaFicha->id)}}','mywindowtitle','width=800,height=400')"><i class="fa fa-file-pdf-o"></i> Declaración de consentimiento</a>
                                    </li>
                                    <li><a href="javascript:window.open('{{route('viewp4', $personaFicha->id)}}','mywindowtitle','width=800,height=400')"><i class="fa fa-file-pdf-o"></i> Certificación EPS</a>
                                    </li>
                                    <li><a href="javascript:window.open('{{route('viewp6', $personaFicha->id)}}','mywindowtitle','width=800,height=400')"><i class="fa fa-file-pdf-o"></i> Certificación puntaje de SISBÉN </a>
                                    </li>
                                    <li><a href="javascript:window.open('{{route('viewp3', $personaFicha->id)}}','mywindowtitle','width=800,height=400')"><i class="fa fa-file-pdf-o"></i> Disentimiento informado</a>
                                    </li>
                                    </ul>


                            </blockquote>

                            <br />


                        </div>
                        <h3 class="text-center">{{$personaFicha->persona->nombre}} {{$personaFicha->persona->apellido}}</h3>

                        <!-- informacion adulto row -->
                        <div class="row invoice-info">

                            <div class="col-sm-4 invoice-col">

                                <hr>
                                <address>
                                    <strong>Cédula: </strong> {{$personaFicha->persona->id}}
                                    <br> <strong>Celular: </strong>
                                    {{$personaFicha->persona->celular}}
                                    <br> <strong>Dirección: </strong>
                                    {{$personaFicha->persona->direccion}}
                                    <br> <strong>Barrio: </strong>
                                    {{$personaFicha->persona->barrio}}
                                     <br> <strong>Cuidador:
                                    </strong> {{$personaFicha->acudiente->persona->nombre}}
                                    {{$personaFicha->acudiente->persona->apellido}}

                                </address>
                                <hr>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <hr>
                                <address>
                                    <strong>Fecha de nacimiento: </strong>
                                    {{$personaFicha->fechaNacimiento}}
                                    <br> <strong>Edad: </strong> {{$personaFicha->edad}} años
                                    <br> <strong>Género: </strong> {{$personaFicha->genero}}
                                    <br> <strong>Discapacidad: </strong>
                                    {{$personaFicha->discapacidad}}
                                    <br> <strong>Nivel sisbén: </strong>
                                    {{$personaFicha->nivelsisben}}
<br/><br/>
                                </address>
                                <hr>
                            </div>
                            <!-- /.col -->
                            <div class="col-sm-4 invoice-col">
                                <hr>
                                <address>
                                    <strong>Zona de residencia:
                                    </strong>{{$personaFicha->zona->nombrezona}}
                                    <br> <strong>EPS:
                                    </strong>{{$personaFicha->eps->nombreentidad}}
                                    <br> <strong>Régimen:
                                    </strong>{{$personaFicha->regimen->nombreregimen}}
                                    <br> <strong>Tipo de sangre:
                                    </strong>{{$personaFicha->sangre->nombresangre}}
                                    <br/> <br/><br/>

                                </address>
                                <hr>


                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->

                        <div class="col-md-9 col-sm-9">

                            <div class="x_panel card border-dark">
                                <div class="x_title">
                                    <h2 class="card-header bg-info mb-0 text-white alert-heading">
                                        Valoraciones</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">
                                        <div class="col-md-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <div class="btn-group col-md-6">
                                                        @foreach ($enfermeriaFicha as $item5)
                                                        <a href="{{route('enfermeriat', $item5->id)}}"  class="btn btn-outline-info"><i class="fas fa-capsules"></i> Enfermería <br/><small>{{$item5->created_at}}</small></a>
                                                        @endforeach

                                                    </div>
                                                    <div class="btn-group col-md-6">

                                                        @foreach ($fonoaudioFicha as $item6)
                                                        <a href="{{route('fonot', $item6->id)}}" class="btn btn-outline-info"><i class="fas fa-user-md"></i> Fonoaudiología <br/><small>{{$item6->created_at}}</small></a>
                                                        @endforeach
                                                    </div>
                                                    <div class="btn-group col-md-6">
                                                        @foreach ($nutricionFicha as $item4)
                                                        <a href="{{route('nutriciont', $item4->id)}}" class="btn btn-outline-info"><i class="fas fa-utensils"></i> Nutrición <br/><small>{{$item4->created_at}}</small></a>
                                                        @endforeach
                                                    </div>
                                                    <div class="btn-group col-md-6">
                                                        @foreach ($trabajosocialFicha as $item12)
                                                        <a href="{{route('trabajosocialt', $item12->id)}}" class="btn btn-outline-info"><i class="fas fa-briefcase"></i> Trabajo social <br/><small>{{$item12->created_at}}</small></a>
                                                        @endforeach
                                                    </div>
                                                    <div class="btn-group col-md-6">
                                                        @foreach ($trabajofisicoFicha as $item13)
                                                        <a href="{{route('trabajofisicot', $item13->id)}}" class="btn btn-outline-info"><i class="fas fa-futbol-o"></i> Actividad física <br/><small>{{$item13->created_at}}</small></a>
                                                        @endforeach
                                                    </div>
                                                    <div class="btn-group col-md-6">
                                                        <button  type="button" class="btn btn-outline-info dropdown-toggle"
                                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            Psicología <br/>
                                                        </button>
                                                        <div class="dropdown-menu">
                                                            @foreach ($psicosocialFicha as $item7)
                                                            <a class="dropdown-item" href="{{route('psicot', $item7->id)}}" >TEST DE YESAVAGE <br/><small>{{$item7->created_at}}</small></a>
                                                            @endforeach
                                                            @foreach ($psicosocialFicha2 as $item8)
                                                            <a class="dropdown-item" href="{{route('psicot2', $item8->id)}}">PFEFFER (FAQ) <br/><small>{{$item8->created_at}}</small></a>
                                                            @endforeach
                                                            @foreach ($psicosocialFicha3 as $item9)
                                                            <a class="dropdown-item" href="{{route('psicot3', $item9->id)}}">APGAR FAMILIAR <br/><small>{{$item9->created_at}}</small></a>
                                                            @endforeach
                                                            @foreach ($psicosocialFicha4 as $item10)
                                                            <a class="dropdown-item" href="{{route('psicot4', $item10->id)}}">TEST DE ZARIT <br/><small>{{$item10->created_at}}</small></a>
                                                            @endforeach
                                                            @foreach ($psicosocialFicha5 as $item11)
                                                            <a class="dropdown-item" href="{{route('psicot5', $item11->id)}}">MINI EXAMEN MENTA <br/><small>{{$item11->created_at}}</small></a>
                                                            @endforeach
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <!-- /.bitacoras -->
                        <div class="col-md-12 col-sm-12">
                            <div class="x_panel card border-dark">
                                <div class="x_title">
                                    <h2 class="card-header bg-info mb-0 text-white alert-heading">
                                        Bitácoras</h2>

                                    <div class="clearfix"></div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="card-box table-responsive">

                                        <table id="datatable-buttons" class="table table-striped table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr>
                                                    <th class="font-weight-bold">Profesional</th>
                                                    <th class="font-weight-bold">Especialidad</th>
                                                    <th class="font-weight-bold">Tipo</th>
                                                    <th class="font-weight-bold">Descripción</th>
                                                    <th class="font-weight-bold">Fecha</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($profesionalFicha as $item2)


                                                <tr>
                                                    <td>{{$concat= $item2->profesional->persona->nombre." ".$item2->profesional->persona->apellido}}
                                                    </td>
                                                    <td>{{$item2->profesional->especialidad}}</td>
                                                    <td>{{$item2->tipobitacora}}</td>
                                                    <td>{{$item2->descripcionbitacora}}</td>
                                                    <td>{{$item2->created_at}}</td>

                                                </tr>

                                                @endforeach

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th class="font-weight-bold">Profesional</th>
                                                    <th class="font-weight-bold">Especialidad</th>
                                                    <th class="font-weight-bold">Tipo</th>
                                                    <th class="font-weight-bold">Descripción</th>
                                                    <th class="font-weight-bold">Fecha</th>


                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->


@endsection
