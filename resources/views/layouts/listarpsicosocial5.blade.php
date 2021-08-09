@extends('layouts.plantillas.editar')
@section('content2')

<div class="row">

    <form>
        @csrf
        <form>
            <div class="row">
                <h1 class="form-group col-md-12">Atención Nutricional</h1>

                <div class="row">
                    <div class="  invoice-header">
                        <h2 class="text-uppercase">
                            <i class="fa fa-user"></i> {{$psico->adulto->persona->id}}

                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="  invoice-header">
                        <h2 class="text-uppercase">
                            <i class="fa fa-user"></i> {{$psico->adulto->persona->nombre}}
                            {{$psico->adulto->persona->apellido}}

                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="  invoice-header">
                        <h2 class="text-uppercase">
                            <i class="fa fa-user"></i> {{$psico->adulto->edad}}

                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="  invoice-header">
                        <h2 class="text-uppercase">
                            <i class="fa fa-user"></i> {{$psico->adulto->persona->direccion}}

                        </h2>
                    </div>
                    <!-- /.col -->
                </div>
                <div class="row">
                    <div class="  invoice-header">
                        <h2 class="text-uppercase">
                            <i class="fa fa-user"></i> {{$psico->adulto->persona->celular}}

                        </h2>
                    </div>
                    <!-- /.col -->
                </div>

                <h2>Por favor dígame la fecha de hoy</h2>

                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Día de la semana</label>

                    <input type="text" name="pregunta1" id="pregunta1" class="form-control" value={{$psico->pregunta1}}
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Mes</label>

                    <input type="text" name="pregunta2" id="pregunta2" class="form-control" value={{$psico->pregunta2}}
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Año</label>

                    <input type="text" name="pregunta3" id="pregunta3" class="form-control" value={{$psico->pregunta3}}
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Día</label>

                    <input type="text" name="pregunta4" id="pregunta4" class="form-control" value={{$psico->pregunta4}}
                        disabled>
                </div>
                <h2>Ahora le voy a nombrar tres objetos. Después que se los diga, le voy a pedir que repita en
                    voz alta los que recuerde, en cualquier orden. Recuerde los objetos porque se los voy a pedir
                    más adelante. ¿Tiene alguna pregunta para hacerme?</h2>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Árbol</label>

                    <input type="text" name="pregunta5" id="pregunta5" class="form-control" value={{$psico->pregunta5}}
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Mesa</label>

                    <input type="text" name="pregunta6" id="pregunta6" class="form-control" value={{$psico->pregunta6}}
                        disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Avión</label>

                    <input type="text" name="pregunta7" id="pregunta7" class="form-control" value={{$psico->pregunta7}}
                        disabled>
                </div>
                <h2>Ahora voy a decirle unos números y quiero que me los repita de atrás para adelante</h2>
                <h3>Numero: 13579 Respuesta Correcta: 97531</h3>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Número de dígitos en el orden correcto:</label>

                    <input type="text" name="pregunta8" id="pregunta8" class="form-control" value={{$psico->pregunta8}}
                        disabled>
                </div>
                <h2>Le voy a dar un papel, tomelo con su mano derecha, doblelo por la mitad con ambas manos y
                    coloquelo sobre sus piernas</h2>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Toma papel con mano derecha</label>

                    <input type="text" name="pregunta9" id="pregunta9" class="form-control" value={{$psico->pregunta9}}
                        disabled>
                </div>

                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Dobla el papel por la mitad con ambas manos</label>

                    <input type="text" name="pregunta10" id="pregunta10" class="form-control"
                        value={{$psico->pregunta10}} disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Coloca el papel sobre las piernas</label>

                    <input type="text" name="pregunta11" id="pregunta11" class="form-control"
                        value={{$psico->pregunta11}} disabled>
                </div>
                <h2>Hace un momento le leí una serie de palabras y usted repitio las que recordó, por favor
                    digame las que recuerda</h2>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Árbol</label>

                    <input type="text" name="pregunta12" id="pregunta12" class="form-control"
                        value={{$psico->pregunta12}} disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Mesa</label>

                    <input type="text" name="pregunta13" id="pregunta13" class="form-control"
                        value={{$psico->pregunta13}} disabled>
                </div>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">Avión</label>

                    <input type="text" name="pregunta14" id="pregunta14" class="form-control"
                        value={{$psico->pregunta14}} disabled>
                </div>
                <h2>Dibujo: Muestre el dibujo, la acción esta correcta si la figura no se cruza más de la mitad. Anote
                    un punto
                    si está correcto FABIAN ACÁ TOCA PONER LA IMAGEN DE LOS DOS CIRCULOS PENDEJOS, NO SE COMO PONERLA XD
                </h2>
                <div class="form-group col-md-3">
                    <label for="exampleInputEmail1">¿Logro realizar dibujo de manera satisfactoría?</label>

                    <input type="text" name="pregunta15" id="pregunta15" class="form-control"
                        value={{$psico->pregunta15}} disabled>
                </div>
                <div class="form-group col-md-12">
                    <label for="exampleInputEmail1">Observaciones</label>

                    <input type="text" name="pregunta16" id="pregunta16" class="form-control"
                        value={{$psico->pregunta16}} disabled>
                </div>

            </div>
</div>

</form>





</form>

</div>
@endsection
