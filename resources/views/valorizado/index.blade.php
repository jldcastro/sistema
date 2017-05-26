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

        <table class="table table-hover" cellspacing="0" width="100%">
            <thead>
                <th style="width: 10px;">N°</th>
                <th style="width: 200px;">Cliente</th>
                <th style="width: 150px;">Fecha solicitud</th>
                <th style="width: 100px;">Estado</th>
                <th style="width: 500px;">Color estado</th>
                <th>Opciones</th>
            </thead>

            @if(count($f37s)>0)
                <?php $cont = 0; ?>
                @foreach($f37s as $f37)
                @if($f37->estado == 'valorizado')
            <tbody>
                <td>{{$f37->numero}}</td>
                <td>{{$f37->cliente}}</td>
                <td>{{date('d-m-Y', strtotime($f37->fecha_solicitud))}}</td>
                <td>{{$f37->estado}}</td>
                <?php
                    //la fecha actual
                 $fecha_actual = \Carbon\Carbon::now();
                 //sumo de las fechas directamente del cmpo de la tabla f37, porque si la guardo en una vaiable funciona mal
                 //sumo 1 3 y 5 dias
                 $fecha_solicitud1dia= $f37->created_at->addDay();
                 $fecha_solicitud3dias = $f37->created_at->addDays(3);
                 $fecha_solicitud5dias = $f37->created_at->addDays(5);
                 // si se ingreso ayer o hoy
                 if($fecha_actual<=$fecha_solicitud1dia){
                    echo "<td style='background-color: #008000;'></td>";
                 }//si se ingreso antes de ayer o 3 dias tras
                    elseif($fecha_actual>$fecha_solicitud1dia and $fecha_actual<=$fecha_solicitud3dias){
                     echo "<td style='background-color: #ffff00;'></td>";
                 }//si se ingreso antes de ayer o 3 o mas dias atras
                 //obs:el 5 dias no lo pusiste vo, pero seria lo mismo que el 3
                    else{
                     echo "<td style='background-color: #ff0000;'></td>";

                  }
                             ?>
                <td>{!!link_to_route('valorizado.edit',$title ='Editar',$parameters = $f37->numero,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endif
            @endforeach
        </table>
        <h5>Color Verde:Ha transcurrido hasta un día desde que se enviaron los datos</h5>
        <h5>Color Amarillo:Han transcurrido desde un día hasta tres días desde que se enviaron los datos</h5>
        <h5>Color Rojo:Han transcurrido más de tres días desde que se enviaron los datos</h5>
        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 valorizada dentro de la lista</label></div>
        @endif
    @endsection