@extends('...administrador.index')
    @section('contenido')
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reporte</th>
                    <th>Ver</th>
                    <th>Descargar</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Reporte cantidad masas</td>
                    <td><a href="crear_reporte_equipos3/1" target="_blank"><button class="btn btn-block btn-primary btn-xs">Ver</button></a></td>
                    <td><a href="crear_reporte_equipos3/2" target="_blank"><button class="btn btn-block btn-success btn-xs">Descargar</button></a></td>
                </tr>
            </tbody>
        </table>
    @endsection
    @section('scripts')

    @endsection