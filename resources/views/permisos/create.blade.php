@extends('...administrador.index')
    @section('contenido')
        <div class="row">

            <div class="col-md-6">
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
                    <h3>Nuevo permiso</h3>
                </div><!-- /.box-header -->
                {!!Form::open(['route' => 'permiso.store','method' => 'POST'])!!}

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
                    {!!Form::submit('Registrar',['class' => '.btn btn-primary col-md-offset-1'])!!}

                {!!Form::close()!!}
            </div>
            <div class="col-md-6">
                <br><br><br>
                <form   action="{{ action('UsuarioController@asignar_permiso') }}"  method="post" id="f_asignar_permiso" class="formentrada"  >
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group">
                        <label class="col-sm-2" for="rol">Rol*</label>
                        <div class="col-sm-10" >
                            <select id="rol_sel" name="rol_sel" class="form-control" required>
                                @foreach($roles as $rol)
                                    <option value="{{ $rol->id }}">{{ $rol->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <label class="col-sm-2" for="rol">Permisos*</label>
                        <div class="col-sm-10" >
                            <select id="permiso_rol" name="permiso_rol" class="form-control" required>
                                @foreach($permisos as $permiso)
                                    <option value="{{ $permiso->id }}">{{ $permiso->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div><!-- /.form-group -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary col-md-offset-5">Asignar Permiso</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="col-md-12 box-white">
            <div class="alert alert-success alert-dismissible" id="msj-success" role="alert" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Permiso de usuario asignado correctamente</strong>
            </div>
            <div class="alert alert-danger alert-dismissible" id="msj-success2" role="alert" style="display: none;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <strong>Permiso de usuario denegado correctamente</strong>
            </div>
            @foreach($roles as $rol)
                <div class="table-responsive" >
	                <table  class="table table-hover table-striped" cellspacing="0" width="100%">
                    <thead>
                        <th colspan="5" style="text-align: center; background-color: #b8ccde;" >Permisos del Usuario {{ $rol->name }}</th>
                    </thead>
				    <thead>
    				    <th>codigo</th>
						<th>nombre</th>
						<th>slug</th>
						<th>descripcion</th>
					    <th>Opciones</th>
				    </thead>
	                <tbody>


	    @foreach($rol->permissions as $permiso)


		 <tr role="row" class="odd" id="filaP_{{ $permiso->id }}">
			<td>{{ $permiso->id }}</td>
			<td><span class="label label-default">{{ $permiso->name or "Ninguno" }}</span></td>
			<td class="mailbox-messages mailbox-name"><a href="javascript:void(0);" style="display:block"></i>&nbsp;&nbsp;{{ $permiso->slug  }}</a></td>
			<td>{{ $permiso->description }}</td>
			<td>
			<button type="button"  class="btn  btn-danger btn-xs"  onclick="borrar_permiso({{ $rol->id }},{{ $permiso->id }});"  ><i class="fa fa-fw fa-remove"></i></button>
			</td>
		 </tr>

	    @endforeach
		            </tbody>
		</table>

	</div>
@endforeach

    </div>
    @endsection
    @section('scripts')
<script type="text/javascript">

function borrar_permiso(idrol,idper){

     var miurl="http://localhost/sistema/public"+"/quitar_permiso/"+idrol+"/"+idper+"";
     $("#filaP_"+idper+"").html($("#cargador_empresa").html() );
        $.ajax({
    url: miurl,
        success:function(){
                        $('#msj-success2').fadeIn();
                    }
    }).done( function(resul)
    {
     $("#filaP_"+idper+"").hide();

    }).fail( function()
   {
     alert("No se borro correctamente, intentalo nuevamente o revisa tu conexion");
   }) ;
}

$(document).on("submit",".formentrada",function(e){
    e.preventDefault();
    var quien=$(this).attr("id");
    var formu=$(this);
    var varurl="";
    if(quien=="f_asignar_permiso"){  var varurl=$(this).attr("action");  var div_resul="capa_formularios";  }



    $.ajax({
        // la URL para la petición
        url : varurl,
        data : formu.serialize(),
        type : 'POST',
        dataType : 'html',

        success : function(resul) {
            $("#"+div_resul+"").html(resul);
            $('#msj-success').fadeIn();
        },
        error : function(xhr, status) {
            $("#"+div_resul+"").html('ha ocurrido un error, revise su conexion e intentelo nuevamente');
        }

    });


});

</script>
@endsection

