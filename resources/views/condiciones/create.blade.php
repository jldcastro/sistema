@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
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
                <div class="box-header with-border">
                    <h3 class="box-title">Ingresar nueva condición equipo</h3>
                </div><!-- /.box-header -->
                {!!Form::open(['route' => 'condicion.store','method' => 'POST'])!!}
                    @include('condiciones.formularios.condicion')
                    <button type="button" class=".btn btn-danger btn-flat col-md-offset-2"><a href="{!! URL::to('/condicion') !!}" style="color: #ffffff">Atrás</a></button>
                    {!!Form::submit('Registrar',['class' => '.btn btn-primary col-md-offset-1'])!!}
                {!!Form::close()!!}
            </div>
        </div>
    @endsection

