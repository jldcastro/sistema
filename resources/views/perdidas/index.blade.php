@extends('...administrador.index')
    @section('contenido')
        <div class="box-header">
            <h3 class="box-title">Lista de solicitudes pérdidas F-37</h3>
            <br><br>
        </div>
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
        <table id="cotizado" class="cell-border">
            <thead>
                <th style="width: 10px;">N°</th>
                <th style="width: 200px;">Cliente</th>
                <th style="width: 150px;">Fecha solicitud</th>
                <th style="width: 100px;">Estado</th>
            </thead>

            @if(count($f37s)>0)
                <?php $cont = 0; ?>
                <tbody>
                @foreach($f37s as $f37)
                @if($f37->estado == 'perdida')
                <tr>
                <td>{{$f37->numero}}</td>
                <td>{{$f37->cliente->nombre}}</td>
                <td>{{date('d-m-Y', strtotime($f37->fecha_solicitud))}}</td>
                <td>{{$f37->estado}}</td>
            </tr>

            @endif
            @endforeach
</tbody>
        </table>
        @else
            <br/><div class='alert alert-warning'><label>No existe ninguna solicitud F-37 perdida</label></div>
        @endif
    @endsection
    @section('scripts')
    <script type="text/javascript">
            $(document).ready(function(){
                $("#cotizado").DataTable({
                });
            });
    </script>
    @endsection
