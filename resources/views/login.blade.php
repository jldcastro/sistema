@extends('layouts.inicio')
    @section('contenido')
<body class="hold-transition login-page" xmlns="http://www.w3.org/1999/html">
            <div class="login-box">
                <div class="login-logo">
                    <img src="imagenes/empresa/logo.png">
                </div><!-- /.login-logo -->
                <div class="login-box-body">
                    @if(count($errors)>0)
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{!! $error !!}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                    @if(Session::has('mensaje-error'))
                        <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            {!!Session::get('mensaje-error')!!}
                        </div>
                    @endif
                    <p class="login-box-msg">Iniciar sesión</p>
                    {!! Form::open(['route' => 'login.store','method' => 'POST']) !!}
                        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

                        <div class="form-group has-feedback">
                            <input type="text" class="form-control" name="rut_usuario" placeholder="Rut">
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña">
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>

                        <div class="form-group">
                             <button type="submit" class=".btn btn-primary"><i class="fa fa-key"></i> Ingresar</button>
                        </div>
                    {!! Form::close() !!}
                </div><!-- /.login-box-body -->
            </div><!-- /.login-box -->
    @endsection

