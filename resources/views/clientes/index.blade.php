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
                @if(count($clientes)>0)
                <table id="cliente" class="cell-border">
                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Rut</th>
                            <th>Planta</th>
                            <th>Ubicación</th>
                            <th>Opciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nombre}}</td>
                                <td>{{$cliente->rut_cliente}}</td>
                                <td>{{$cliente->planta}}</td>
                                <td>{{$cliente->ubicacion}}</td>
                                <td>{!!link_to_route('cliente.edit',$title ='Editar',$parameters = $cliente->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}
                                    <a href="" data-target="#modal-delete-{{$cliente->id}}" data-toggle="modal"><button class="btn btn-danger btn-xs">Eliminar</button></a>
                                </td>
                            </tr>
                    @endforeach
                    </tbody>
                    @include('...clientes.modal')
                </table>
                {!!$clientes->render()!!}
                @else
                    <br/><div class='alert alert-warning'><label>No existe ningún cliente dentro de la lista</label></div>
                @endif
                <div class="form-group has-feedback">
                    <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/cliente/create') !!}" style="color: #ffffff">Agregar Cliente</a></button>
                </div>
    @endsection
    @section('scripts')
            <script type="text/javascript">
                $(document).ready(function(){
                    $("#cliente").DataTable({
                    });
                });
            </script>
    @endsection