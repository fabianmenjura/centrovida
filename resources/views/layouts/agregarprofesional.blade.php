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
                    class="nav-link active">
                    <i class="mdi mdi-account-circle d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">Agregar profesional</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{route('listprofesionales')}}"  aria-expanded="false" class="nav-link">
                    <i class="mdi mdi-settings-outline d-lg-none d-block mr-1"></i>
                    <span class="d-none d-lg-block">Listar profesionales</span>
                </a>
            </li>
        </ul>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
          <div class="x_panel card border-info ">
            <div class="x_title">
              <h2 class="font-weight-bold ">Datos generales<small>Nuevo profesional</small></h2>
              <ul class="nav navbar-right panel_toolbox">


                </ul>
              <div class="clearfix"></div>
            </div>
            <div class="x_content">
              <br/>
              <form action="{{route('store2')}}" method="POST">
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
                  <input type="text" class="form-control text-uppercase" name="especialidad" id="especialidad" placeholder="Especialidad" required>
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

                </div>
                <div class="ln_solid"></div>
                <div class="form-group row">
                    <div class="col-md-11 col-sm-9  offset-md-1">
                        <button type="submit" class="btn btn-success col-md-10 btn-round"><i
              class="fa fa-floppy-o"></i> Guardar</button>
              <button class="btn waves-effect col-md-1 waves-light btn-round btn-outline-light" type="reset"><i
                class="fas fa-paint-brush"></i></button>
        </div>
                  @if (session('agregar'))
                  <div class="alert alert-succes mt-3">
                      {{session('agregar')}}
                  </div>
                  @endif
                </div>

              </form>
            </form>

            </div>
          </div>



        </div>

      </div>

@endsection
