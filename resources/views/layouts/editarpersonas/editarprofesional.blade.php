<script>
    function f_Cmb(){
            document.frm.action="{{route('update2',$profesionalActualizar->persona->id)}}";
            document.frm.submit();
    }

    function f_Cmb1(){
            document.frm.action="{{route('update3',$profesionalActualizar->id)}}";
            document.submit();
    }
    </script>

@extends('layouts.plantillas.editar')
@section('content2')

<div class="row">

    <form name="frm" id="frm" action="" method="POST">
        @method('PUT')
        @csrf
        <form>
            <div class="row">
                <label name="idc" id="idc" for="exampleInputEmail1"></label>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$profesionalActualizar->persona->nombre}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="{{$profesionalActualizar->persona->apellido}}"
                        class="form-control" placeholder="Ingrese su apellido" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Celular</label>
                    <input type="text" name="celular" id="celular" value="{{$profesionalActualizar->persona->celular}}"
                        class="form-control" placeholder="Ingrese su celuco" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input type="text" name="direccion" id="direccion"
                        value="{{$profesionalActualizar->persona->direccion}}" class="form-control"
                        placeholder="Ingrese su direccion" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Barrio</label>
                    <input type="text" name="barrio" id="barrio" value="{{$profesionalActualizar->persona->barrio}}"
                        class="form-control" placeholder="Ingrese su barrio" required>
                </div>
                <div class="form-group col-md-12">
                    <input name="bt1" class="btn btn-success btn-block" type="submit" value="Actualizar Datos Generales" onclick="f_Cmb();" />
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Especialidad</label>
                    <input type="text" name="especialidad" id="especialidad" value="{{$profesionalActualizar->especialidad}}"
                        class="form-control" placeholder="Ingrese su barrio" required>

                </div>


                <div class="form-group col-md-12">
                    <input class="btn btn-success btn-block" name="bt2" type="submit" value="Actualizar Datos Del Profesional" onclick="f_Cmb1();" />
                 </div>
            </div>

        </form>
    </form>



</div>





@if (session('agregar'))
<div class="alert alert-succes mt-3">
    {{session('agregar')}}
</div>
@endif
</div>
@endsection
