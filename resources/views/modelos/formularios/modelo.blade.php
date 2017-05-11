<div class="form-group has-feedback col-md-12">
    <div class="form-group">
        {!!Form::label('nombre','Modelo',['class' => 'col-md-4 control-label'])!!}
        {!!Form::text('nombre',null,['class' => 'form-control input'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('marca_id','Marca',['class' => 'col-md-4 control-label'])!!}
        <th><select id="marca_id" name="marca_id" style="width: 150px;">
            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
            @foreach($marcas as $key =>$marca)
                <option value="{!!$key!!}">{!!$marca!!}</option>
            @endforeach
        </select></th>
    </div>
</div>