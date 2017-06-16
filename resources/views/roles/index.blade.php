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
        @if(count($roles)>0)
            <table id="rol" class="cell-border">
                <thead>
                    <th>Nombre</th>
                    <th>Slug</th>
                    <th>Descripción</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($roles as $rol)
                        <tr>
                            <td>{{$rol->name}}</td>
                            <td>{{$rol->slug}}</td>
                            <td>{{$rol->description}}</td>
                            <td>{!!link_to_route('rol.edit',$title ='Editar',$parameters = $rol->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                <a href="" data-target="#modal-delete-{{$rol->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('...roles.modal')
            </table>
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún rol dentro de la lista</label></div>
        @endif
            <div class="form-group has-feedback">
                <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/rol/create') !!}" style="color: #ffffff">Agregar Rol</a></button>
            </div>
    @endsection
    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                $("#rol").DataTable({
                });
            });
        </script>
    @endsection