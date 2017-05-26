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

          <table class="table table-hover">
            <thead>
                <th>N°</th>
                <th>Cliente</th>
                <th>Estado</th>
                <th>Color estado</th>
                <th>Opciones</th>
            </thead>


  @if(count($f37s)>0)
<?php $cont = 0; ?>
        @foreach($f37s as $f37)
         <tbody>
                <td>{{$f37->numero}}</td>
                <td>{{$f37->cliente}}</td>
                <td>{{$f37->estado}}</td>
            <?php   

//todo quedo dentro de 1 foreach porque como lo teniastu guardando en un arreglo era demasiado engorroso, aparte que tabai guardando mal al principio porque te guardaba siempre ll mismo
            //la fecha actual
            $fecha_actual = \Carbon\Carbon::now();
//sumo de las fechas directamente del cmpo de la tabla f37, porque si la guardo en una vaiable funciona mal
            //sumo 1 3 y 5 dias
             $fecha_solicitud1dia= $f37->created_at->addDay();
                    $fecha_solicitud3dias = $f37->created_at->addDays(3);
                    $fecha_solicitud5dias = $f37->created_at->addDays(5);


                    //estos son para mostrar las fechas en pantalla y ver si estan bien o no
                    echo 'fecha creacion original:'; echo $f37->created_at;echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";


                    echo 'fecha 1dia:'; echo $fecha_solicitud1dia;echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                    echo 'fecha 3dias:'; echo $fecha_solicitud3dias; echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";

                    echo 'fecha 5dias:'; echo $fecha_solicitud5dias;echo"<br>";

// si se ingreso ayer o hoy
                       if($fecha_actual<=$fecha_solicitud1dia):
                        echo "<td style='background-color: #008000;'></td>";
                    
//si se ingreso antes de ayer o 3 dias tras

                elseif($fecha_actual>$fecha_solicitud1dia and $fecha_actual<=$fecha_solicitud3dias):                  
                 echo "<td style='background-color: #ffff00;'></td>";
                    
//si se ingreso antes de ayer o 3 o mas dias atras

//obs:el 5 dias no lo pusiste vo, pero seria lo mismo que el 3
                    else:
                        echo "<td style='background-color: #ff0000;'></td>";
                    
                    endif;
            ?>
      
    

          
                <td>{!!link_to_route('valorizado.edit',$title ='Editar',$parameters = $f37->numero,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endforeach











        </table>

        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 dentro de la lista</label></div>
        @endif
    @endsection