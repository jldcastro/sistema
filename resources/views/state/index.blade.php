@extends('administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar Nuevo State</h3>
                    </div><!-- /.box-header -->

                    <div class="form-group has-feedback col-md-12">
                        {!! Form::select('state',$states,null,['id'=>'state']) !!}

                        {!! Form::select('town',['placeholder' =>'Selecciona'],null,['id'=>'town']) !!}
                    </div>
            </div>
        </div>

    @endsection