@extends('administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ingresar Nuevo Formulario</h3>
                    </div><!-- /.box-header -->

                    {!!Form::open(['route' => 'formulario.store','method' => 'POST'])!!}
                        <div class="form-group has-feedback col-md-12">
                            {!!Form::label('Usuario')!!}
                            {!!Form::text('usuario',null,['class' => 'form-control'])!!}
                        </div>

                        <div class="form-group has-feedback col-md-12">
                            {!! Form::label('State') !!}
                            {!! Form::select('state', $statesList, ['class' => 'form-control'],['id'=>'state']) !!}
                        </div>

                        <div class="form-group has-feedback col-md-12">
                            {!! Form::label('City') !!}
                            {!! Form::select('city',[null=>'Please Select'],['id'=>'city']) !!}
                        </div>

                        {!!Form::submit('Registrar',['class' => '.btn btn-primary col-md-offset-5'])!!}
                    {!!Form::close()!!}
            </div>
        </div>


    @endsection

