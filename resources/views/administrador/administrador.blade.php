@extends('layouts.panel-admin')
@section('contenido')
<body class="hold-transition skin-purple layout-top-nav">
        <div class="wrapper">
            <header class="main-header">
                <nav class="navbar navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <a href="#" class="navbar-brand"><b>MOLINSTEC</b></a>
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                                <i class="fa fa-bars"></i>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar F-37</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar I.T</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Ingresar Certificado</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><i class="fa fa-circle"></i>Báscula</a></li>
                                        <li><a href="#"><i class="fa fa-circle"></i>Balanzas</a></li>
                                        <li><a href="#"><i class="fa fa-circle"></i>Masas</a></li>
                                        <li><a href="#"><i class="fa fa-circle"></i>Pesómetros</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informes</a>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parámetros</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><i class="fa fa-caret-square-o-left"></i>Atrasos</a></li>
                                        <li><a href="#"><i class="fa fa-circle"></i>Estados</a></li>
                                        <li><a href="#"><i class="fa fa-users"></i>Usuarios</a></li>
                                    </ul>
                                </li>
                            </ul>
                            <ul class="nav navbar-nav">
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bases</a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#"><i class="fa fa-circle"></i>Condiciones</a></li>
                                        <li><a href="#"><i class="fa fa-barcode"></i>Marcas</a></li>
                                        <li><a href="#"><i class="fa fa-list"></i>Materiales</a></li>
                                        <li><a href="#"><i class="fa fa-barcode"></i>Modelos</a></li>
                                        <li><a href="#"><i class="fa fa-map-marker"></i>Ubicaciones</a></li>
                                        <li><a href="#"><i class="fa fa-list"></i>Unidades</a></li>
                                        <li><a href="#"><i class="fa fa-list"></i>Tipos</a></li>
                                        <li><a href="#"><i class="fa fa-list"></i>Tipos Clientes</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    <!-- /.navbar-collapse -->
                    <!-- Navbar Right Menu -->
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">
                            <!-- User Account Menu -->
                            <li class="dropdown user user-menu">
                                <!-- Menu Toggle Button -->
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="imagenes/usuarios/perfil.png" alt="User Image"  style="width:20px;height:20px;">
                                </a>
                                <ul class="dropdown-menu">
                                    <!-- The user image in the menu -->
                                    <li class="user-header">

                                    </li>
                                    <!-- Menu Footer-->
                                    <li class="user-footer">
                                        <div class="pull-right">
                                            <a href="logout" class="btn btn-default btn-flat">Salir</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-custom-menu -->
                    </div>
                <!-- /.container-fluid -->
                </nav>
            </header>

            <div class="content-wrapper" style="min-height:2000px;">

                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1 style="text-align: center">
                        Bienvenido al sistema de calibración de masas y balanzas de la empresa MOLINSTEC
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content" id="contenido_principal">
                    <!-- Small boxes (Stat box) -->

                </section><!-- /.content -->

                <!-- cargador -->
                <div style="display: none;" id="cargador" align="center">
                    <br>

                    <label style="color:#FFF; background-color:#ABB6BA; text-align:center"></label>
                    <center>
                        <img src="imagenes/empresa/espera.gif" alt="cargador" width="200" height="100"><label style="color:#ABB6BA"></label>
                    </center>
                    <br>
                    <hr style="color:#003" width="50%">
                    <br>
                </div>
            </div><!-- /.content-wrapper -->
        </div><!-- ./wrapper -->
        @endsection