<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Centro vida</title>
    <!-- Custom CSS -->
    <link href="../assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="../assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <link href="../assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../dist/css/style.min.css" rel="stylesheet">

<!-- Bootstrap -->

<link href="../pla/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<!-- NProgress -->
<link href="../pla/nprogress/nprogress.css" rel="stylesheet">
<!-- iCheck -->
<link href="../pla/iCheck/skins/flat/green.css" rel="stylesheet">
<!-- bootstrap-wysiwyg -->
<link href="../pla/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
<!-- Select2 -->
<link href="../pla/select2/dist/css/select2.min.css" rel="stylesheet">
<!-- Switchery -->
<link href="../pla/switchery/dist/switchery.min.css" rel="stylesheet">
<!-- starrr -->
<link href="../pla/starrr/dist/starrr.css" rel="stylesheet">
<!-- bootstrap-daterangepicker -->
<link href="../pla/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
 <!-- Bootstrap -->
 <link href="cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
 <link href="../pla/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
 <link href="../pla/font-awesome/css/font-awesome.min.css" rel="stylesheet">
 <link href="../pla/pnotify/dist/pnotify.css" rel="stylesheet">
 <link href="../pla/pnotify/dist/pnotify.buttons.css" rel="stylesheet">
 <link href="../pla/pnotify/dist/pnotify.nonblock.css" rel="stylesheet">

 <!-- Datatables -->

 <link href="../pla/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
 <link href="../pla/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
 <link href="../pla/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
 <link href="../pla/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
 <link href="../pla/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

 <!-- Custom Theme Style -->
 <link href="../build/css/custom.min.css" rel="stylesheet">

</head>

