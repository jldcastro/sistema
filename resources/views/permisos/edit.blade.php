@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="box-header with-border">
                    <h3 class="box-title">Actualizar permiso usuario</h3>
                </div><!-- /.box-header -->
                {!!Form::model($permiso,['route' => ['permiso.update',$permiso -> id],'method' => 'PUT'])!!}
                <div class="form-group has-feedback col-md-12">
                    <div class="form-group">
                        {!!Form::label('name','Permiso',['class' =>'col-md-2 control-label'])!!}
                        {!!Form::text('name',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('slug','Slug',['class' =>'col-md-2 control-label'])!!}
                        {!!Form::text('slug',null,['class' => 'form-control input','style' => 'width:400px;'])!!}
                    </div>
                    <div class="form-group">
                        {!!Form::label('description','Descripción',['class' =>'col-md-2 control-label'])!!}
                        {!!Form::text('description',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
                    </div>
                    <button type="button" class=".btn btn-danger btn-flat col-md-offset-4"><a href="{!! URL::to('/permiso') !!}" style="color: #ffffff">Atrás</a></button>
                    {!!Form::submit('Actualizar',['class' => '.btn btn-primary col-md-offset-1'])!!}
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    @endsection



