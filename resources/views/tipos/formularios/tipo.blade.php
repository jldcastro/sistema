<div class="form-group has-feedback col-md-12">
    <div class="form-group">
        {!!Form::label('nombre','Tipo',['class' => 'col-md-4 control-label'])!!}
        {!!Form::text('nombre',null,['class' => 'form-control input', 'style' => 'width: 200px;'])!!}
    </div>
    <div class="form-group">
        {!!Form::label('tipoEquipo_id','Tipo Equipo',['class' => 'col-md-4 control-label'])!!}
        <th><select id="tipoEquipo_id" name="tipoEquipo_id" style="width: 200px;">
            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
            @foreach($tipos_equipos as $key =>$tipo_equipo)
                <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
            @endforeach
        </select></th>
    </div>
</div>