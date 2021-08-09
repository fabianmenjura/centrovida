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
                <h2 class="card-header bg-info mb-0 text-white alert-heading">Reporte General</h2>
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
                <p>Total Adultos mayores en el sistema {{$totaladul}}</p>

                <p>Conteo de generos</p>
                   Hombres {{$hombres}} <br>
                   Mujeres {{$mujeres}} <br>
                   Otros {{$otros}} <br><br>
                <p>Estado Actual de los Adultos</p>
                   Se encuentran {{$estadoA}} Activos <br>
                   Se encuentran {{$estadoI}} Incativos <br><br>
                   Se han realizado {{$bitacorasC}} visitas solicitadas en las bitacoras<br>
                   Se han realizado {{$bitacorasC2}} visitas de rutina en las bitacoras<br>
                   Se han realizado {{$bitacorasC3}} seguimientos en las bitacoras<br>
                   Se han realizado {{$bitacorasC4}} visitas domicilarias en las bitacoras<br>
                   Se encuentran actualmente {{$trabajosocialC1}} adultos mayores empleados<br>
                   Se encuentran actualmente {{$trabajosocialC2}} adultos mayores desempleados<br>
                   Se encuentran actualmente {{$trabajosocialC3}} adultos mayores pensionados<br>

                   Actualmente {{$trabajosocialC4}} viven en zona residencial, {{$trabajosocialC5}} en zona comercial y {{$trabajosocialC6}} en zona rural

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

