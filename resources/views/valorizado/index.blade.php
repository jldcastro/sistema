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
                <th>Estado</th>
                <th>Color estado</th>
                <th>Opciones</th>
            </thead>
            @foreach($f37s as $f37)
            <tbody>
                <td>{{$f37->numero}}</td>
                <td>{{$f37->cliente}}</td>
                <td>{{$f37->estado}}</td>
                <td><?= $fecha_solicitud = $f37->fecha_solicitud?><?php
                        $fecha_solicitud = $f37->fecha_solicitud;
                        $fecha_ingreso = Carbon\Carbon::createFromFormat('Y-m-d', $fecha_solicitud);
                        $fecha_solicitud1 = $fecha_ingreso->addDay(1);
                        $fecha_solicitud3 = $fecha_ingreso->addDay(3);
                        $fecha_solicitud5 = $fecha_ingreso->addDay(5);
                        $hoy = Carbon\Carbon::now();

                    ?>


                        </td>
                <td>{!!link_to_route('valorizado.edit',$title ='Editar',$parameters = $f37->numero,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
                         <td>  <a role = "button" class="btn btn-primary btn-circle"
                           href="javascript::ajaxLoad('valorizado/brian/{{$f37->numero}}')"><i class="fa fa-list"></i></a></td>

            </tbody>
            @endforeach

        </table>

        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 dentro de la lista</label></div>
        @endif
    @endsection