<body>

    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-md">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="{{route('home')}}">
                            <b class="logo-icon">
                                <!-- Dark Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo icon -->
                                <img src="../assets/images/logo-icon.png" alt="homepage" class="light-logo" />
                            </b>
                            <!--End Logo icon -->
                            <!-- Logo text -->
                            <span class="logo-text">
                                <!-- dark Logo text -->
                                <img src="../assets/images/logo-cc.png" alt="homepage" class="dark-logo" />
                                <!-- Light Logo text -->
                                <img src="../assets/images/logo-cc.png" class="light-logo" alt="homepage" />
                            </span>
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left mr-auto ml-3 pl-1">
                        <!-- Notification -->

                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-right">

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="../assets/images/users/d3.jpg" alt="user" class="rounded-circle" width="40">
                                <span class="ml-2 d-none d-lg-inline-block"><span>Buen día,</span> <span class="text-dark">{{ Auth::user()->name }}</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="user" class="svg-icon mr-2 ml-1"></i>
                                    Mi perfil</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i data-feather="settings" class="svg-icon mr-2 ml-1"></i>
                                    Configurar cuenta</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('logout') }}"        onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">  {{ __('') }} <i data-feather="power" class="svg-icon mr-2 ml-1"></i>
                                    Cerrar sesión</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                        @csrf
                                    </form>

                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>


        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('home')}}" aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span class="hide-menu">Inicio</span></a></li>

                        @if(Auth::user()->hasRole('admin'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('addadul')}}" aria-expanded="false"><i class="icon-user-follow"></i><span class="hide-menu">Adulto mayor</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Cuidadores</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listusers')}}" aria-expanded="false"><i class="fas fa-users"></i><span class="hide-menu">Administrar Roles</span></a></li>

                        <li class="list-divider"></li>

                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('enfermeria')}}" aria-expanded="false"><i class="fas fa-capsules"></i><span class="hide-menu">Enfermería</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('fonoaudio')}}" aria-expanded="false"><i class="fas fa-user-md"></i><span class="hide-menu">Fonoaudiología</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('nutricion')}}" aria-expanded="false"><i class="fas fa-utensils"></i><span class="hide-menu">Nutrición</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('trabajosocial')}}" aria-expanded="false"><i class="fas fa-briefcase"></i><span class="hide-menu">Trabajo social</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('actividadfisica')}}" aria-expanded="false"><i class="fas fa-futbol-o"></i><span class="hide-menu">Actividad Física</span></a></li>

                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                             <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class="fas fa-hands-helping"></i><span
                                    class="hide-menu">Psicología</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="{{route('psicosocial')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>TEST DE YESAVAGE</small>
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial2')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>PFEFFER (FAQ)</small>
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial3')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>APGAR FAMILIAR</small> </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial4')}}" class="sidebar-link"><span
                                    class="hide-menu"> <small>TEST DE ZARIT</small> </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('psicosocial5')}}" class="sidebar-link"><span
                            class="hide-menu"> <small>EXAMEN MENTAL</small> </span></a>
                </li>
                            </ul>
                        </li>
                            </div>
                          </div>
                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->



                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">PROFESIONALES</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('addapro')}}" aria-expanded="false"><i class="icon-user-follow"></i><span class="hide-menu">Nuevo profesional</span></a></li>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listprofesionales')}}" aria-expanded="false"><i class="icon-bag"></i><span class="hide-menu">Listar profesionales</span></a></li>


                        @endif

                        @if(Auth::user()->hasRole('professional'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('enfermeria')}}" aria-expanded="false"><i class="fas fa-capsules"></i><span class="hide-menu">Enfermería</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('fonoaudio')}}" aria-expanded="false"><i class="fas fa-user-md"></i><span class="hide-menu">Fonoaudiología</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('nutricion')}}" aria-expanded="false"><i class="fas fa-utensils"></i><span class="hide-menu">Nutrición</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('trabajosocial')}}" aria-expanded="false"><i class="fa fa-briefcase"></i><span class="hide-menu">Trabajo social</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('actividadfisica')}}" aria-expanded="false"><i class="fas fa-futbol-o"></i><span class="hide-menu">Actividad Física</span></a></li>
 <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                             <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class="fas fa-hands-helping"></i><span
                                    class="hide-menu">Psicología</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="{{route('psicosocial')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>TEST DE YESAVAGE</small>
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial2')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>PFEFFER (FAQ)</small>
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial3')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>APGAR FAMILIAR</small> </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial4')}}" class="sidebar-link"><span
                                    class="hide-menu"> <small>TEST DE ZARIT</small> </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('psicosocial5')}}" class="sidebar-link"><span
                            class="hide-menu"> <small>EXAMEN MENTAL</small> </span></a>
                </li>
                            </ul>
                        </li>
                            </div>
                          </div>
                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif
                        @if(Auth::user()->hasRole('enfermeria'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('enfermeria')}}" aria-expanded="false"><i class="fas fa-capsules"></i><span class="hide-menu">Enfermería</span></a></li>

                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif
                        @if(Auth::user()->hasRole('nutricion'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>

                         <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('nutricion')}}" aria-expanded="false"><i class="fas fa-utensils"></i><span class="hide-menu">Nutrición</span></a></li>

                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif
                        @if(Auth::user()->hasRole('trabajosocial'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('trabajosocial')}}" aria-expanded="false"><i class="fas fa-briefcase"></i><span class="hide-menu">Trabajo Social</span></a></li>


                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif
                        @if(Auth::user()->hasRole('psicologia'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>


                        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                            <div class="menu_section">
                             <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i class="fas fa-hands-helping"></i><span
                                    class="hide-menu">Psicología</span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="{{route('psicosocial')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>TEST DE YESAVAGE</small>
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial2')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>PFEFFER (FAQ)</small>
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial3')}}" class="sidebar-link"><span
                                            class="hide-menu"> <small>APGAR FAMILIAR</small> </span></a>
                                </li>
                                <li class="sidebar-item"><a href="{{route('psicosocial4')}}" class="sidebar-link"><span
                                    class="hide-menu"> <small>TEST DE ZARIT</small> </span></a>
                        </li>
                        <li class="sidebar-item"><a href="{{route('psicosocial5')}}" class="sidebar-link"><span
                            class="hide-menu"> <small>EXAMEN MENTAL</small> </span></a>
                </li>
                            </ul>
                        </li>
                            </div>
                          </div>
                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif
                        @if(Auth::user()->hasRole('fonoaudiologia'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('fonoaudio')}}" aria-expanded="false"><i class="fas fa-user-md"></i><span class="hide-menu">Fonoaudiología</span></a></li>

                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif

                        @if(Auth::user()->hasRole('actividadfisica'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>


                    </li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                    <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('bita')}}" aria-expanded="false"><i class="fas fa-clipboard-list"></i><span class="hide-menu">Bitácora</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('actividadfisica')}}" aria-expanded="false"><i class="fas fa-futbol-o"></i><span class="hide-menu">Actividad Fisica</span></a></li>

                        <!--  <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="#" aria-expanded="false"><i class="fas fa-basketba"></i><span class="hide-menu">Talleres</span></a></li>-->


                        @endif
                        @if(Auth::user()->hasRole('operator'))
                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Adultos mayores</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('addadul')}}" aria-expanded="false"><i class="icon-user-follow"></i><span class="hide-menu">Adulto mayor</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listadultosmayores')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar adulto mayor</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{route('listacudientes')}}" aria-expanded="false"><i class="fas fa-search"></i><span class="hide-menu">Buscar cuidador</span></a></li>

                            <li class="nav-small-cap"><span class="hide-menu">Valoraciones</span></li>


                        @endif
                        @if(Auth::user()->hasRole('user'))

                        @endif

                        <li class="list-divider"></li>
                        <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('register') }}" aria-expanded="false"><i data-feather="edit-3" class="feather-icon"></i><span class="hide-menu">Registrar usuario</span></a></li>

                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();"
                            aria-expanded="false"> {{ __('') }} <i data-feather="log-out" class="feather-icon"></i><span class="hide-menu">Cerrar sesión</span></a></li>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>

                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">

                     <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->

                @yield('content2')
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center text-muted">
                Todos los derechos reservados por <a href="http://www.unisangil.edu.co">UNISANGIL</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="../dist/js/app-style-switcher.js"></script>
    <script src="../dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Menu sidebar -->
    <script src="../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../assets/extra-libs/prism/prism.js"></script>
    <script src="../assets/libs/moment/min/moment.min.js"></script>
    <script src="../assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../dist/js/pages/calendar/cal-init.js"></script>

    <script src="../assets/extra-libs/c3/d3.min.js"></script>
    <script src="../assets/extra-libs/c3/c3.min.js"></script>
    <script src="../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="../assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="../dist/js/pages/dashboards/dashboard1.min.js"></script>


