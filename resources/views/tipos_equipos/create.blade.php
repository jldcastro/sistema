@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar nuevo tipo equipo</h3>
                    </div><!-- /.box-header -->
                    {!!Form::open(['route' => 'tipo_equipo.store','method' => 'POST'])!!}
                        @include('tipos_equipos.formularios.tipo_equipo')
                        {!!Form::submit('Registrar',['class' => '.btn btn-primary col-md-offset-5'])!!}
                    {!!Form::close()!!}
            </div>
        </div>
    @endsection