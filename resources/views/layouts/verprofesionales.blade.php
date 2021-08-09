@extends('layouts.plantilla')
@section('content')
<div class="row">

    <div class="conteiner-fluid">
        <ul class="nav nav-tabs mb-3">
            <li class="nav-item">
                <a href="{{route('home')}}"  aria-expanded="false" class="nav-link">

                    <span class="d-none d-lg-block"><i data-feather="home" class="feather-icon"></i></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('addapro')}}"  aria-expanded="true"
                    class="nav-link">
                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">Nuevo profesional</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('listprofesionales')}}"  aria-expanded="false" class="nav-link active">
                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">Listar profesionales</span>
                </a>
            </li>
        </ul>
        </div>
    </div>
    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">


        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel card border-info">
              <div class="x_title">
                <h2 class="font-weight-bold ">Listado<small> profesionales</small></h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>
              <div class="x_content">
                  <div class="row">
                      <div class="col-sm-12">
                        <div class="card-box table-responsive">
                <p class="text-muted font-13 m-b-30">
                La siguiente tabla muestra el total de acudientes registrados en el sistema, puede descargar o imprimir la tabla.
                </p>
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                        <th class="font-weight-bold">CÉDULA</th>
                        <th class="font-weight-bold">NOMBRE</th>
                        <th class="font-weight-bold">APELLIDO</th>
                        <th class="font-weight-bold">CELULAR</th>
                        <th class="font-weight-bold">DIRECCIÓN</th>
                        <th class="font-weight-bold">BARRIO</th>
                        <th class="font-weight-bold">ESPECIALIDAD</th>
                        <th class="font-weight-bold">ACCIÓN</th>
                      </tr>
                  </thead>
                  <tbody>
                    .@foreach ($profesionales as $item)
                    <tr>
                    <td>{{$item->persona->id}}</td>
                    <td>{{$item->persona->nombre}}</td>
                    <td>{{$item->persona->apellido}}</td>
                    <td>{{$item->persona->celular}}</td>
                    <td>{{$item->persona->direccion}}</td>
                    <td>{{$item->persona->barrio}}</td>
                    <td>{{$item->especialidad}}</td>

                    <td>
                        <a href="{{route('editar2', $item->id)}}" class="btn btn-warning">Editar</a>
                    </td>
                    </tr>
        @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th class="font-weight-bold">CÉDULA</th>
                        <th class="font-weight-bold">NOMBRE</th>
                        <th class="font-weight-bold">APELLIDO</th>
                        <th class="font-weight-bold">CELULAR</th>
                        <th class="font-weight-bold">DIRECCIÓN</th>
                        <th class="font-weight-bold">BARRIO</th>
                        <th class="font-weight-bold">ESPECIALIDAD</th>
                        <th class="font-weight-bold">ACCIÓN</th>
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
    <!-- /page content -->


@endsection
