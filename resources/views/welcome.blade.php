<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Centro vida "Años Dorados"</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="images/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-none d-lg-flex align-items-center fixed-top">
        <div class="container d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <i class="icofont-clock-time"></i> Lunes - Viernes, 8 a.m a 5 p.m
            </div>
            <div class="d-flex align-items-center">
                <i class="icofont-phone"></i> Llámanos (+57) 8 726 2394
            </div>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
        <div class="container d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo mr-auto"><img src="img/logo-horizontal.png" alt="" > </a>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <h1 class="logo mr-auto"><a href="index.html">Medicio</a></h1> -->

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li class="active"><a href="#hero">Inicio</a></li>
                    <li><a href="#sobrenosotros">Sobre nosotros</a></li>
                    <li><a href="#services">Servicios</a></li>
                    <li><a href="#doctors">Nuestro equipo</a></li>
                    <li><a href="#galeria">Galería</a></li>
                    <li><a href="#contact">Contacto</a></li>

                </ul>
            </nav><!-- .nav-menu -->

            <a href="{{ route('login') }}" class="appointment-btn scrollto"><span class="d-none d-md-inline"></span>
                Acceder</a>

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(assets/img/slide/slideA.jpg)">

                    <div class="container">
                        <h2>Centro vida <span>"Años Dorados"</span></h2>
                        <p>La Institución Centro de Vida Años Dorados, es una entidad conformada por adultos mayores que
                            quieren recibir atención integral a sus necesidades y que además quieren continuar creciendo
                            espiritual e intelectualmente como personas.</p>
                        <a href="#sobrenosotros" class="btn-get-started scrollto">Leer más</a>


                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slideB.jpg)">
                    <div class="container">
                        <h2>Centro vida <span>"Años Dorados"</span></h2>
                        <p>La Institución Centro de Vida Años Dorados, es una entidad conformada por adultos mayores que
                            quieren recibir atención integral a sus necesidades y que además quieren continuar creciendo
                            espiritual e intelectualmente como personas.</p>
                        <a href="#sobrenosotros" class="btn-get-started scrollto">Leer más</a>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(assets/img/slide/slideC.jpg)">
                    <div class="container">
                        <h2>Centro vida <span> "Años Dorados"</span></h2>
                        <p>La Institución Centro de Vida Años Dorados, es una entidad conformada por adultos mayores que
                            quieren recibir atención integral a sus necesidades y que además quieren continuar creciendo
                            espiritual e intelectualmente como personas.</p>
                        <a href="#sobrenosotros" class="btn-get-started scrollto">Leer más</a>
                    </div>
                </div>

            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
                <span class="sr-only">siguiente</span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">


        <!-- ======= sobrenosotros Us Section ======= -->
        <section id="sobrenosotros" class="about">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Sobre nosotros</h2>
                    <p>Brindamos herramientas metodológicas enfocadas en la atención integral, garantizando el ejercicio
                        pleno de los derechos de los adultos mayores, su familia y la comunidad</p>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right">
                        <img src="assets/img/slideD.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                        <h3>Misión</h3>
                        <p class="font-italic" align="justify">
                            Centro Vida Años Dorados de Chiquinquirá, reafirma el auténtico sentido de la vida en el
                            adulto mayor, garantizándole protección, restablecimiento y ejercicio pleno de sus
                            derechos. Permite el desarrollo psicosocial, cultural y recreativo, promoviendo una vejez
                            activa y con dignidad. Cuenta con personal idóneo para la prestación de servicios de
                            asistencia social, proporcionando atención integral durante el día mediante
                            intervenciones en nutrición, atención primaria en salud, programas de promoción de
                            estilos de vida saludable, actividades recreativas, culturales, apoyo psicológico y
                            fortalecimiento de las redes de apoyo, que tienen como fin promover una imagen
                            positiva del envejecimiento con impacto en su calidad de vida y bienestar en General.</p>


                    </div>
                    <div class="col-lg-12 pt-6 pt-lg-0 content" data-aos="fade-left">
                        <br>
                        <h3>Visión</h3>
                        <p class="font-italic" align="justify">
                            Para el 2023 seremos una institución reconocida a nivel municipal y subregional del
                            Departamento de Boyacá, por garantizar una atención integral con calidad en cuidados
                            y espacios lúdico recreativos, permitiendo satisfacer de forma efectiva las diferentes
                            necesidades presentes en el adulto mayor en aspectos biopsicosociales y fomentando
                            una cultura de respeto y protección hacia el envejecimiento y la vejez digna;
                            coordinando nuestras acciones con instituciones gubernamentales y otros actores
                            sociales. </p>
                    </div>
                </div>

            </div>
        </section><!-- End sobrenosotros Us Section -->
        <!-- ======= Featured Services Section =======
