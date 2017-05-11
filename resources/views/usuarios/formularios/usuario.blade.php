<div class="form-group has-feedback col-md-12">
    <div class="form-group">
        {!!Form::label('codigo_usuario','Código',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('codigo_usuario',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('name','Nombre',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('name',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('email','Correo electrónico',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('email',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('password','Contraseña',['class' =>'col-md-3 control-label'])!!}
        {!!Form::password('password',['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('apellido_paterno','Apellido Paterno',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('apellido_paterno',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('apellido_materno','Apellido Materno',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('apellido_materno',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('rut_usuario','Rut',['class' =>'col-md-3 control-label'])!!}
        {!!Form::text('rut_usuario',null,['class' => 'form-control input', 'style' => 'width:400px;'])!!}
    </div>
</div>