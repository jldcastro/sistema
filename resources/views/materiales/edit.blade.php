@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Actualizar datos tipo material</h3>
                    </div><!-- /.box-header -->
                    {!!Form::model($material,['route' => ['material.update',$material -> id],'method' => 'PUT'])!!}
                         @include('materiales.formularios.material')
                        {!!Form::submit('Actualizar',['class' => '.btn btn-primary col-md-offset-5'])!!}
                    {!!Form::close()!!}
                    {!!Form::open(['route' => ['material.destroy',$material->id],'method' => 'DELETE'])!!}
                         {!!Form::submit('Eliminar',['class' => 'btn btn-danger btn-xs'])!!}
                    {!!Form::close()!!}
            </div>
        </div>
    @endsection