<section id="sobrenosotros" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="icofont-heart-beat"></i></div>
            <h4 class="title"><a href="">Salud</a></h4>
            <p class="description">Todos los mayores vinculados al centro vida, tendrán apoyo como: estilos de vida saludable, apoyo psicosocial, enfermería, fonoaudiología, terapia ocupacional, terapia física entre, otros</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="icofont-drug"></i></div>
            <h4 class="title"><a href="">Nutrición</a></h4>
            <p class="description">Las personas residentes en la sede, tendrán tres comidas al día, dos meriendas y una atención especial por auxiliares de enfermería de acuerdo con sus condiciones de salud, mental y física. Igualmente, se realizan programas de alimentación y nutrición para nuestros residentes.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-thermometer-alt"></i></div>
            <h4 class="title"><a href="">Proyección comunitaria</a></h4>
            <p class="description">Contempla la participación organizada de los adultos mayores en las diferentes actividades de expresión social que realiza el municipio y el desarrollo de eventos de participación intergeneracional, así como servicios religiosos y de técnicas interiores.</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
            <div class="icon"><i class="icofont-dna-alt-1"></i></div>
            <h4 class="title"><a href="">Ocupación de tiempo libre</a></h4>
            <p class="description">Contempla entre otras, las siguientes acciones: ocio productivo, turismo, proyecto productivo, medio ambiente , juegos cooperativos, actividades artísticas (canto, baile, poesía), rescate de valores, leyendas, tradiciones, y en general toda actividad que fomente el interés de los afiliados y de pautas educativas para su continuo crecimiento.

          </p>
          </div>
        </div>

      </div>

    </div>
  </section> End Featured Services Section -->


        <!-- ======= Services Section ======= -->
        <section id="services" class="services services">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Servicios</h2>
                    <p>Ofrecemos diferentes servicios...</p>
                </div>
                <!-- icofont-heart-beat corazon
    icofont-drug
 -->
                <div class="row">
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="icofont-autism"></i></div>
                        <h4 class="title"><a>Psicología</a></h4>

                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="icofont-spoon-and-fork"></i></div>
                        <h4 class="title"><a>Nutrición</a></h4>

                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="icofont-stethoscope-alt"></i></div>
                        <h4 class="title"><a>Fonoaudiología</a></h4>

                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                        <div class="icon"><i class="icofont-heartbeat"></i></div>
                        <h4 class="title"><a>Trabajo social</a></h4>

                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                        <div class="icon"><i class="icofont-nursing-home"></i></div>
                        <h4 class="title"><a>Enfermería</a></h4>

                    </div>
                    <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                        <div class="icon"><i class="icofont-soccer"></i></div>
                        <h4 class="title"><a>Actividad física</a></h4>

                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->


        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container" data-aos="fade-up">



                <div class="row" data-aos="fade-up" data-aos-delay="100">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-toggle="tab" href="#tab-1">
                                    <h4>Psicología</h4>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-2">
                                    <h4>Nutrición</h4>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-3">
                                    <h4>Fonoaudiología</h4>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">
                                    <h4>Trabajo social</h4>
                                    <p></p>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-5">
                                    <h4>Enfermería</h4>
                                </a>
                            </li>
                            <li class="nav-item mt-2">
                                <a class="nav-link" data-toggle="tab" href="#tab-6">
                                    <h4>Actividad física</h4>
                                    <p></p>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-8">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <h3>Psicología</h3>
                                <p align="justify" class="font-italic">"La ciencia moderna aún no ha producido un
                                    medicamento tan eficaz como unas pocas palabras bondadosas" -Sigmund Freud</p>
                                <img src="assets/img/psicologia.jpg" alt="" class="img-fluid">
                                <p align="justify">Desde el área de psicología se trabaja en la estimulación cognitivo
                                    conductual del adulto mayor, prestando los servicios e intervenciones profesionales
                                    en el proceso de actividades enfocadas en el desarrollo social, mental, personal y
                                    familiar del adulto mayor, mediante estrategias psicoeducativas que toman como base
                                    fundamental al individuo en su totalidad mediante un modelo biopsicosocial y
                                    acompañamiento profesional a la población adulto mayor hacia una mejora de calidad
                                    de vida, introspección, aceptación personal, manejo de relaciones sociales y
                                    familiares, direccionamientos a cuidadores y familiares de población adulto mayor
                                    hacia un trato adecuado, comunicación asertiva y sensibilización ante el desarrollo
                                    de un envejecimiento y vejez natural del ciclo de la vida.</p>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <h3>Nutrición</h3>
                                <p align="justify" class="font-italic">“Comer es una necesidad, pero comer de forma
                                    inteligente es un arte” -Francisco VI</p>
                                <img src="assets/img/nutricion.jpg" alt="" class="img-fluid">
                                <p align="justify"> Desde esta área se asegurará la ingesta necesaria, a nivel
                                    proteico-calórico y de micronutrientes que garanticen buenas condiciones de salud
                                    para el adulto mayor, de acuerdo a la valoración realizada a cada beneficiario y a
                                    los menos que de manera especial sean elaboradas de acuerdo a las necesidades
                                    identificadas.</p>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <h3>Fonoaudiología</h3>
                                <p class="font-italic">"Tu paciencia es clave para entrar en mundos en los cuales el
                                    sonido es esquivo" - Anónimo</p>
                                <img src="assets/img/fono.jpg" alt="" class="img-fluid">
                                <p align="justify">Previene, evalua e interveniene los trastornos de la comunicación
                                    humana, manifestados a través de alteraciones en la voz, el habla, el lenguaje (oral
                                    - escrito y gestual) la audición, funciones, orofaciales, masticatorias, deglutorias
                                    y de memoria a corto y largo plazo.</p>
                            </div>

                            <div class="tab-pane" id="tab-4">
                                <h3>Trabajo social</h3>
                                <p align="justify" class="font-italic">"En una hora de juego se puede descubrir más
                                    acerca de una persona que en un año de conversación" - Platón</p>
                                <img src="assets/img/trabajosocial.jpg" alt="" class="img-fluid">
                                <p>Fomentar la integración y la participación de los beneficiarios contribuyendo a las
                                    buenas relaciones entre las familias y su entorno, realizando con el equipo de
                                    profesionales un plan de atención a cada beneficiario, direccionando la ruta de
                                    atención si se evidencia algún tipo de vulneración de derechos, buscando siempre la
                                    protección de los adultos mayores. Brindar atención al adulto mayor, realizando
                                    visitas domiciliarias, con el fin de llevar a cabo una valoración inicial para su
                                    ingreso al centro vida.</p>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <h3>Enfermería</h3>
                                <p class="font-italic">“Un enfermero/a siempre nos dará esperanza; es un ángel con
                                    estetoscopio” - Carrie Lalet.</p>
                                <img src="assets/img/enfermeria.jpg" alt="" class="img-fluid">
                                <p align="justify">Bajo el modelo de atención integral en salud, enfermería enfoca sus
                                    actividades de acuerdo a
                                    las necesidades identificadas por cada una de las personas adultos mayores,
                                    promoviendo
                                    estilos de vida saludable y demás actividades relacionadas con Atención Primaria en
                                    Salud, con
                                    la finalidad de mejorar la calidad de vida de nuestros beneficiarios.</p>
                            </div>
                            <div class="tab-pane" id="tab-6">
                                <h3>Actividad física</h3>
                                <p class="font-italic" align="justify">"La falta de actividad destruye la buena
                                    condición de todo ser humano, mientras que el movimiento y el ejercicio físico lo
                                    conserva" - Platón.</p>
                                <img src="assets/img/fisica.jpg" alt="" class="img-fluid">
                                <p align="justify">Tiene como objeto mejorar la salud mental y física de todos y cada
                                    uno de nuestros usuarios, obteniendo beneficios como la coordinación, el equilibrio,
                                    la movilidad articular, reduce el estrés, mejora la atención, favorece la
                                    conciliación del sueño, mejora la digestión y disminuye el estreñimiento, previene
                                    el envejecimiento prematuro y previene enfermedades cardiovasculares, así como
                                    problemas respiratorios, controla el peso, entre otros. Lo cual genera adultos
                                    mayores independientes, funcionales y autónomos.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->


        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Nuestro equipo</h2>
                    <p>El centro vida "Años dorados" cuenta con profesionales de alta calidad dispuestos a brindar el
                        mejor servicio posible</p>
                </div>

                <div class="row">

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="100">
                            <div class="member-img">
                                <img src="assets/img/nuestroequipo/member-1.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Tatiana Olarte</h4>
                                <span>Coordinadora</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="200">
                            <div class="member-img">
                                <img src="assets/img/nuestroequipo/member-2.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Manuela Villamil</h4>
                                <span>Trabajadora social</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="300">
                            <div class="member-img">
                                <img src="assets/img/nuestroequipo/member-3.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-email"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Jhelen Noreña</h4>
                                <span>Psicóloga</span>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/nuestroequipo/member-4.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Sofía Regalado</h4>
                                <span>Enfermera</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/nuestroequipo/member-5.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Pilar Pachón</h4>
                                <span>Tallerista</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
                        <div class="member" data-aos="fade-up" data-aos-delay="400">
                            <div class="member-img">
                                <img src="assets/img/nuestroequipo/member-6.jpg" class="img-fluid" alt="">
                                <div class="social">
                                    <a href=""><i class="icofont-twitter"></i></a>
                                    <a href=""><i class="icofont-facebook"></i></a>
                                    <a href=""><i class="icofont-instagram"></i></a>
                                    <a href=""><i class="icofont-linkedin"></i></a>
                                </div>
                            </div>
                            <div class="member-info">
                                <h4>Leonardo Pacheco</h4>
                                <span>Referente para citas médicas y entrega de medicamentos</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Doctors Section -->

        <!-- ======= Gallery Section ======= -->
        <section id="galeria" class="gallery">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Galería</h2>
                    <p> </p>
                </div>

                <div class="owl-carousel gallery-carousel" data-aos="fade-up" data-aos-delay="100">
                    <a href="assets/img/gallery/image2.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image2.jpg" alt=""></a>
                    <a href="assets/img/gallery/image1.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image1.jpg" alt=""></a>
                    <a href="assets/img/gallery/image3.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image3.jpg" alt=""></a>
                    <a href="assets/img/gallery/image4.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image4.jpg" alt=""></a>
                    <a href="assets/img/gallery/image5.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image5.jpg" alt=""></a>
                    <a href="assets/img/gallery/image6.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image6.jpg" alt=""></a>
                    <a href="assets/img/gallery/image7.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image7.jpg" alt=""></a>
                    <a href="assets/img/gallery/image8.jpg" class="venobox" data-gall="gallery-carousel"><img
                            src="assets/img/gallery/image8.jpg" alt=""></a>
                </div>

            </div>
        </section><!-- End Gallery Section -->

        <!-- ======= Frequently Asked Questioins Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-title">
                    <h2>Preguntas frecuentes</h2>
                    <p></p>
                </div>

                <ul class="faq-list" data-aos="fade-up" data-aos-delay="100">

                    <li>
                        <a data-toggle="collapse" class="" href="#faq1">¿Qué documentos requiero para el ingreso al
                            programa de centro vida
                            años dorados? <i class="icofont-simple-up"></i></a>
                        <div id="faq1" class="collapse-show" data-parent=".faq-list">
                            <p>
                                <br /> Para ingresar al programa de centro vida años dorados se requiere: <br />
                                <br /> 1. SER MAYOR DE 60 AÑOS
                                <br /> 2. NIVEL 1 Y 2 DEL SISBEN
                                <br /> 3. DILIGENCIAR FORMATO DE INGRESO
                                <br /> 4. DILIGENCIAR FORMATO DE CONSENTIMIENTO INFORMADO
                                <br /> 5. COPIA DNP
                                <br /> 6. COPIA ADRES
                                <br /> 7. COPIA CEDULA DE CIUDADANIA POR AMBOS LADOS
                                <br /> 8. HISTORIA CLINICA RESIENTE. (Informe médico actualizado en el que
                                conste el grado de autonomía personal y si padece enfermedad
                                infectocontagiosa o psíquica que le impida la normal convivencia).
                                <br /> 9. FOTO TAMAÑO DOCUMENTO
                                <br /> 10. COPIA RECIBO (SERVICIO PÚBLICO)
                                <br /> 11. DIRECCIÓN Y BARRIO DONDE RESIDE
                                <br /> 12. NUMERO DE CELULAR
                                <br /> 13. DATOS DEL CUIDADOR (FAMILIAR-AMIGO-ACOMPAÑANTE)
                                <br />NOMBRES
                                <br />DIRECCIÓN DE RESIDENCIA
                                <br />NUMERO DE CELULAR
                                <br /> 14. CARPETA DE CARTÓN TAMAÑO OFICIO CON GANCHO
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq2" class="collapsed">¿Dónde puedo dejar mis documentos?<i
                                class="icofont-simple-up"></i></a>
                        <div id="faq2" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Para dejar sus documentos debe acercarse a la sede del centro vida
                                años Dorados con el personal auxiliar administrativo
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq3" class="collapsed">¿Qué costo tiene la inscripción al
                            programa centro vida años dorados?<i class="icofont-simple-up"></i></a>
                        <div id="faq3" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> La inscripción al programa centro vida años dorados no tiene Ningún
                                costo.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq4" class="collapsed">¿Desde qué edad se puede ingresar al
                            programa?<i class="icofont-simple-up"></i></a>
                        <div id="faq4" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> La edad de ingreso requerida para el programa es de personas mayores
                                de 60 años que cuenten con nivel 1 o 2 del sisbén.
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq5" class="collapsed">¿Una persona menos de 60 años puede
                            ingresar al programa de centro
                            vida años dorados?<i class="icofont-simple-up"></i></a>
                        <div id="faq5" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Aquellas personas en el rango menor de 60 años y mayor de 55 que a
                                criterio del especialista presente condiciones de desgaste físico, vital y
                                psicológico, presentar (VALORACION MEDICA-HISTORIA CLINICA).
                            </p>
                        </div>
                    </li>

                    <li>
                        <a data-toggle="collapse" href="#faq6" class="collapsed">¿Una persona discapacitada desde que
                            edad puede ingresar al
                            programa?<i class="icofont-simple-up"></i></a>
                        <div id="faq6" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Si alguna persona se encuentra en condiciones de discapacidad puede
                                ingresar al programa con la edad requerida de 55 años en adelante.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq7" class="collapsed">¿Qué nivel del sisbén necesito para
                            ingresar al programa?<i class="icofont-simple-up"></i></a>
                        <div id="faq7" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Para poder hacer parte del programa se debe contar con nivel 1 y 2 del
                                sisbén y haber sido evaluado por el profesional en trabajo social.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq8" class="collapsed">¿Puede una pareja de esposos ingresar
                            al programa centro vida años
                            dorados?<i class="icofont-simple-up"></i></a>
                        <div id="faq8" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Si, El programa centro vida años dorados no exige al beneficiario ser el
                                único representante de su familia, el programa centro vida busca la
                                inscripción de la mayoría de los adultos que cuenten con todos los
                                requisitos.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq9" class="collapsed">¿Cuántas personas de la misma familia
                            pueden hacer parte del
                            programa?<i class="icofont-simple-up"></i></a>
                        <div id="faq9" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> El ingreso al programa centro vida es ilimitado, no importa el número de
                                personas que se inscriban del núcleo familiar , lo que se verifica son los
                                requisitos de ingreso.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq10" class="collapsed">¿Puedo recibir el beneficio del
                            almuerzo sin necesidad de participar de
                            las actividades que se realizan en centro vida?<i class="icofont-simple-up"></i></a>
                        <div id="faq10" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> No, El programa centro vida años dorados es integral, es decir que el
                                beneficio del almuerzo es una de las actividades a cumplir junto con las
                                acciones propuestas. El programa centro vida años dorados busca la
                                mejora de la calidad de vida del adulto mayor mediante diferentes
                                actividades como lo son (Recreación, Deporte, Alimentación,
                                Manualidades, Teatro y cultura, Valoraciones psicológicas, de trabajo
                                social, de enfermería y fonoaudiología).
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq11" class="collapsed">¿Puedo ingresar al programa centro
                            vida años dorados teniendo subsidio
                            de Colombia mayor?<i class="icofont-simple-up"></i></a>
                        <div id="faq11" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Sí, El programa de Centro vida años dorados es completamente
                                independiente de cualquier otro subsidio al que se encuentre activo
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq12" class="collapsed">¿Puedo participar de los ejercicios en
                            el centro vida sin recibir el
                            beneficio del almuerzo?<i class="icofont-simple-up"></i></a>
                        <div id="faq12" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Si, En caso que la persona desee realizar las actividades propuestas en
                                el programa centro vida años dorados y no requiera recibir almuerzo por
                                decisión propia, se dejará por escrito un consentimiento en el que se
                                suspende únicamente el servicio del almuerzo.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq13" class="collapsed">¿Si vivo lejos puedo recibir subsidio
                            de trasporte?<i class="icofont-simple-up"></i></a>
                        <div id="faq13" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> No, Centro vida no cuenta con trasporte, (subsidio económico) por lo
                                cual no se puede garantizar el traslado de la persona adulto mayor que
                                viva lejos de la sede de centro vida.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq14" class="collapsed">¿Existe programa de adulto mayor en el
                            área rural?<i class="icofont-simple-up"></i></a>
                        <div id="faq14" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> Si, actualmente el programa de centro vida años dorados se encuentra
                                activo en las zonas rurales de las veredas: Tenería, Sucre Oriental, Sasa
                                y Córdoba.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq15" class="collapsed">¿El programa de beneficios de centro
                            vida años dorados me subsidia
                            económicamente?<i class="icofont-simple-up"></i></a>
                        <div id="faq15" class="collapse" data-parent=".faq-list">
                            <p>
                                <br /> No, centro vida es un programa multidisciplinario en el que se pretende
                                estimular el manejo físico, cognitivo, relaciones sociales y mejora de
                                calidad de vida del adulto mayor, este programa no subsidia
                                económicamente a ningún adulto mayor.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq16" class="collapsed">¿Cuáles son las causales para que me
                            retiren del programa?<i class="icofont-simple-up"></i></a>
                        <div id="faq16" class="collapse" data-parent=".faq-list">
                            <p>
                            <ul>
                                <br /> La condición de usuario/a del Centro de Vida Años Dorados se perderá por
                                alguna de las siguientes causas:
                                <br /><br />
                                <li> Fallecimiento
                                    <br />
                                <li> A petición propia.
                                    <br />
                                <li> Cumplimiento de una sanción firme de privación de los derechos de
                                    usuario/a de resultas de un expediente sancionador y durante el tiempo
                                    que dure el cumplimiento de la misma.
                                    <br />
                                <li> Pérdida de las condiciones exigidas en el artículo 3 del presente
                                    Reglamento para acceder a dicha condición.
                                    <br />
                                <li> Imposibilidad de convivencia con el resto de los usuarios de Centro.

                                    <br />
                                <li> Necesidad de una atención más especializada, siempre que el centro no
                                    pueda dispensarla.
                                    <br />
                                <li> Traslado a otro servicio.
                                    <br />
                                <li> Inasistencia injustificada por un periodo superior a 30 días anuales.
                                    <br />
                                <li> No aceptar y/o cumplir la normativa de régimen interno establecida en el
                                    centro.
                                    <br />
                                <li> Ser pensionado.
                            </ul>
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq17" class="collapsed">¿Mis familiares me pueden acompañar en
                            la realización de las
                            actividades?<i class="icofont-simple-up"></i></a>
                        <div id="faq17" class="collapse" data-parent=".faq-list">
                            <p>
                                No, Los familiares del adulto mayor únicamente podrán acompañar a su
                                familiar en encuentros familiares y algunas celebraciones especiales
                                que se realicen dentro de la sede del centro vida años dorados.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq18" class="collapsed">¿El beneficio del almuerzo le puede
                            llegar a mi familia o a la persona con
                            quien vivo?<i class="icofont-simple-up"></i></a>
                        <div id="faq18" class="collapse" data-parent=".faq-list">
                            <p>
                                No, el beneficio del almuerzo únicamente será para usuarios inscritos,
                                que asistan y realicen las actividades del programa centro vida años
                                dorados.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq19" class="collapsed">¿Pierdo el beneficio del programa
                            centro vida años dorados si me
                            encuentro trabajando?<i class="icofont-simple-up"></i></a>
                        <div id="faq19" class="collapse" data-parent=".faq-list">
                            <p>
                                No, el programa de centro vida años dorados solicita el cumplimiento y
                                verificación de los requisitos de inscripción y asistencia activa a las
                                diferentes actividades que se realicen en el centro vida. Es decir que
                                aquella persona que esté trabajando puede hacer parte del programa si
                                cumple con los requisitos.
                            </p>
                        </div>
                    </li>
                    <li>
                        <a data-toggle="collapse" href="#faq20" class="collapsed">¿Puedo ceder mi almuerzo a otra
                            persona para que le llegue en mi
                            nombre?<i class="icofont-simple-up"></i></a>
                        <div id="faq20" class="collapse" data-parent=".faq-list">
                            <p>
                                No, el beneficio del almuerzo será únicamente para los usuarios
                                inscritos, que asistan y realicen las actividades propuestas del
                                programa centro vida años dorados
                            </p>
                        </div>
                    </li>

                </ul>

            </div>
        </section><!-- End Frequently Asked Questioins Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contacto</h2>
                    <p></p>
                </div>

            </div>
            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                    src=" https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15882.741176710411!2d-73.812859!3d5.613408!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x17205e877c8e5a2e!2sCentro%20Vida!5e0!3m2!1ses-419!2sco!4v1593654352757!5m2!1ses-419!2sco"
                    frameborder="0" allowfullscreen></iframe>
            </div>
            <div class="container">

                <div class="row mt-5">

                    <div class="col-lg-12">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-envelope"></i>
                                    <h3>Correo electrónico</h3>
                                    <p>centrovidachiquinquira2020@gmail.com</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box mt-4">
                                    <i class="bx bx-phone-call"></i>
                                    <h3>Llámanos</h3>
                                    <p> (038) 726 2394</p>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="info-box">
                                    <i class="bx bx-map"></i>
                                    <h3>Nuestra dirección</h3>
                                    <p>Calle 17 N° 3 - 45 Barrio sucre, Chiquinquirá</p>
                                    <div class="social-links mt-3">
                                        <br>
                                        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                                        <a href="https://www.facebook.com/Centro-Vida-Años-Dorados-106394961076444/"
                                            target="_blank" class="facebook"><i class="bx bxl-facebook"></i></a>
                                        <a href="#" class="instagram" target="_blank"><i
                                                class="bx bxl-instagram"></i></a>
                                        <a href="#" class="google-plus" target="_blank"><i class="bx bxl-skype"></i></a>
                                        <a href="#" class="linkedin" target="_blank"><i class="bx bxl-linkedin"></i></a>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>



                </div>

            </div>



        </section><!-- End Contact Section -->
        <!-- ======= Contact Section ======= -->
        <section class="contact">
            <div class="row">


                <div class="col-sm-12 text-center">
                    <div class="partner">
                        <a href="#"><img src="img/dummy/logopag.png" alt="" /></a>

                    </div>
                </div>
                <div class="col-sm-12 text-center">
                    <div class="partner">
                        <a href="#"><img src="img/dummy/logo.png" alt=""  width="100"
                            height="100"/></a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="partner">
                        <a href="#"><img src="img/dummy/partner4.jpg" alt="" /></a>
                    </div>
                </div>
            </div>
            <div class="container">



            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>UNISANGIL</span></strong>. Todos los derechos reservados - 2020
            </div>
            <div class="credits">
                Diseñado por: <a href="https://www.facebook.com/fabian.esneider.1" target="_blank">Fabián Menjura</a> -
                <a href="https://www.facebook.com/Martinez9805" target="_blank">Jaime Martínez</a> -
                <a href="https://www.facebook.com/profile.php?id=100005446125615" target="_blank">Andrés Castillo</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="assets/vendor/counterup/counterup.min.js"></script>
    <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="assets/vendor/venobox/venobox.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
