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
            @foreach($marcas as $marca)
            <tbody>
                <td>{{$marca->nombre}}</td>
                <td>{!!link_to_route('marca.edit',$title ='Editar',$parameters = $marca->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endforeach
        </table>
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/marca/create') !!}" style="color: #ffffff">Agregar Marca</a></button>
        </div>
    @endsection