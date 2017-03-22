@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar nuevo tipo de material</h3>
                    </div><!-- /.box-header -->
                    {!!Form::open(['route' => 'material.store','method' => 'POST'])!!}
                        @include('materiales.formularios.material')
                        {!!Form::submit('Registrar',['class' => '.btn btn-primary col-md-offset-5'])!!}
                    {!!Form::close()!!}
            </div>
        </div>
    @endsection