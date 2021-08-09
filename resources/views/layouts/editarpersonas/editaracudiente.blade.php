<script>
    function f_Cmb(){
            document.frm.action="{{route('update2',$acudienteActualizar->persona->id)}}";
            document.frm.submit();
    }

    function f_Cmb1(){
            document.frm.action="{{route('update1',$acudienteActualizar->id)}}";
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
                    <label for="exampleInputEmail1">Cédula</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$acudienteActualizar->persona->id}}"
                        class="form-control" placeholder="Ingrese su nombre" disabled>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" name="nombre1" id="nombre1" value="{{$acudienteActualizar->persona->nombre}}"
                        class="form-control" placeholder="Ingrese su nombre" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Apellido</label>
                    <input type="text" name="apellido" id="apellido" value="{{$acudienteActualizar->persona->apellido}}"
                        class="form-control" placeholder="Ingrese su apellido" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Celular</label>
                    <input type="text" name="celular" id="celular" value="{{$acudienteActualizar->persona->celular}}"
                        class="form-control" placeholder="Ingrese su celuco" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Direccion</label>
                    <input type="text" name="direccion" id="direccion"
                        value="{{$acudienteActualizar->persona->direccion}}" class="form-control"
                        placeholder="Ingrese su direccion" required>

                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Barrio</label>
                    <input type="text" name="barrio" id="barrio" value="{{$acudienteActualizar->persona->barrio}}"
                        class="form-control" placeholder="Ingrese su barrio" required>
                </div>
                <div class="form-group col-md-12">
                    <input name="bt1" class="btn btn-success btn-block" type="submit" value="Actualizar Datos Generales" onclick="f_Cmb();" />
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Ocupación</label>
                    <input type="text" name="ocupacion" id="ocupacion" value="{{$acudienteActualizar->ocupacion}}"
                        class="form-control" placeholder="" required>

                </div>

                <div class="form-group col-md-6">
                    <label for="exampleInputEmail1">Parentesco</label>

                    <select id="parentesco" class="form-control" name="parentesco">
                        <option value="{{$acudienteActualizar->parentesco_id}}" selected>{{$acudienteActualizar->parentesco->nombre}}</option>
                        @foreach ($paren as $item )
                        <option value="{{$item['id']}}" >{{$item['nombre']}}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group col-md-12">
                    <input class="btn btn-success btn-block" name="bt2" type="submit" value="Actualizar Datos Del Acudiente" onclick="f_Cmb1();" />
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
