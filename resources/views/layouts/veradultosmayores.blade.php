@extends('layouts.plantilla')
@section('content')

    <!-- page content -->
    <div class="right_col" role="main">
      <div class="">


        <div class="clearfix"></div>

        <div class="row">

          <div class="col-md-12 col-sm-12 ">
            <div class="x_panel card border-info">
              <div class="x_title">
                <h2 class="card-header bg-info mb-0 text-white alert-heading">Adulto mayor</small></h2>
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
                La siguiente tabla muestra el total de adultos mayores registrados en el sistema, puede descargar o imprimir la tabla
                </p>
                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>
                    <tr>
                        <th class="font-weight-bold">CARPETA</th>
                        <th class="font-weight-bold">CÉDULA</th>
                        <th class="font-weight-bold">NOMBRES</th>
                        <th class="font-weight-bold">APELLIDOS</th>
                        <th class="font-weight-bold">CELULAR</th>
                        <th class="font-weight-bold">ACCION</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($adultos as $item)

                    <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->persona->id}}</td>
                    <td>{{$item->persona->nombre}}</td>
                    <td>{{$item->persona->apellido}}</td>
                    <td>{{$item->persona->celular}}</td>

                    <td>
                        <a href="{{route('fichat', $item->id)}}" class="btn btn-primary btn-rounded" alt="Ver ficha"> <i class="icon-eye"></i> Ver</a>
                        <a href="{{route('editar3', $item->id)}}" class="btn btn-warning btn-rounded"><i class="icon-note"></i></a>
                    </td>
                    </tr>

        @endforeach

                  </tbody>
                  <tfoot>
                    <tr>
                  <th class="font-weight-bold">CARPETA</th>
                        <th class="font-weight-bold">CÉDULA</th>
                        <th class="font-weight-bold">NOMBRES</th>
                        <th class="font-weight-bold">APELLIDOS</th>
                        <th class="font-weight-bold">CELULAR</th>
                        <th class="font-weight-bold">ACCION</th>

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
