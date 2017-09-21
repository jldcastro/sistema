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
        @if(count($condiciones)>0)
            <table id="condicion" class="cell-border">
                <thead>
                    <th>Condición</th>
                    <th>Tipo equipo</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($condiciones as $condicion)
                        <tr>
                            <td>{{$condicion->nombre}}</td>
                            <td>{{$condicion->tipo_equipo->nombre}}</td>
                            <td>{!!link_to_route('condicion.edit',$title ='Editar',$parameters = $condicion->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                            <a href="" data-target="#modal-delete-{{$condicion->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('...condiciones.modal')
            </table>
            {!!$condiciones->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna condición de equipo dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/condicion/create') !!}" style="color: #ffffff">Agregar Condición</a></button>
        </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#condicion").DataTable({
                    });
                });
            </script>
    @endsection
