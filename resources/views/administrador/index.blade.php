<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Bienvenido</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Bootstrap 3.3.5 -->
        {!!Html::style('css/bootstrap.min.css')!!}
        <!-- Font Awesome -->
        {!!Html::style('css/font-awesome.min.css')!!}
        <!-- Ionicons -->
        {!!Html::style('css/pe-icon-7-stroke.css')!!}
        <!-- Theme style -->
        {!!Html::style('css/AdminLTE.min.css')!!}
        <!-- AdminLTE Skins. Choose a skin from the css/skins
        folder instead of downloading all of them to reduce the load. -->
        {!!Html::style('css/skins/_all-skins.min.css')!!}
        <!-- Input -->
        {!!Html::style('css/input.css')!!}
        <!-- Select -->
        {!!Html::style('css/select.css')!!}
        <!-- Equipos -->
        {!!Html::style('css/equipos.css')!!}
        <!-- Tabla2 -->
        {!!Html::style('css/tabla2.css')!!}
        <!-- Textarea -->
        {!!Html::style('css/parrafo.css')!!}
        <!-- dataTable -->
        {!!Html::style('plugins/DataTables/media/css/jquery.dataTables.min.css')!!}
        <!-- dataTable UI-->
        {!!Html::style('plugins/jquery-ui/themes/base/minified/jquery-ui.min.css')!!}
        <!-- Logo Empresa en la pestaña del navegador -->
        <link rel="shortcut icon" href="{{ asset('imagenes/empresa/molinstec.png') }}">
    </head>

        <body class="hold-transition skin-blue layout-top-nav">
                <div class="wrapper">
                    <header class="main-header">
                        <nav class="navbar navbar-static-top">
                            <div class="container">
                                <div class="navbar-header">
                                    <a href="#" class="navbar-brand"><b>MOLINSTEC</b></a>
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling -->

                                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">

                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">F-37</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/f37') !!}"><i class="fa fa-list"></i>Solicitudes F-37</a></li>
                                                <li><a href="{!!URL::to('/valorizado') !!}"><i class="fa fa-list"></i>Valorizado F-37</a></li>
                                                <li><a href="{!!URL::to('/cotizado') !!}"><i class="fa fa-list"></i>Cotizado F-37</a></li>
                                                <li><a href="{!!URL::to('/perdida') !!}"><i class="fa fa-list"></i>Perdida F-37</a></li>
                                                <li><a href="{!!URL::to('/finalizado') !!}"><i class="fa fa-list"></i>Finalizado F-37</a></li>
                                                <li><a href="{!!URL::to('/realizado') !!}"><i class="fa fa-list"></i>Realizado F-37</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Informes</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/pdf') !!}"><i class="fa fa-list"></i>Básculas</a></li>
                                                <li><a href="{!!URL::to('/pdf2') !!}"><i class="fa fa-list"></i>Balanzas</a></li>
                                                <li><a href="{!!URL::to('/pdf3') !!}"><i class="fa fa-list"></i>Masas</a></li>
                                                <li><a href="{!!URL::to('/pdf4') !!}"><i class="fa fa-list"></i>Pesómetros</a></li>
                                                <li><a href="{!!URL::to('/pdf5') !!}"><i class="fa fa-list"></i>Clientes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Parámetros</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/usuario') !!}"><i class="fa fa-users"></i>Usuarios</a>
                                                <li><a href="{!!URL::to('/rol') !!}"><i class="fa fa-circle"></i>Roles</a></li>
                                                <li><a href="{!!URL::to('/permiso') !!}"><i class="fa fa-users"></i>Permisos</a>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Bases</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/condicion') !!}"><i class="fa fa-circle"></i>Condiciones</a></li>
                                                <li><a href="{!!URL::to('/marca') !!}"><i class="fa fa-barcode"></i>Marcas</a></li>
                                                <li><a href="{!!URL::to('/material') !!}"><i class="fa fa-list"></i>Materiales</a></li>
                                                <li><a href="{!!URL::to('/modelo') !!}"><i class="fa fa-barcode"></i>Modelos</a></li>
                                                <li><a href="{!!URL::to('/unidad') !!}"><i class="fa fa-list"></i>Unidades</a></li>
                                                <li><a href="{!!URL::to('/tipo') !!}"><i class="fa fa-list"></i>Tipos</a></li>
                                                <li><a href="{!!URL::to('/tipo_equipo') !!}"><i class="fa fa-list"></i>Tipos Equipos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Equipos</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/f4') !!}"><i class="fa fa-list"></i>Lista de equipos</a></li>
                                                <li><a href="{!!URL::to('/f5') !!}"><i class="fa fa-list"></i>Listado de equipos</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Clientes</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/cliente') !!}"><i class="fa fa-list"></i>Lista Clientes</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>

                        <?php if(Auth::check()&& Auth::user()->is('vendedor'))
                             {?>
                                <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
                                    <ul class="nav navbar-nav">
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">F-37</a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="{!!URL::to('/f37') !!}"><i class="fa fa-list"></i>Solicitudes F-37</a></li>
                                                <li><a href="{!!URL::to('/cotizado') !!}"><i class="fa fa-list"></i>Cotizado F-37</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                        <?php } ?>
                            <!-- /.navbar-collapse -->
                            <!-- Navbar Right Menu -->
                            <div class="navbar-custom-menu">
                                <ul class="nav navbar-nav">
                                    <!-- User Account Menu -->
                                    <li class="dropdown user user-menu">
                                        <!-- Menu Toggle Button -->
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                            <span class="hidden-xs">{{Auth::user()->name .' '. Auth::user()->apellido_paterno}}</span>
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
                                @yield('contenido')
                        </section><!-- /.content -->
                    </div><!-- /.content-wrapper -->
                </div><!-- ./wrapper -->
        <!-- jQuery 2.1.4 -->
        {!!Html::script('js/jQuery-2.1.4.min.js')!!}
        <!-- Bootstrap 3.3.5 -->
        {!!Html::script('js/bootstrap.min.js')!!}
        <!-- AdminLTE App -->
        {!!Html::script('js/app.min.js')!!}
        <!-- DdataTable -->
        {!!Html::script('plugins/DataTables/media/js/jquery.dataTables.min.js')!!}
        <!-- ui  -->
        {!!Html::script('plugins/jquery-ui/ui/minified/jquery-ui.min.js')!!}
        @yield('scripts')

    </body>
</html>

