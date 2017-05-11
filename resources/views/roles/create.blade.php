@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar nuevo rol de usuario</h3>
                    </div><!-- /.box-header -->
                    {!!Form::open(['route' => 'rol.store','method' => 'POST'])!!}
                        @include('roles.formularios.rol')
                        <button type="button" class=".btn btn-danger btn-flat col-md-offset-4"><a href="{!! URL::to('/rol') !!}" style="color: #ffffff">Atrás</a></button>
                        {!!Form::submit('Registrar',['class' => '.btn btn-primary col-md-offset-1'])!!}
                    {!!Form::close()!!}
            </div>
        </div>
    @endsection



