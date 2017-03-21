@extends('layouts.inicio')
    @section('contenido')
        <body class="hold-transition login-page">
            <div class="login-box">
                <div class="login-logo">
                    <img src="imagenes/empresa/logo.png">
                </div><!-- /.login-logo -->
                <div class="login-box-body">
                    <p class="login-box-msg">Iniciar sesión</p>

                    <form action="login" method="post">
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <div class="form-group has-feedback">
                            <input type="email" class="form-control" name="email" placeholder="email">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group">
                             <button type="submit" class=".btn btn-primary"><i class="fa fa-key"></i> Ingresar</button>
                        </div>
                    </form>
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
    @endsection

