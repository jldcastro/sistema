@extends('...administrador.index')
    @section('contenido')
        @if(Session::has('mensaje'))
            <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Mensaje</h4>
                 {{Session::get('mensaje')}}
            </div>
        @endif
        @if(Session::has('mensaje2'))
            <div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i>Mensaje</h4>
                 {{Session::get('mensaje2')}}
            </div>
        @endif
        <table class="table table-hover">
            <thead>
                <th>Nombre</th>
                <th>Opciones</th>
            </thead>
            @foreach($tipos_equipos as $tipo_equipo)
            <tbody>
                <td>{{$tipo_equipo->nombre}}</td>
                <td>{!!link_to_route('tipo_equipo.edit',$title ='Editar',$parameters = $tipo_equipo->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endforeach
        </table>
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/tipo_equipo/create') !!}" style="color: #ffffff">Agregar tipo equipo</a></button>
        </div>
    @endsection