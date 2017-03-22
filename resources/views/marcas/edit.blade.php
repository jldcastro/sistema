@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar datos marca</h3>
                    </div><!-- /.box-header -->
                    {!!Form::model($marca,['route' => ['marca.update',$marca -> id],'method' => 'PUT'])!!}
                         @include('marcas.formularios.marca')
                        {!!Form::submit('Actualizar',['class' => '.btn btn-primary col-md-offset-5'])!!}
                    {!!Form::close()!!}
                    {!!Form::open(['route' => ['marca.destroy',$marca->id],'method' => 'DELETE'])!!}
                         {!!Form::submit('Eliminar',['class' => 'btn btn-danger btn-xs'])!!}
                    {!!Form::close()!!}
            </div>
        </div>
    @endsection