<div class="form-group has-feedback col-md-12">
    <div class="form-group">
        {!!Form::label('nombre','Nombre',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('nombre',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('rut_cliente','Rut',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('rut_cliente',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('ubicacion','Ubicación',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('ubicacion',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('planta','Planta',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('planta',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
</div>