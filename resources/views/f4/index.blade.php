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
        @if(count($f4s)>0)
        <table class="table table-hover">
            <thead>
                <th>Equipo</th>
                <th>CMarca/Modelo</th>
                <th>Opciones</th>
            </thead>
            @foreach($f4s as $f4)
            <tbody>
                <td>{{$f4->numero}}</td>
                <td>{{$f4->cliente}}</td>
                <td>{!!link_to_route('f4.show',$title ='Ver',$parameters = $f4->id,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endforeach
        </table>
        @else
            <br/><div class='alert alert-warning'><label>No existe ningún equipo dentro de la lista</label></div>
        @endif
        <div class="form-group has-feedback">
            <button class=".btn btn-primary col-md-offset-5"><a href="{!!URL::to('/f4/create') !!}" style="color: #ffffff">Agregar Equipo</a></button>
        </div>
    @endsection