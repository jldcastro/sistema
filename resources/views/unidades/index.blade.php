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
        @if(count($unidades)>0)
            <table id="unidad" class="cell-border">
                <thead>
                    <th>Unidad</th>
                    <th>Tipo equipo</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($unidades as $unidad)
                        <tr>
                            <td>{{$unidad->nombre}}</td>
                            <td>{{$unidad->tipo_equipo->nombre}}</td>
                            <td>{!!link_to_route('unidad.edit',$title ='Editar',$parameters = $unidad->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                <a href="" data-target="#modal-delete-{{$unidad->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('...unidades.modal')
            </table>
            {!!$unidades->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna unidad de medida dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/unidad/create') !!}" style="color: #ffffff">Agregar Unidad</a></button>
        </div>
    @endsection
    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                $("#unidad").DataTable({
                });
            });
        </script>
    @endsection