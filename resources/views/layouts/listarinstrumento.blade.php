@extends('layouts.plantillas.editar')
@section('content2')

<div class="row">

<form action="{{route('storei')}}" method="POST">
    @csrf
<form>
    <div class="row">
      <h1 class="form-group col-md-12">Ingreso de Instrumento</h1>

      <h4 class="form-group col-md-12">I. Datos Generales</h4>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Nombre</label>
        <input type="text" name="nombre" id="nombre" class="form-control" value={{$instrumento->adulto->persona->nombre}} disabled>
      </div>
      <div class="form-group col-md-6">
        <label for="exampleInputEmail1">Apellido</label>
        <input type="text" name="apellido" id="apellido" class="form-control" value={{$instrumento->adulto->persona->apellido}} disabled>
        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Estado civil </label>
                <input type="text" name="pregunta1" id="pregunta1" class="form-control" value={{$instrumento->pregunta1}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Nivel De Escolaridad </label>

            <input type="text" name="pregunta2" id="pregunta2" class="form-control" value={{$instrumento->pregunta2}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Con cuales servicios públicos cuenta</label>
            <input type="text" name="pregunta3" id="pregunta3" class="form-control" value={{$instrumento->pregunta3}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Usted trabaja actualmente? si su respuesta es si, indique en que trabaja</label>
            <input type="text" name="pregunta4" id="pregunta4" class="form-control" value={{$instrumento->pregunta4}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">Usted vive:</label>

                <input type="text" name="pregunta5" id="pregunta5" class="form-control" value={{$instrumento->pregunta5}} disabled>

        </div>
        <h4 class="form-group col-md-12">II. Estado de Salud</h4>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Como se siente con respecto a su salud actualmente?</label>

                <input type="text" name="pregunta6" id="pregunta6" class="form-control" value={{$instrumento->pregunta6}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Comparada con su salud con otras personas de la misma edad la suya es?</label>

                <input type="text" name="pregunta7" id="pregunta7" class="form-control" value={{$instrumento->pregunta7}} disabled>

        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta usted alguna(s) de las siguientes enfermedades?
                -	H.T.A.
                -	Insuficiencia cardiaca
                -	EPOC
                -	Asma
                -	Osteoartritis
                -	Artritis reumatoidea
                -	Diabetes
                -	Artrosis
                -	E.C.V
                -	Enf. Parkinson
                -	Cáncer
                -	Insuficiencia vascular periférica
                -	Incontinencia urinaria
                -	Otra
                -	¿Cual?
                </label>
            <input type="text" name="pregunta8" id="pregunta8" class="form-control" value={{$instrumento->pregunta8}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Le han explicado en que consiste cada enfermedad que le han diagnosticado?</label>

                <input type="text" name="pregunta9" id="pregunta9" class="form-control" value={{$instrumento->pregunta9}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿La(s) enfermedad(es) que le han diagnosticado, le causa(n) dolor impidiendo sus actividades diarias?</label>

                <input type="text" name="pregunta10" id="pregunta10" class="form-control" value={{$instrumento->pregunta10}} disabled>

        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿En su familia hay antecedentes de las siguientes enfermedades?
                -	H.T.A.
                -	Diabetes
                -	Cardiopatías
                -	EPOC
                -	Asma
                -	Enfermedad reumática
                -	Demencia
                -	Depresión
                -	Epilepsia
                -	Cáncer
                -	Obesidad
                -	Enfermedades renales
                -	Dislipidemias
                -	Otras
                </label>
            <input type="text" name="pregunta11" id="pregunta11" class="form-control" value={{$instrumento->pregunta11}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cuántos medicamentos consume actualmente?</label>
                <input type="text" name="pregunta12" id="pregunta12" class="form-control" value={{$instrumento->pregunta12}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Tienen dificultades en el incumplimiento de tratamiento farmacológico?</label>
               <input type="text" name="pregunta13" id="pregunta13" class="form-control" value={{$instrumento->pregunta13}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Consume medicamentos farmacológicos y/o naturales por auto prescripción?</label>

                <input type="text" name="pregunta14" id="pregunta14" class="form-control" value={{$instrumento->pregunta14}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Ha presentado caídas en el último año?</label>

                <input type="text" name="pregunta15" id="pregunta15" class="form-control" value={{$instrumento->pregunta15}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Las caídas o algún accidente le han dejado secuelas incapacitantes?</label>

                <input type="text" name="pregunta16" id="pregunta16" class="form-control" value={{$instrumento->pregunta16}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Siente temor a realizar sus actividades diarias como consecuencia de alguna caída?</label>

                <input type="text" name="pregunta17" id="pregunta17" class="form-control" value={{$instrumento->pregunta17}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Con qué frecuencia realiza ejercicio físico?</label>

                <input type="text" name="pregunta18" id="pregunta18" class="form-control" value={{$instrumento->pregunta18}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Usted duerme bien?</label>

                <input type="text" name="pregunta19" id="pregunta19" class="form-control" value={{$instrumento->pregunta19}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Para dormir necesita consumir algún tipo de medicamento?</label>

                <input type="text" name="pregunta20" id="pregunta20" class="form-control" value={{$instrumento->pregunta20}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Usted fuma?</label>

                <input type="text" name="pregunta21" id="pregunta21" class="form-control" value={{$instrumento->pregunta21}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Usted consume bebidas alcohólicas?</label>

                <input type="text" name="pregunta22" id="pregunta22" class="form-control" value={{$instrumento->pregunta22}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cómo son sus hábitos alimenticios?</label>

            <input type="text" name="pregunta23" id="pregunta23" class="form-control" value={{$instrumento->pregunta23}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Mantiene una rutina diaria para la actividad y el sueño?</label>

                <input type="text" name="pregunta24" id="pregunta24" class="form-control" value={{$instrumento->pregunta24}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Mantiene una rutina diaria para la higiene y aseo personal?</label>

                <input type="text" name="pregunta25" id="pregunta25" class="form-control" value={{$instrumento->pregunta25}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Mantiene el mismo horario de comidas todos los días?</label>

                <input type="text" name="pregunta26" id="pregunta26" class="form-control" value={{$instrumento->pregunta26}} disabled>

        </div>
        <h4 class="form-group col-md-12">III. Funcionalidad</h4>
        <h5 class="form-group col-md-12">Habilidades Sensorio-Motrices</h5>

        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para ver?</label>

                <input type="text" name="pregunta27" id="pregunta27" class="form-control" value={{$instrumento->pregunta27}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Ve bien de cerca y de lejos. Posiblemente use anteojos <br>
                •	Leve: Usa anteojos, pero a pesar de ello se le dificultan algunas actividades que requieren agudeza visual: leer, escribir, dibujar, tejer, coser, otras.<br>
                •	Moderada: No puede realizar actividades que requieren agudeza visual (no compensada con el uso de anteojos), tiene dificultades para movilizarse y reconocer rostros<br>
                •	Severa: Invidente. Solo diferencia los cambios luminosos
                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para oír?</label>

                <input type="text" name="pregunta28" id="pregunta28" class="form-control" value={{$instrumento->pregunta28}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Oye bien. Volumen normal de voz<br>
                •	Leve: Es necesario elevar un poco el volumen de la voz. No necesita audífono.<br>
                •	Moderada: Necesita audífono para escuchar<br>
                •	Severa: No oye. A pesar del uso de audífonos se hace muy difícil la comunicación
                </label>
        </div>
        <div class="form-group col-md-12">

                <input type="text" name="pregunta29" id="pregunta29" class="form-control" value={{$instrumento->pregunta29}} disabled>

            <label for="exampleInputEmail1">Instrucción: Desplazar sobre la piel del usuario evaluado 3 texturas diferentes (debe permanecer con los ojos cerrados.  Aplicar en hemicuerpo izquierdo y derecho en usuarios con hemiplejia.<br>

                Suave: Algodón o Seda<br>
                Media: Esponja o Lana<br>
                Áspera: Estropajo o lija<br>


                •	Ninguna: Identifica fácilmente las texturas en el orden de aplicación<br>
                •	Leve: No lo hace fácilmente, pero acierta<br>
                •	Moderada: Al cambiar el orden o el lugar de aplicación duda o se equivoca<br>
                •	Severa: No diferencia texturas a través del tacto

                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta dificultad para reconocer objetos a través del tacto?</label>

                <input type="text" name="pregunta30" id="pregunta30" class="form-control" value={{$instrumento->pregunta30}} disabled>

            <label for="exampleInputEmail1">Instrucción: Poner una bolsa oscura, diferentes objetos (esfero, cuchara, pelota, fichas, otras). El usuario debe identificar los objetos con los ojos cerrados.
                <br>
                •	Ninguna: Identifica fácilmente los objetos<br>
                •	Leve: Lo hace fácilmente. Desacierta en 1 de 5 objetos<br>
                •	Moderada: Desacierta en 3 de 5 objetos<br>
                •	Severa: No reconoce los objetos
                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para expresarse verbalmente?</label>

                <input type="text" name="pregunta31" id="pregunta31" class="form-control" value={{$instrumento->pregunta31}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Pronuncia e identifica fácilmente las palabras en una conversación sencilla<br>
                •	Leve: Presenta alguna dificultad en la pronunciación o identificación de las palabras en una conversación sencilla. Conversación lenta, pero logra comunicarse eficazmente.<br>
                •	Moderada: Presenta gran dificultad para pronunciar o identificar palabras para mantener conversación. Se comunica con monosílabos.<br>
                •	Severa: Dificultad grave para pronunciar palabras. Le es muy difícil comunicarse verbalmente.

                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para mantener la posición sentado?</label>

                <input type="text" name="pregunta32" id="pregunta32" class="form-control" value={{$instrumento->pregunta32}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Mantiene la posición sentado, erguido y adecuadamente.<br>
                •	Leve: Mantiene la posición sentado, pero se inclina hacia un lado o necesita silla con apoya brazos.<br>
                •	Moderada: Se puede mantener sentado, pero con ayuda de aditamentos (Cojines o almohadas)<br>
                •	Severa: No se puede mantener sentado


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para levantarse de la silla y volverse a sentar?</label>

                <input type="text" name="pregunta33" id="pregunta33" class="form-control" value={{$instrumento->pregunta33}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Se levanta y se sienta sin ninguna dificultad<br>
                •	Leve: Se levanta y se sienta con ayuda de una persona o apoyándose en apoyabrazos.<br>
                •	Moderada: No puede realizarlo sin ayuda. Con ayuda se levanta y se sienta de la silla<br>
                •	Severa: No puede levantarse y sentarse


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para mantenerse de pie?</label>

                <input type="text" name="pregunta34" id="pregunta34" class="form-control" value={{$instrumento->pregunta34}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Mantiene la posición de pie sin ayuda, erguido y con buen equilibrio<br>
                •	Leve: Mantiene la posición de pie, pero se inclina hacia un lado o necesita bastón o caminador<br>
                •	Moderada: Se puede mantener de pie, pero con ayuda de una persona y aditamentos como bastón y caminador<br>
                •	Severa: No puede mantenerse de pie


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para dar media vuelta en posición de pie?</label>

                <input type="text" name="pregunta35" id="pregunta35" class="form-control" value={{$instrumento->pregunta35}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Da media vuelta sin ayuda y con buen equilibrio<br>
                •	Leve: Da media vuelta, pero necesita apoyo de bastón o caminador. Lo realiza de manera insegura<br>
                •	Moderada: No lo puede hacer solo. Necesita la ayuda de otra persona<br>
                •	Severa: No puede mantenerse de pie.


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para asir o agarrar objetos con las manos?</label>

                <input type="text" name="pregunta36" id="pregunta36" class="form-control" value={{$instrumento->pregunta36}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Puede asir objetos grandes y pequeños sin dificultad. Con las dos manos<br>
                •	Leve: Puede asir objetos grandes sin dificultad. Se dificulta un poco el agarre de objetos pequeños. Lo hace bien con una mano y la otra no, pero participan las dos manos en la acción.<br>
                •	Moderada: No puede asir objetos grandes ni pequeños con las dos manos. Puede hacerlo con una mano, pero con la otra no puede hacerlo.<br>
                •	Severa: imposibilidad de asir o agarrar objetos


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para sostener objetos con las manos?</label>

                <input type="text" name="pregunta37" id="pregunta37" class="form-control" value={{$instrumento->pregunta37}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Puede sostener objetos grandes y pequeños sin dificultad. Con las dos manos.<br>
                •	Leve: Puede sostener objetos grandes sin dificultad. Se dificulta un poco sostener objetos pequeños. Lo hace bien con una mano y la otra no, pero participan las dos manos en acción<br>
                •	Moderada: No puede sostener objetos grandes ni pequeños con las dos manos. Puede hacerlo con una mano, pero con la otra no puede hacerlo.<br>
                •	Severa: imposibilidad para sostener objetos con las manos.


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para caminar?</label>

                <input type="text" name="pregunta38" id="pregunta38" class="form-control" value={{$instrumento->pregunta38}} disabled>

            <label for="exampleInputEmail1">•	Ninguna: Camina sin dificultad. No requiere ningún tipo de ayuda.<br>
                •	Leve: Necesita ayuda de aditamentos como bastón o caminador o supervisión de una persona.<br>
                •	Moderada: Necesita gran ayuda de una o mas personas. Necesita ayuda de una persona y aditamentos. No puede desplazare por más de 10 metros.<br>
                •	Severa: No puede caminar


                </label>
        </div>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Presenta alteración en la prueba dedo-nariz?</label>

                <input type="text" name="pregunta39" id="pregunta39" class="form-control" value={{$instrumento->pregunta39}} disabled>

            <label for="exampleInputEmail1">Instrucción: Pida a la persona que lleve su brazo extendido hacia afuera y desde esta posición, que toque la punta de la nariz con el dedo índice. Observe el movimiento y califique.<br>

                •	Ninguna: Lo realiza sin titubear.<br>
                •	Leve: Lo realiza lentamente.<br>
                •	Moderada: No logra hacerlo bien, pero intenta el movimiento<br>
                •	Severa: No lo puede hacer
                </label>
        </div>
        <h5 class="form-group col-md-12">Habilidades Cognitivas</h5>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Sabe en qué fecha estamos?</label>

                <input type="text" name="pregunta40" id="pregunta40" class="form-control" value={{$instrumento->pregunta40}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Recuerda la fecha de su nacimiento?</label>

                <input type="text" name="pregunta41" id="pregunta41" class="form-control" value={{$instrumento->pregunta41}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Describe donde vive actualmente?</label>

                <input type="text" name="pregunta42" id="pregunta42" class="form-control" value={{$instrumento->pregunta42}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cree usted que tiene problemas de memoria?</label>

                <input type="text" name="pregunta43" id="pregunta43" class="form-control" value={{$instrumento->pregunta43}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Puede recordar los nombres de familiares o personas con quienes vive o le acompañan actualmente?</label>
            <label for="exampleInputEmail1">Instrucción: verifique esta información con la de datos generales, o con familiares y acompañantes.</label>


                <input type="text" name="pregunta44" id="pregunta44" class="form-control" value={{$instrumento->pregunta44}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Puede repetir un listado de 5 palabras en orden?</label>
            <label for="exampleInputEmail1">Instrucción: Pronuncie claramente un listado de cinco palabras sencillas (por ejemplo: perro, casa, árbol, naranja, pocillo), pida al usuario que las repita en orden.</label>


                <input type="text" name="pregunta45" id="pregunta45" class="form-control" value={{$instrumento->pregunta45}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para contar en series de dos en dos?</label>

                <input type="text" name="pregunta46" id="pregunta46" class="form-control" value={{$instrumento->pregunta46}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para realizar operaciones matemáticas sencillas?</label>

                <input type="text" name="pregunta47" id="pregunta47" class="form-control" value={{$instrumento->pregunta47}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para diferenciar figuras geométricas básicas?</label>
            <label for="exampleInputEmail1">Instrucción: presente al usuario figuras geométricas y pídale que las identifique con su nombre</label>

                <input type="text" name="pregunta48" id="pregunta48" class="form-control" value={{$instrumento->pregunta48}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Presenta alguna dificultad para organizar figuras geométricas de acuerdo a tamaño?</label>
            <label for="exampleInputEmail1">Instrucción: presente al usuario figuras geométricas de diferentes tamaños y pídale que la clasifique según su tamaño</label>

                <input type="text" name="pregunta49" id="pregunta49" class="form-control" value={{$instrumento->pregunta49}} disabled>

        </div>
        <h5 class="form-group col-md-12">Actividades Funcionales AVD</h5>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para bañarse?</label>

                <input type="text" name="pregunta50" id="pregunta50" class="form-control" value={{$instrumento->pregunta50}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para vestirse?</label>

                <input type="text" name="pregunta51" id="pregunta51" class="form-control" value={{$instrumento->pregunta51}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para arreglarse? (peinarse, afeitarse, lavarse los dientes, maquillarse, otras)?</label>

                <input type="text" name="pregunta52" id="pregunta52" class="form-control" value={{$instrumento->pregunta52}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para tomar los alimentos?</label>

                <input type="text" name="pregunta53" id="pregunta53" class="form-control" value={{$instrumento->pregunta53}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para ir al baño?</label>

                <input type="text" name="pregunta54" id="pregunta54" class="form-control" value={{$instrumento->pregunta54}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para trasladarse de la cama a la silla u otro lugar?</label>

                <input type="text" name="pregunta55" id="pregunta55" class="form-control" value={{$instrumento->pregunta55}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para desplazarse en su habitación?</label>

                <input type="text" name="pregunta56" id="pregunta56" class="form-control" value={{$instrumento->pregunta56}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para desplazarse en la casa o lugar donde vive?</label>

                <input type="text" name="pregunta57" id="pregunta57" class="form-control" value={{$instrumento->pregunta57}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para desplazarse fuera de su casa?</label>

                <input type="text" name="pregunta58" id="pregunta58" class="form-control" value={{$instrumento->pregunta58}} disabled>

        </div>
        <h5 class="form-group col-md-12">Actividades Funcionales AIVD</h5>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para realizar actividades domésticas?</label>

                <input type="text" name="pregunta59" id="pregunta59" class="form-control" value={{$instrumento->pregunta59}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para cocinar y servir sus alimentos?</label>

                <input type="text" name="pregunta60" id="pregunta60" class="form-control" value={{$instrumento->pregunta60}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para lavar y arreglar su ropa?</label>

                <input type="text" name="pregunta61" id="pregunta61" class="form-control" value={{$instrumento->pregunta61}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para hacer compras?</label>

                <input type="text" name="pregunta62" id="pregunta62" class="form-control" value={{$instrumento->pregunta62}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para asistir al médico?</label>

                <input type="text" name="pregunta63" id="pregunta63" class="form-control" value={{$instrumento->pregunta63}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para seguir un tratamiento farmacéutico o terapéutico?</label>

                <input type="text" name="pregunta64" id="pregunta64" class="form-control" value={{$instrumento->pregunta64}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para administrar el dinero?</label>

                <input type="text" name="pregunta65" id="pregunta65" class="form-control" value={{$instrumento->pregunta65}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para asistir a actividades sociales?</label>

                <input type="text" name="pregunta66" id="pregunta66" class="form-control" value={{$instrumento->pregunta66}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Necesita ayuda para asistir a actividades recreativas o vocacionales?</label>

                <input type="text" name="pregunta67" id="pregunta67" class="form-control" value={{$instrumento->pregunta67}} disabled>

        </div>
        <h4 class="form-group col-md-12">IV. Participación y Autoconcepto</h4>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Considera que su opinión es tenida en cuenta por su familia?</label>

                <input type="text" name="pregunta68" id="pregunta68" class="form-control" value={{$instrumento->pregunta68}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Toma decisiones por sí mismo?</label>

                <input type="text" name="pregunta69" id="pregunta69" class="form-control" value={{$instrumento->pregunta69}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Participa en alguna organización social o gremial de su barrio, municipio o región?</label>

                <input type="text" name="pregunta70" id="pregunta70" class="form-control" value={{$instrumento->pregunta70}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Participa en alguna organización política de su barrio, municipio o región?</label>

                <input type="text" name="pregunta71" id="pregunta71" class="form-control" value={{$instrumento->pregunta71}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Participa en alguna organización religiosa de su barrio, municipio o región?</label>

                <input type="text" name="pregunta72" id="pregunta72" class="form-control" value={{$instrumento->pregunta72}} disabled>

        </div>
        <h5 class="form-group col-md-12">Auto Concepto</h5>

        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cómo se siente usted en esta etapa de su vida?</label>

                <input type="text" name="pregunta73" id="pregunta73" class="form-control" value={{$instrumento->pregunta73}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Siente que a medida que envejece es menos productivo?</label>

                <input type="text" name="pregunta74" id="pregunta74" class="form-control" value={{$instrumento->pregunta74}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿A medida que envejece las cosas para usted son?</label>

                <input type="text" name="pregunta75" id="pregunta75" class="form-control" value={{$instrumento->pregunta75}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cómo califica la imagen (concepto) que los demás tienen de usted?</label>

                <input type="text" name="pregunta76" id="pregunta76" class="form-control" value={{$instrumento->pregunta76}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cree que una persona mayor debe tener planes y proyectos en su vida?</label>

                <input type="text" name="pregunta77" id="pregunta77" class="form-control" value={{$instrumento->pregunta77}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Considera que su familia respeta su creencia o fe?</label>

                <input type="text" name="pregunta78" id="pregunta78" class="form-control" value={{$instrumento->pregunta78}} disabled>

        </div>

        <h4 class="form-group col-md-12">V. Motivaciones e Intereses</h4>
        <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Qué hace en su tiempo libre?</label>

            <input type="text" name="pregunta79" id="pregunta79" class="form-control" value={{$instrumento->pregunta79}} disabled>

          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Realiza alguna actividad que le produzca satisfacción? ¿Cuáles?</label>

            <input type="text" name="pregunta80" id="pregunta80" class="form-control" value={{$instrumento->pregunta80}} disabled>

          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Realiza alguna actividad que contribuya al bienestar de su familia o allegados? ¿Cuáles?</label>
            <input type="text" name="pregunta81" id="pregunta81" class="form-control" value={{$instrumento->pregunta81}} disabled>

          </div>
          <div class="form-group col-md-12">
            <label for="exampleInputEmail1">¿Tiene algún interés en estudiar o aprender algo nuevo? Intereses:</label>
            <input type="text" name="pregunta82" id="pregunta82" class="form-control" value={{$instrumento->pregunta82}} disabled>

          </div>
          <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Sus familiares y allegados le apoyan si usted. ¿Desea estudiar o aprender algo nuevo??</label>

                <input type="text" name="pregunta83" id="pregunta83" class="form-control" value={{$instrumento->pregunta83}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Le gusta participar en actividades sociales o recreativas con su familia?</label>

                <input type="text" name="pregunta84" id="pregunta84" class="form-control" value={{$instrumento->pregunta84}} disabled>

        </div>

        <h4 class="form-group col-md-12">VI. Relaciones Sociales y Apoyo Familiar</h4>
        <h5 class="form-group col-md-12">Dentro de las siguientes alternativas califique la relación que tiene con las personas que se relaciona</h5>

        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Pareja</label>

                <input type="text" name="pregunta85" id="pregunta85" class="form-control" value={{$instrumento->pregunta85}} disabled>

        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Hijos</label>

                <input type="text" name="pregunta86" id="pregunta86" class="form-control" value={{$instrumento->pregunta86}} disabled>

        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Nietos</label>

                <input type="text" name="pregunta87" id="pregunta87" class="form-control" value={{$instrumento->pregunta87}} disabled>

        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Otros familiares</label>

                <input type="text" name="pregunta88" id="pregunta88" class="form-control" value={{$instrumento->pregunta88}} disabled>

        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Amigos</label>

                <input type="text" name="pregunta89" id="pregunta89" class="form-control" value={{$instrumento->pregunta89}} disabled>

        </div>
        <div class="form-group col-md-4">
            <label for="exampleInputEmail1">Vecinos</label>

                <input type="text" name="pregunta90" id="pregunta90" class="form-control" value={{$instrumento->pregunta90}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cuenta con el apoyo económico de su grupo familiar cuando así lo requiere?</label>

                <input type="text" name="pregunta91" id="pregunta91" class="form-control" value={{$instrumento->pregunta91}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cuenta usted con el cuidado y la atención de su familia cuando así lo requiere?</label>

                <input type="text" name="pregunta92" id="pregunta92" class="form-control" value={{$instrumento->pregunta92}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Recibe usted el respeto de los miembros de su familia?</label>

                <input type="text" name="pregunta93" id="pregunta93" class="form-control" value={{$instrumento->pregunta93}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Recibe manifestaciones de afecto de parte de los miembros de su familia?</label>

                <input type="text" name="pregunta94" id="pregunta94" class="form-control" value={{$instrumento->pregunta94}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Es usted escuchado (a) por los miembros de su familia?</label>

                <input type="text" name="pregunta95" id="pregunta95" class="form-control" value={{$instrumento->pregunta95}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Cuándo se siente triste o deprimido(a), recibe el apoyo afectivo de su familia?</label>

                <input type="text" name="pregunta96" id="pregunta96" class="form-control" value={{$instrumento->pregunta96}} disabled>

        </div>
        <div class="form-group col-md-6">
            <label for="exampleInputEmail1">¿Asiste al culto religioso de su agrado?</label>

                <input type="text" name="pregunta97" id="pregunta97" class="form-control" value={{$instrumento->pregunta97}} disabled>

        </div>
    </div>

    </div>

  </form>





</form>
@if (session('agregar'))
    <div class="alert alert-succes mt-3">
        {{session('agregar')}}
    </div>
@endif
</div>
@endsection
