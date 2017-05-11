<div class="form-group has-feedback col-md-12">
    <div class="form-group">
        {!!Form::label('name','Rol',['class' =>'col-md-2 control-label'])!!}
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

</div>