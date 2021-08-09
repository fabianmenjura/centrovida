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
                <h2 class="card-header bg-info mb-0 text-white alert-heading">Cuidadores</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <!-- Split button -->
                    <div class="btn-list">
                      <a type="button"
                          class="btn waves-effect waves-light btn-rounded btn-outline-success" href="{{route('addacu')}}" > <i class="icon-user-follow"></i> Agregar</a>
                      <button type="button"
                          class="btn waves-effect waves-light btn-rounded btn-outline-info active" >  <i class="fas fa-search"></i> Ver listado</button>
                     </div>
                    <!-- Split button -->
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

                <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                  <thead>

                    <tr>

                        <th class="font-weight-bold">CÉDULA</th>
                        <th class="font-weight-bold">NOMBRE</th>
                        <th class="font-weight-bold">APELLIDO</th>
                        <th class="font-weight-bold">CELULAR</th>
                        <th class="font-weight-bold">DIRECCIÓN</th>
                        <th class="font-weight-bold">BARRIO</th>
                        <th class="font-weight-bold">PARENTESCO</th>
                        <th class="font-weight-bold">OCUPACIÓN</th>
                        <th class="font-weight-bold">ACCIÓN</th>
                      </tr>
                  </thead>
                  <tbody>
                    .@foreach ($acudientes as $item)

                    <tr>
                    <td>{{$item->persona->id}}</td>
                    <td>{{$item->persona->nombre}}</td>
                    <td>{{$item->persona->apellido}}</td>
                    <td>{{$item->persona->celular}}</td>
                    <td>{{$item->persona->direccion}}</td>
                    <td>{{$item->persona->barrio}}</td>
                    <td>{{$item->parentesco->nombre}}</td>
                    <td>{{$item->ocupacion}}</td>

                    <td>
                        <a href="{{route('editar1', $item->id)}}" class="btn btn-warning">Editar</a>
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
                        <th class="font-weight-bold">PARENTESCO</th>
                        <th class="font-weight-bold">OCUPACIÓN</th>
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

