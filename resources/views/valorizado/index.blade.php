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
        @if(count($f37s)>0)
        <table class="table table-hover">
            <thead>
                <th>N°</th>
                <th>Cliente</th>
                <th>Opciones</th>
            </thead>
            @foreach($f37s as $f37)
            <tbody>
                <td>{{$f37->numero}}</td>
                <td>{{$f37->cliente}}</td>
                <td>{!!link_to_route('f37.show',$title ='Ver',$parameters = $f37->numero,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endforeach
        </table>
        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/f37/create') !!}" style="color: #ffffff">Agregar Solicitud F-37</a></button>
        </div>
    @endsection