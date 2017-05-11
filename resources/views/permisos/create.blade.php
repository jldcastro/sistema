@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-12">
                <div class="box-header with-border">
                    <h3>Nuevo permiso</h3>
                </div><!-- /.box-header -->
                {!!Form::open(['route' => 'permiso.store','method' => 'POST'])!!}
                    @include('permisos.formularios.permiso')
                {!!Form::close()!!}
                <div class="col-md-6">
<div class="alert alert-success alert-dismissible" id="msj-success" role="alert" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Permiso de usuario asignado correctamente</strong>
        </div>
        <div class="alert alert-danger alert-dismissible" id="msj-success2" role="alert" style="display: none;">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>Permiso de usuario denegado correctamente</strong>
        </div>
		             <form   action="{{ url('asignar_permiso') }}"  method="post" id="f_asignar_permiso" class="formentrada"  >
						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<div class="form-group">
							<label class="col-md-2 control-label" for="rol_sel">Rol</label>
		                     <select id="rol_sel" name="rol_sel" style="width: 400px;" required>
		                     @foreach($roles as $rol)
		                     <option value="{{ $rol->id }}">{{ $rol->name }}</option>
		                     @endforeach
		    				</select>
						</div><!-- /.form-group -->

						<div class="form-group">
							<label class="col-md-2 control-label" for="permiso_rol" >Permisos</label>

		                     <select id="permiso_rol" name="permiso_rol" style="width:400px;;" required>
		                     @foreach($permisos as $permiso)
		                     <option value="{{ $permiso->id }}">{{ $permiso->name }}</option>
		                     @endforeach
		    				</select>


						</div><!-- /.form-group -->

						<div class="col-md-12 col-lg-offset-3">
		                        <button type="submit" class=".btn btn-primary">Agregar Permiso</button>
		                </div>
					 </form>
		        </div>

            </div>
        </div>
<div class="col-md-12 box-white">

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
							    <th>Acción</th>

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




