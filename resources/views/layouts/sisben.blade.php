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
            <h2 class="card-header bg-info mb-0 text-white alert-heading">Consulta del puntaje SISBEN</h2>
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
                        <embed width="950" height="600" src="https://wssisbenconsulta.sisben.gov.co/dnp_sisbenconsulta/dnp_sisben_consulta.aspx"> </embed>
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