<!-- Datatables -->
   <!-- Datatables -->
   <script src="../pla/datatables.net/js/jquery.dataTables.min.js"></script>
   <script src="../pla/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
   <script src="../pla/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
   <script src="../pla/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
   <script src="../pla/datatables.net-buttons/js/buttons.flash.min.js"></script>
   <script src="../pla/datatables.net-buttons/js/buttons.html5.min.js"></script>
   <script src="../pla/datatables.net-buttons/js/buttons.print.min.js"></script>
   <script src="../pla/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
   <script src="../pla/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
   <script src="../pla/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
   <script src="../pla/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
   <script src="../pla/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
   <script src="../pla/jszip/dist/jszip.min.js"></script>
   <script src="../pla/pdfmake/build/pdfmake.min.js"></script>
   <script src="../pla/pdfmake/build/vfs_fonts.js"></script>
   <script src="../pla/jquery.tagsinput/src/jquery.tagsinput.js"></script>

   <!-- Custom Theme Scripts -->
   <script src="../build/js/custom.min.js"></script>
   <script src="../pla/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>

   <script src="../pla/jquery.inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
      <!-- PNotify -->
      <script src="../pla/pnotify/dist/pnotify.js"></script>
      <script src="../pla/pnotify/dist/pnotify.buttons.js"></script>
      <script src="../pla/pnotify/dist/pnotify.nonblock.js"></script>

</body>

</html>
