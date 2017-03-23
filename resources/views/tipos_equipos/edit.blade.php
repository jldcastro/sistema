@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar datos tipo equipo</h3>
                    </div><!-- /.box-header -->
                    {!!Form::model($tipo_equipo,['route' => ['tipo_equipo.update',$tipo_equipo -> id],'method' => 'PUT'])!!}
                         @include('tipos_equipos.formularios.tipo_equipo')
                        {!!Form::submit('Actualizar',['class' => '.btn btn-primary col-md-offset-5'])!!}
                    {!!Form::close()!!}
                    {!!Form::open(['route' => ['tipo_equipo.destroy',$tipo_equipo->id],'method' => 'DELETE'])!!}
                         {!!Form::submit('Eliminar',['class' => 'btn btn-danger btn-xs'])!!}
                    {!!Form::close()!!}
            </div>
        </div>
    @endsection