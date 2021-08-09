@extends('layouts.plantilla')
@section('content')
<div class="row">
    <div class="col-md-12 col-sm-12 ">
      <div class="x_panel card border-info">
        <div class="x_title">
          <h2 class="card-header bg-info mb-0 text-white alert-heading">ESCALA DE SOBRECARGA EMOCIONAL DEL CUIDADOR (TEST DE ZARIT)</small></h2>
          <ul class="nav navbar-right panel_toolbox">
            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
            </li>

            <li><a><i class="fas fa-hands-helping"></i></a>
            </li>
          </ul>
          <div class="clearfix"></div>
        </div>
        <div class="x_content">
            <p>Para realizar una nueva valoración, el adulto mayor debe estar previamente registrado.</p>
            <h4>Por favor seleccione el adulto mayor:</h4>

<hr>
          <br />
          <form action="{{route('storepsi4')}}" method="POST">
            @csrf
            <div class="col-md-12 col-sm-6">
                <select id="adulto" class="form-control" name="adulto">
                    @foreach ($adultos as $adultos)
                    {{$a=$adultos->persona->nombre}}
                    {{$b=$adultos->persona->apellido}}
                    {{$c=$adultos->persona->id}}
                    {{$concat = "CC: ".$c." - ".$a." ".$b."" }}
                        <option value="{{$adultos['id']}}">{{($concat)}}</option>
                    @endforeach
            </select>   <br />     <hr>
            </div>
            <form class="form-horizontal form-label-left">
                <div class="row">
                    <div class="col-lg-12 ">

                            <div class="card-body">
                                <div class="alert border-warning alert-dismissible " role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                                    </button>
                                    <strong>Indicación:</strong> Se puntua según la frecuencia que va desde 1 (Nunca ) a 5 (Casi siempre) <br><br>
                                    <strong>Opciones: <br></strong>1 = Nunca<br>2 = Rara vez<br>3 = Algunas veces<br>4 = Bastantes veces <br>5 = Casi siempre
                                  </div>
                                 <br>
                                <div class="row">

                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">1. ¿Piensa que su familiar le pide más ayuda de la que realmente necesita? <p>

                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta1" id="pregunta1" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">2. ¿Piensa que debido al tiempo que dedica a su familiar no tiene suficiente tiempo para
                                            usted? <p>

                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta2" id="pregunta2" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">3. ¿Se siente agobiado por intentar compatibilizar el cuidado de su familiar con otras
                                            responsabilidades? (trabajo-familia) <p>

                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta3" id="pregunta3" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">4. ¿Siente vergûenza con la conducta de su familiar? <p>

                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta4" id="pregunta4" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">5. ¿Se siente enfadado cuando esta cerca de su familiar? <p>

                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta5" id="pregunta5" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">6. ¿Piensa que el cuidar de su familiar afecta negativamente la relación que usted tiene con
                                            otros miembros de su familia? <p>

                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta6" id="pregunta6" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">7. ¿Tiene miedo por el futuro de su familiar? <p>

                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta7" id="pregunta7" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">8. ¿Piensa que su familiar depende de usted? <p>

                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta8" id="pregunta8" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">9. ¿Se siente tenso cuando esta cerca de su familiar? <p>

                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta9" id="pregunta9" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">10. ¿Piensa que su salud ha empeorado debido a tener que cuidar a su familiar? <p>

                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta10" id="pregunta10" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">11. ¿Piensa que no tiene tanta intimidad como le gustaria debido a tener que cuidar de su
                                            familiar? <p>

                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta11" id="pregunta11" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">12. ¿Piensa que su vida social se ha visto afectada negativamente por tener que cuidar de
                                            su familiar? <p>

                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta12" id="pregunta12" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">13. ¿Se siente incomodo por distanciarse de sus amistades debido a tener que cuidar a su
                                            familiar? <p>

                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta13" id="pregunta13" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">14. ¿Piensa que su familiar le considera a usted la unica persona que le puede cuidar? <p>

                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta14" id="pregunta14" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">15. ¿Piensa que no tiene suficientes ingresos económicos para los gastos de cuidar a su
                                            familiar ademas de sus otros gastos? <p>

                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta15" id="pregunta15" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">16. ¿Piensa que no serà capaz de cuidar a su familiar por mucho tiempo más? <p>

                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta16" id="pregunta16" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">17. ¿Siente que ha perdido el control de su vida desde que comenzó la enfermedad en su familiar? <p>

                                        <input type="radio" name="pregunta17" id="pregunta17" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta17" id="pregunta17" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta17" id="pregunta17" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta17" id="pregunta17" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta17" id="pregunta17" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">18. ¿Desearia poder dejar el cuidado de su familiar en otra persona? <p>

                                        <input type="radio" name="pregunta18" id="pregunta18" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta18" id="pregunta18" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta18" id="pregunta18" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta18" id="pregunta18" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta18" id="pregunta18" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">19. ¿Se siente indeciso sobre que hacer con su familiar? <p>

                                        <input type="radio" name="pregunta19" id="pregunta19" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta19" id="pregunta19" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta19" id="pregunta19" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta19" id="pregunta19" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta19" id="pregunta19" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">20. ¿Piensa que deberia hacer más por su familiar? <p>

                                        <input type="radio" name="pregunta20" id="pregunta20" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta20" id="pregunta20" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta20" id="pregunta20" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta20" id="pregunta20" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta20" id="pregunta20" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">21. ¿Piensa que podria cuidar mejor a su familiar? <p>

                                        <input type="radio" name="pregunta21" id="pregunta21" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta21" id="pregunta21" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta21" id="pregunta21" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta21" id="pregunta21" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta21" id="pregunta21" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <p class="font-weight-bold">22. Globalmente ¿Qué grado de “carga” experimenta por el hecho de cuidar a su familiar? <p>

                                        <input type="radio" name="pregunta22" id="pregunta22" class="form-input" value="Nunca" required/> Nunca <br>
                                        <input type="radio" name="pregunta22" id="pregunta22" class="form-input" value="Rara vez" required/> Rara vez <br>
                                        <input type="radio" name="pregunta22" id="pregunta22" class="form-input" value="Algunas veces" required/> Algunas veces <br>
                                        <input type="radio" name="pregunta22" id="pregunta22" class="form-input" value="Bastantes veces" required/> Bastantes veces <br>
                                        <input type="radio" name="pregunta22" id="pregunta22" class="form-input" value="Casi siempre" required/> Casi siempre <br>
                                        <br>
                                    </div>

                    </div>
                    <br>

                    <div class="item form-group ol-md-12">
                        <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Observaciones: <span class="required">*</span>
                        </label>
                        <div class="col-md-8 col-sm-6">
                            <textarea type="text" class="form-control" name="pregunta23" id="pregunta23" aria-label="With textarea"  required></textarea>

                       <br>  <br>  </div>
    <hr>
                      </div>
                    <div class="form-group row">
                        <div class="col-md-11 col-sm-9  offset-md-1">
                            <button type="submit" class="btn btn-success col-md-10 btn-round ">  <span aria-hidden="true"></span><i
                    class="fa fa-floppy-o"></i> Guardar</button>
                    <button class="btn waves-effect col-md-1 waves-light btn-round btn-outline-light" type="reset"><i
                    class="fas fa-paint-brush"></i></button>
                    </div>
                    </div>



                    @if (session('agregar'))
                <div class="alert alert-succes mt-3">
                    {{session('agregar')}}
                </div>

            @endif
                    </div>

                </div>
                </div>

              </form>
            </form>


          </div>




        </div>
    </div>
</div>





@endsection
