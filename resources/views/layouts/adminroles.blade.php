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
                <h2 class="card-header bg-info mb-0 text-white alert-heading">Usuarios Registrados</h2>
                <ul class="nav navbar-right panel_toolbox">
                    <!-- Split button -->
                    
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

                        <th class="font-weight-bold">Id</th>
                        <th class="font-weight-bold">Usuario</th>      
                        <th class="font-weight-bold">Rol Actual</th>              
                        <th class="font-weight-bold">Modificar Rol</th>
                        <th class="font-weight-bold">Actualizar</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($users as $user)

                    <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>         
                    <td>
                        @foreach ($user->roles as $role)
                        {{$role->description}}
                        @endforeach  
                    </td>

                    <td>
                        @foreach ($user->roles as $role)

                        <select id="role" class="form-control" name="role">
                            <option value="{{$role->id}}" selected>{{$role->description}}</option>                            
                            
                            @foreach ($rols as $item )
                            <option value="{{$item['id']}}" >{{$item['description']}}</option>
                            @endforeach

                        </select>

                       
                        @endforeach  
                       
                    </td>
                    <td>
                        <a href="" class="btn btn-warning">No Funciona, No tocar!</a>
                    </td>
                    </tr>
        @endforeach
                  </tbody>
                  <tfoot>
                    <tr>
                        <th class="font-weight-bold">CÉDULA</th>
                        <th class="font-weight-bold">NOMBRE</th>              
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

