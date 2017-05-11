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
        @if(count($permisos)>0)
        <table class="table table-hover">
            <thead>
                <th>Nombre</th>
                <th>Slug</th>
                <th>Descripción</th>
                <th>Opciones</th>
            </thead>
            @foreach($permisos as $permiso)
            <tbody>
                <td>{{$permiso->name}}</td>
                <td>{{$permiso->slug}}</td>
                <td>{{$permiso->description}}</td>
                <td>{!!link_to_route('permiso.edit',$title ='Editar',$parameters = $permiso->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                    <a href="" data-target="#modal-delete-{{$permiso->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                </td>
            </tbody>
            @endforeach
            @include('...permisos.modal')
        </table>
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún permiso de usuario dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/permiso/create') !!}" style="color: #ffffff">Agregar permiso usuario</a></button>
        </div>
    @endsection