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
        <?php $cont = 0; ?>
        @foreach($f37s as $f37)
            <?php   $fecha_solicitud1[] = $f37->created_at;
                    $fecha_solicitud3[] = $f37->created_at;
                    $fecha_solicitud5[] = $f37->created_at;
                    $cont = $cont+1;
            ?>
        @endforeach
        <table class="table table-hover">
            <thead>
                <th>N°</th>
                <th>Cliente</th>
                <th>Estado</th>
                <th>Color estado</th>
                <th>Opciones</th>
            </thead>
            <?php $fecha_actual = \Carbon\Carbon::now();
                $cont2 =0;
                for($i=0;$i<$cont;$i=$i+1){
                    $fecha_solicitud2[$i] = $fecha_solicitud1[$i]->addDay();
                    $fecha_solicitud4[$i] = $fecha_solicitud3[$i]->addDays(3);
                    $fecha_solicitud6[$i] = $fecha_solicitud5[$i]->addDays(5);

                    if($fecha_actual<=$fecha_solicitud2[$i]){
                        $fecha_final[]= "<td style='background-color: #008000;'></td>";
                        $cont2 = $cont2+1;
                    }

                    elseif($fecha_actual>$fecha_solicitud2[$i] and $fecha_actual<=$fecha_solicitud4[$i]){
                        $fecha_final[]= "<td style='background-color: #ffff00;'></td>";
                    }

                    else{
                        $fecha_final[]= "<td style='background-color: #ff0000;'></td>";
                    }
            }?>

            @foreach($f37s as $f37)
            <tbody>
                <td>{{$f37->numero}}</td>
                <td>{{$f37->cliente}}</td>
                <td>{{$f37->estado}}</td>
                <?php for($i=0;$i<$cont2;$i++){
                    echo $fecha_final[$i];
                }  ?>
                <td>{!!link_to_route('valorizado.edit',$title ='Editar',$parameters = $f37->numero,$attributes = ['class' => 'btn  btn-success btn-xs'])!!}</td>
            </tbody>
            @endforeach











        </table>

        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 dentro de la lista</label></div>
        @endif
    @endsection