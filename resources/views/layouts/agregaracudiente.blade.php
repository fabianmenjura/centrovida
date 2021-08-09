@extends('layouts.plantilla')
@section('content')
    <div class="row">
        <div class="col-md-12">
          <div class="x_panel card border-info">
            <div class="x_title">
              <h2 class="card-header bg-info mb-0 text-white alert-heading">Nuevo cuidador</small></h2>
              <ul class="nav navbar-right panel_toolbox">
                <!-- Split button -->
                <div class="btn-list">

                  <a type="button"
                      class="btn waves-effect waves-light btn-rounded btn-outline-success active" href="#" > <i class="icon-user-follow"></i> Agregar</a>
                  <a type="button" href="{{route('listacudientes')}}"
                      class="btn waves-effect waves-light btn-rounded btn-outline-info" >  <i class="fas fa-search"></i> Ver listado</a>
                 </div>
                <!-- Split button -->
                           </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br/>
              <form action="{{route('store')}}" method="POST">
                @csrf
              <form class="form-label-left input_mask">

                <div class="col-md-12 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase has-feedback-left" name="cc" id="cc" placeholder="Cédula" required>
                  <span class="fa fa-circle-o-notch form-control-feedback left" aria-hidden="true"></span>

                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase has-feedback-left" name="nombre" id="nombre" placeholder="Nombres" required>
                    <span class="fa fa-user form-control-feedback left" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase" name="apellido" id="apellido" placeholder="Apellidos">
                  <span class="fa fa-user form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase has-feedback-left" data-inputmask="'mask' : '(999) 999-9999'" name="celular" id="celular" placeholder="Celular" required>
                    <span class="fa fa-phone form-control-feedback left" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase" name="ocupacion" id="ocupacion" placeholder="Ocupación" required>
                  <span class="fa fa-briefcase form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                    <input type="text" class="form-control text-uppercase has-feedback-left" name="direccion" id="direccion" placeholder="Dirección" required>
                    <span class="fa fa-building-o form-control-feedback left" aria-hidden="true"></span>
                  </div>
                <div class="col-md-6 col-sm-6  form-group has-feedback">
                  <input type="text" class="form-control text-uppercase" name="barrio" id="barrio" placeholder="Barrio" required>
                  <span class="fa fa-building-o form-control-feedback right" aria-hidden="true"></span>
                </div>
                <div class="form-group row">
                    <label class="control-label col-md-3 col-sm-3 text-right">Parentesco</label>
                    <div class="col-md-8">
                    <select id="parentesco" class="select2_single form-control"  name="parentesco">
                        @foreach ($paren as $item)
                        <option value="{{$item['id']}}">{{$item['nombre']}}</option>
                        @endforeach
                    </select>

                </div>
                </div>
                <div class="ln_solid"></div>
                <div class="form-group row">
                    <div class="col-md-11 col-sm-9  offset-md-1">
                        <button type="submit" class="btn btn-success col-md-10 btn-round"><i
              class="fa fa-floppy-o"></i> Guardar acudiente</button>
              <button class="btn waves-effect col-md-1 waves-light btn-round btn-outline-light" type="reset"><i
                class="fas fa-paint-brush"></i></button>
        </div>
                </div>
                @if (session('agregar'))
                <div class="alert alert-succes mt-3">
                    {{session('agregar')}}
                </div>
                @endif
              </form>
            </form>
            </div>
          </div>



        </div>

      </div>


      @endsection

