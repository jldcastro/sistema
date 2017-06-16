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
        @if(count($materiales)>0)
            <table id="material" class="cell-border">
                <thead>
                    <th>Material</th>
                    <th>Tipo equipo</th>
                    <th>Opciones</th>
                </thead>
                <tbody>
                    @foreach($materiales as $material)
                        <tr>
                            <td>{{$material->nombre}}</td>
                            <td>{{$material->tipo_equipo->nombre}}</td>
                            <td>{!!link_to_route('material.edit',$title ='Editar',$parameters = $material->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                <a href="" data-target="#modal-delete-{{$material->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
                @include('...materiales.modal')
            </table>
            {!!$materiales->render()!!}
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún material dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/material/create') !!}" style="color: #ffffff">Agregar Material</a></button>
        </div>
    @endsection
    @section('scripts')
        <script type="text/javascript">
            $(document).ready(function(){
                $("#material").DataTable({
                });
            });
        </script>
    @endsection