@extends('...administrador.index')
    @section('contenido')
        @if(Session::has('mensaje'))
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         {{Session::get('mensaje')}}
                    </div>
                @endif
                @if(Session::has('mensaje2'))
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                         {{Session::get('mensaje2')}}
                    </div>
                @endif
                @if(count($usuarios)>0)
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Código</th>
                            <th>Nombre</th>
                            <th>Apellido Paterno</th>
                            <th>Rut</th>
                            <th>Rol/es</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    @foreach($usuarios as $usuario)
                    <tbody>
                        <tr>
                            <td>{{$usuario->codigo_usuario}}</td>
                            <td>{{$usuario->name}}</td>
                            <td>{{$usuario->apellido_paterno}}</td>
                            <td>{{$usuario->rut_usuario}}</td>
                            <td><span class="label label-default">
                                @foreach($usuario->getRoles() as $roles)
                           			 {{  $roles.","  }}
                                @endforeach

                                -</span>
                            </td>
                            <td>{!!link_to_route('usuario.edit',$title ='Editar',$parameters = $usuario->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                <a href="" data-target="#modal-delete-{{$usuario->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                    @include('...usuarios.modal')
                </table>
                {!!$usuarios->render()!!}
                @else
                    <br/><div class='alert alert-warning'><label>No existe ningún usuario dentro de la lista</label></div>
                @endif
                <div class="form-group has-feedback">
                    <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/usuario/create') !!}" style="color: #ffffff">Agregar Usuario</a></button>
                </div>
    @endsection