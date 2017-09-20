@extends('...administrador.index')
    @section('contenido')
        {!!Form::open(['url' => '/f37','method' => 'POST'])!!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="id" class="col-xs-4 control-label">N°:</label>
                        <input type="text" class="form-control input" id="numero" name="numero" value="<?= $codigo?>"disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="fecha_solicitud" class="col-xs-4 control-label">Fecha solicitud:</label>
                        <input type="date" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?= $fecha_solicitud; ?>"  disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="id_usuario" class="col-xs-4 control-label">Vendedor:</label>
                        <input type="text" class="form-control input" disabled style="width: 200px;" value="<?= Auth::user()->name ?> <?= Auth::user()->apellido_paterno?>" >
                    </div>
                    <div class="form-group">
                        <label for="cliente_id" class="col-xs-4 control-label">Cliente</label>
                        <select name="cliente_id" id="cliente_id" class="cliente_id" style="width: 200px;">
                            <option value="0" selected="true" disabled="true" class="form-control" style="height: 26px; text-align: center; margin:0px;">Seleccione</option>
                            @foreach($clientes as $key =>$cliente)
                                <option value="{!!$key!!}">{!!$cliente!!}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comuna_servicio" class="col-xs-4 control-label">Comuna servicio</label>
                        <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio" style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="lugar_servicio" class="col-xs-4 control-label">Lugar del servicio</label>
                        <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio" style="width: 200px;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <p class="text-yellow">Completar solo si está vendido</p>
                    </div>
                    <div class="form-group">
                        <label for="nombre_contacto" class="col-xs-4 control-label">Nombre Cont:</label>
                        <input type="text" class="form-control input" id="nombre_contacto" name="nombre_contacto" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="fono_contacto" class="col-xs-4 control-label">Fono Contacto:</label>
                        <input type="text" class="form-control input" id="fono_contacto" name="fono_contacto" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="correo_contacto" class="col-xs-4 control-label">Correo Contacto:</label>
                        <input type="text" class="form-control input" id="correo_contacto" name="correo_contacto" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="direccion_cliente" class="col-xs-4 control-label">Dirección Cli:</label>
                        <input type="text" class="form-control input" id="direccion_cliente" name="direccion_cliente" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="direccion_envio" class="col-xs-4 control-label">Dirección Envío:</label>
                        <input type="text" class="form-control input" id="direccion_envio" name="direccion_envio" disabled style="width: 200px;">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ciudad_envio" class="col-xs-4 control-label">Ciudad Envío:</label>
                        <input type="text" class="form-control input" id="ciudad_envio" name="ciudad_envio" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="ciudad_envio" class="col-xs-4 control-label">Dirección des:</label>
                        <input type="text" class="form-control input" id="direccion_despacho" name="direccion_despacho" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="nota_venta" class="col-xs-4 control-label">Nota Venta:</label>
                        <input type="text" class="form-control input" id="nota_venta" name="nota_venta" disabled style="width: 200px;">
                    </div>
                    <div class="form-group">
                        <label for="orden_compra" class="col-xs-4 control-label">Orden Compra:</label>
                        <input type="text" class="form-control input" id="orden_compra" name="orden_compra" disabled style="width: 200px;">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="form-group">
                    <p class="text-red" style="text-align: center;">LAS FECHAS QUE SE ENCUENTREN RESERVADAS DEBEN SER CONFIRMADAS 5 DIAS HABILES ANTES DEL SERVICIO, DE LO CONTRARIO SE ANULARÁ EL SERVICIO</p>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Seleccione tipo plan cliente: </label>
                    <input type="checkbox" value="contrato" name="tipo_cliente[]"/>C/Contrato
                    <input type="checkbox" value="cplan" name="tipo_cliente[]" />C/Plan
                    <input type="checkbox" value="splan" name="tipo_cliente[]" />S/Plan
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Seleccione tipo equipo: </label>
                    <input type="checkbox" value="1" name="check" id="check" onclick="javascript:showContent();"/>Báscula
                    <input type="checkbox" value="2" name="check2" id="check2" onclick="javascript:showContent2();"/>Balanza
                    <input type="checkbox" value="3" name="check3" id="check3" onclick="javascript:showContent3();"/>Masa
                    <input type="checkbox" value="4" name="check4" id="check4" onclick="javascript:showContent4();"/>Pesómetro
                </div>
            </div>
            <div class="row">
                <div class="panel panel-default" id="content" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Tipo</th>
                                        <th style="text-align: center;">Puntos</th>
                                        <th style="text-align: center;">Pesaje Mop</th>
                                        <th style="text-align: center;">Cap.</th>
                                        <th style="text-align: center;">Unidad Cap.</th>
                                        <th style="text-align: center;">Grad.</th>
                                        <th style="text-align: center;">Unidad Grad.</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Fecha Última Mantención</th>
                                        <th style="text-align: center;">Fecha Última Cal.</th>
                                        <th style="text-align: center;">Valor Unitario</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="bascula">
                                    <tr>
                                        <td><select name="tipoEquipo_id[]" id="tipoEquipo_id" class="tipoEquipo_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos as $tipo_equipo)
                                                <option value="{{$tipo_equipo->id}}">{{$tipo_equipo->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca_id[]" id="marca_id" class="marca_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas as $marca)
                                                <option value="{{$marca->id}}">{{$marca->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo_id" name="modelo_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos as $modelo)
                                                <option value="{{$modelo->id}}">{{$modelo->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="tipo_id" name="tipo_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($tipos as $tipo)
                                                <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></td>
                                        <td><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 75px; text-align: center;"></td>
                                        <td><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></td>
                                        <td><select id="unidadc_id" name="unidadc_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesc as $unidad)
                                                <option value="{{$unidad->id}}">{{$unidad->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align:center;"></td>
                                        <td><select id="unidadg_id" name="unidadg_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesg as $unidad2)
                                                <option value="{{$unidad2->id}}">{{$unidad2->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><select id="condicion_id" name="condicion_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones as $condicion)
                                                <option value="{{$condicion->id}}">{{$condicion->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="date" class="form-control input fu_mantencion" id="fu_mantencion" name="fu_mantencion[]"></td>
                                        <td><input type="date" class="form-control input fu_calibracion" id="fu_calibracion" name="fu_calibracion[]"></td>
                                        <td><input type="number" class="form-control input v_unitario" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align:center;" disabled></td>
                                        <td><input type="date" class="form-control input f_tentativa" id="f_tentativa" name="f_tentativa[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="panel panel-default" id="content2" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Tipo</th>
                                        <th style="text-align: center;">Puntos</th>
                                        <th style="text-align: center;">Cap.</th>
                                        <th style="text-align: center;">Unidad Cap.</th>
                                        <th style="text-align: center;">Grad.</th>
                                        <th style="text-align: center;">Unidad Grad.</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Fecha Última Mantención</th>
                                        <th style="text-align: center;">Fecha Última Cal.</th>
                                        <th style="text-align: center;">Valor Unitario</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="balanza">
                                    <tr>
                                        <td><select name="tipoEquipo2_id[]" id="tipoEquipo2_id" class="tipoEquipo2_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos2 as $tipo_equipo2)
                                                <option value="{{$tipo_equipo2->id}}">{{$tipo_equipo2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad2" name="cantidad2[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca2_id[]" id="marca2_id" class="marca2_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas2 as $marca2)
                                                <option value="{{$marca2->id}}">{{$marca2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo2_id" name="modelo2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos2 as $modelo2)
                                                <option value="{{$modelo2->id}}">{{$modelo2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="tipo2_id" name="tipo2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($tipos2 as $tipo2)
                                                <option value="{{$tipo2->id}}">{{$tipo2->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="puntos2" name="puntos2[]" style="width: 170px; text-align: center;"></td>
                                        <td><input type="number" class="form-control input" id="capacidad2" name="capacidad2[]" style="width: 80px; text-align: center;"></td>
                                        <td><select id="unidadc2_id" name="unidadc2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesc2 as $unidad3)
                                                <option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="number" class="form-control input graduacion" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align:center;"></td>
                                        <td><select id="unidadg2_id" name="unidadg2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesg2 as $unidad4)
                                                <option value="{{$unidad4->id}}">{{$unidad4->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><select id="condicion2_id" name="condicion2_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones2 as $condicion2)
                                                <option value="{{$condicion2->id}}">{{$condicion2->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="date" class="form-control input fu_mantencion2" id="fu_mantencion2" name="fu_mantencion2[]"></td>
                                        <td><input type="date" class="form-control input fu_calibracion2" id="fu_calibracion2" name="fu_calibracion2[]"></td>
                                        <td><input type="number" class="form-control input v_unitario2" id="v_unitario2" name="v_unitario2[]" style="width: 80px; text-align:center;" disabled></td>
                                        <td><input type="date" class="form-control input f_tentativa2" id="f_tentativa2" name="f_tentativa2[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar2" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="panel panel-default" id="content3" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Material</th>
                                        <th style="text-align: center;">Clase(OIML)</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Requiere Ajuste</th>
                                        <th style="text-align: center;">Requiere Mant.</th>
                                        <th style="text-align: center;">Valor Unitario</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="masa">
                                    <tr>
                                        <td><select name="tipoEquipo3_id[]" id="tipoEquipo3_id" class="tipoEquipo3_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos3 as $tipo_equipo3)
                                                <option value="{{$tipo_equipo3->id}}">{{$tipo_equipo3->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad3" name="cantidad3[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca3_id[]" id="marca3_id" class="marca3_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas3 as $marca3)
                                                <option value="{{$marca3->id}}">{{$marca3->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo3_id" name="modelo3_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos3 as $modelo3)
                                                <option value="{{$modelo3->id}}">{{$modelo3->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="material_id" name="material_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($materiales as $material)
                                                <option value="{{$material->id}}">{{$material->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></td>
                                        <td><select id="condicion3_id" name="condicion3_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones3 as $condicion3)
                                                <option value="{{$condicion3->id}}">{{$condicion3->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 80px; text-align: center"></td>
                                        <td><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width:80px; text-align: center;"></td>
                                        <td><input type="number" class="form-control input" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align:center;" disabled></td>
                                        <td><input type="date" class="form-control input f_tentativa3" id="f_tentativa3" name="f_tentativa3[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar3" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
                <div class="panel panel-default" id="content4" style="display: none; overflow: auto;">
                    <div class="panel-body">
                        <div class="col-lg-1 col-sm-1 col-md-1 col-xs-1">
                            <table>
                                <thead>
                                    <tr>
                                        <th style="text-align: center;"><label>Tipo Equipo</label></th>
                                        <th style="text-align: center;"><label>Cantidad</label></th>
                                        <th style="text-align: center;">Marca</th>
                                        <th style="text-align: center;">Modelo</th>
                                        <th style="text-align: center;">Cap.</th>
                                        <th style="text-align: center;">Unidad Cap.</th>
                                        <th style="text-align: center;">Rango Uso</th>
                                        <th style="text-align: center;">Condición</th>
                                        <th style="text-align: center;">Fecha Última Mantención</th>
                                        <th style="text-align: center;">Fecha Última Cal.</th>
                                        <th style="text-align: center;">Valor Unitario</th>
                                        <th style="text-align: center;">Fecha Tentativa</th>
                                    </tr>
                                </thead>
                                <tbody id="pesometro">
                                    <tr>
                                        <td><select name="tipoEquipo4_id[]" id="tipoEquipo4_id" class="tipoEquipo4_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($tipos_equipos4 as $tipo_equipo4)
                                                <option value="{{$tipo_equipo4->id}}">{{$tipo_equipo4->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="cantidad4" name="cantidad4[]" style="width: 75px; text-align: center;"></td>
                                        <td><select name="marca4_id[]" id="marca4_id" class="marca4_id">
                                            <option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>
                                            @foreach($marcas4 as $marca4)
                                                <option value="{{$marca4->id}}">{{$marca4->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><select id="modelo4_id" name="modelo4_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($modelos4 as $modelo4)
                                                <option value="{{$modelo4->id}}">{{$modelo4->nombre}}</option>
                                            @endforeach
                                        </select></td>
                                        <td><input type="number" class="form-control input" id="capacidad3" name="capacidad3[]" style="width: 80px; text-align: center;"></td>
                                        <td><select id="unidadc3_id" name="unidadc3_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($unidadesc3 as $unidad3)
                                                <option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="text" class="form-control input" id="rango_uso" name="rango_uso" style="width: 80px; text-align: center;"></td>
                                        <td><select id="condicion4_id" name="condicion4_id[]">
                                            <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                            @foreach($condiciones4 as $condicion4)
                                                <option value="{{$condicion4->id}}">{{$condicion4->nombre}}</option>
                                            @endforeach
                                            </select></td>
                                        <td><input type="date" class="form-control input fu_mantencion3" id="fu_mantencion3" name="fu_mantencion3[]"></td>
                                        <td><input type="date" class="form-control input fu_calibracion3" id="fu_calibracion3" name="fu_calibracion3[]"></td>
                                        <td><input type="number" class="form-control input v_unitario4" id="v_unitario4" name="v_unitario4[]" style="width: 80px; text-align:center;" disabled></td>
                                        <td><input type="date" class="form-control input f_tentativa4" id="f_tentativa4" name="f_tentativa4[]"></td>
                                        <td><button type="button" class="form-control input .btn btn-success btn-flat" id="agregar4" style="margin-left:20px; width: 75px;">Agregar</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br><br>
                    </div>
                </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="observaciones">Observaciones</label>
                    <p class="text-red">MENCIONAR SI CLIENTE PUEDE  MOVILIZAR MASAS DE 500KG PARA CASOS QUE NO ES POSIBLE ENTRAR CON CAMION</p>
                    <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3" cols="40"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="comunicacion">COMUNICACIÓN CON EL CLIENTE</label>
                    <textarea class="form-control" rows="3" cols="40" disabled></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                     <div class="form-group">
                        <table>
                            <thead>
                                <tr id="miTablaPersonalizada">
                                    <th style="width:500px; background-color: transparent;"></th>
                                    <th style="width: 100px; background-color: transparent;"><p>Si</th>
                                    <th style="width: 100px; background-color: transparent;"><p>No</th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #AEDFB4; width:500px;">¿El personal del laboratorio está capacitado para efectuar este trabajo?</th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta1" id="pregunta1" disabled></th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta1" id="pregunta1" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #AEDFB4; width:500px;">¿Se cuenta con equipamiento necesario y adecuado para efectuar este trabajo?</th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta2" id="pregunta2" disabled></th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta2" id="pregunta2" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #AEDFB4; width:500px;">¿Se podrá hacer el trabajo en la fecha solicitada?</th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta3" id="pregunta3" disabled></th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta3" id="pregunta3" disabled></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <table>
                            <thead>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #E0F53F; width:140px;">N° Factura</th>
                                    <th style="background-color: #E0F53F"><input type="number" class="form-control input nfactura" id="nfactura" name="nfactura" style="width: 100px;" disabled></th>
                                    <th style="background-color: #E0F53F; width:140px;">Monto Neto</th>
                                    <th style="background-color: #E0F53F"><input type="number" class="form-control input monto_neto" id="monto_neto" name="monto_neto" style="width: 100px;" disabled></th>
                                    <th style="width:140px; background-color: transparent;"></th>
                                    <th style="background-color: #C0C1C4; width: 40px;">N° IT</th>
                                    <th style="background-color: #C0C1C4;"><input type="number" class="form-control input it" id="it" name="it" style="width: 100px;" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #5D77E1"><input type="number" class="form-control input vt_cotizado" id="vt_cotizado" name="vt_cotizado" style="width: 100px;" disabled></th>
                                    <th style="background-color: #5D77E1; width:140px;">Valor total cotizado</th>
                                    <th style="background-color: #5D77E1; width:140px;">Monto Neto</th>
                                    <th style="background-color: #5D77E1"><input type="number" class="form-control input monto_neto2" id="monto_neto2" name="monto_neto2" style="width: 100px;" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="width:140px; background-color: transparent;" ></th>
                                    <th style="width:140px; background-color: transparent;"></th>
                                    <th style="background-color: #E0F53F; width:140px;">Diferencia</th>
                                    <th style="background-color: #E0F53F"><input type="number" class="form-control input diferencia" id="diferencia" name="diferencia" style="width: 100px;" disabled></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
                <div class="col-md-12" id="guardar">
                    <div class="form-group">
                        <input name="_token" value="{{ csrf_token() }}" type="hidden">
                        <button type="button" class=".btn btn-success btn-flat col-md-offset-5"><a href="{!! URL::to('/f37') !!}" style="color: #ffffff">Atrás</a></button>
                        <button class=".btn btn-primary" type="submit">Registrar</button>
                    </div>
                </div>
            </div>
    {!!Form::close() !!}

@endsection
@section('scripts')
    <!-- abrir y cerrar checkbox -->
    {!!Html::script('js/open-close.js')!!}

    <script type="text/javascript">
        $(document).ready(function(){
            var i = 1;
            $("#agregar").click(function(){
                i++;
                $("#bascula").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo_id[]" id="tipoEquipo_id" class="tipoEquipo_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos as $tipo_equipo)'+
                            '<option value="{{$tipo_equipo->id}}">{{$tipo_equipo->nombre}}</option>'+
                        '@endforeach'+
                        '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca_id[]" id="marca_id" class="marca_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas as $marca)'+
                            '<option value="{{$marca->id}}">{{$marca->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo_id" name="modelo_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos as $modelo)'+
                            '<option value="{{$modelo->id}}">{{$modelo->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="tipo_id" name="tipo_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($tipos as $tipo)'+
                            '<option value="{{$tipo->id}}">{{$tipo->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></td>'+
                    '<td><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="unidadc_id" name="unidadc_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesc as $unidad)'+
                            '<option value="{{$unidad->id}}">{{$unidad->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align:center;"></td>'+
                    '<td><select id="unidadg_id" name="unidadg_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesg as $unidad2)'+
                            '<option value="{{$unidad2->id}}">{{$unidad2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="condicion_id" name="condicion_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones as $condicion)'+
                            '<option value="{{$condicion->id}}">{{$condicion->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="date" class="form-control input fu_mantencion" id="fu_mantencion" name="fu_mantencion[]"></td>'+
                    '<td><input type="date" class="form-control input fu_calibracion" id="fu_calibracion" name="fu_calibracion[]"></td>'+
                    '<td><input type="number" class="form-control input v_unitario" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align:center;" disabled></td>'+
                    '<td><input type="date" class="form-control input f_tentativa" id="f_tentativa" name="f_tentativa[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove" id="'+i+'">X</button></td></tr>'
                );
            });

            $(document).on('click','.btn_remove',function(){
                var button_id=$(this).attr("id");
                $('#fila'+button_id+'').remove();
            });
        });

        $(document).ready(function(){
            var i = 1;
            $("#agregar2").click(function(){
                i++;
                $("#balanza").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo2_id[]" id="tipoEquipo2_id" class="tipoEquipo2_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos2 as $tipo_equipo2)'+
                            '<option value="{{$tipo_equipo2->id}}">{{$tipo_equipo2->nombre}}</option>'+
                        '@endforeach'+
                        '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad2" name="cantidad2[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca2_id[]" id="marca2_id" class="marca2_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas2 as $marca2)'+
                            '<option value="{{$marca2->id}}">{{$marca2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo2_id" name="modelo2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos2 as $modelo2)'+
                            '<option value="{{$modelo2->id}}">{{$modelo2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="tipo2_id" name="tipo2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($tipos2 as $tipo2)'+
                            '<option value="{{$tipo2->id}}">{{$tipo2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="puntos2" name="puntos2[]" style="width: 170px; text-align: center;"></td>'+
                    '<td><input type="number" class="form-control input" id="capacidad2" name="capacidad2[]" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="unidadc2_id" name="unidadc2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesc2 as $unidad3)'+
                            '<option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input graduacion" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align:center;"></td>'+
                    '<td><select id="unidadg2_id" name="unidadg2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesg2 as $unidad4)'+
                            '<option value="{{$unidad4->id}}">{{$unidad4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="condicion2_id" name="condicion2_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones2 as $condicion2)'+
                            '<option value="{{$condicion2->id}}">{{$condicion2->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="date" class="form-control input fu_mantencion" id="fu_mantencion2" name="fu_mantencion2[]"></td>'+
                    '<td><input type="date" class="form-control input fu_calibracion" id="fu_calibracion2" name="fu_calibracion2[]"></td>'+
                    '<td><input type="number" class="form-control input v_unitario" id="v_unitario2" name="v_unitario2[]" style="width: 80px; text-align:center;" disabled></td>'+
                    '<td><input type="date" class="form-control input f_tentativa" id="f_tentativa2" name="f_tentativa2[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove2" id="'+i+'">X</button></td></tr>'
                );
            });

            $(document).on('click','.btn_remove2',function(){
                var button_id=$(this).attr("id");
                $('#fila'+button_id+'').remove();
            });
        });

        $(document).ready(function(){
            var i = 1;
            $("#agregar3").click(function(){
                i++;
                $("#masa").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo3_id[]" id="tipoEquipo3_id" class="tipoEquipo3_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos3 as $tipo_equipo3)'+
                            '<option value="{{$tipo_equipo3->id}}">{{$tipo_equipo3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad3" name="cantidad3[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca3_id[]" id="marca3_id" class="marca3_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas3 as $marca3)'+
                            '<option value="{{$marca3->id}}">{{$marca3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo3_id" name="modelo3_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos3 as $modelo3)'+
                            '<option value="{{$modelo3->id}}">{{$modelo3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="material_id" name="material_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($materiales as $material)'+
                            '<option value="{{$material->id}}">{{$material->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></td>'+
                    '<td><select id="condicion3_id" name="condicion3_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones3 as $condicion3)'+
                            '<option value="{{$condicion3->id}}">{{$condicion3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 80px; text-align: center"></td>'+
                    '<td><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width:80px; text-align: center;"></td>'+
                    '<td><input type="number" class="form-control input" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align:center;" disabled></td>'+
                    '<td><input type="date" class="form-control input f_tentativa3" id="f_tentativa3" name="f_tentativa3[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove3" id="'+i+'">X</button></td></tr>'
                        );
                    });

                    $(document).on('click','.btn_remove3',function(){
                        var button_id=$(this).attr("id");
                        $('#fila'+button_id+'').remove();
                    });
                });

        $(document).ready(function(){
            var i = 1;
            $("#agregar4").click(function(){
                i++;
                $("#pesometro").append('<tr id="fila'+i+'">'+
                    '<td><select name="tipoEquipo4_id[]" id="tipoEquipo4_id" class="tipoEquipo4_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($tipos_equipos4 as $tipo_equipo4)'+
                            '<option value="{{$tipo_equipo4->id}}">{{$tipo_equipo4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="cantidad4" name="cantidad4[]" style="width: 75px; text-align: center;"></td>'+
                    '<td><select name="marca4_id[]" id="marca4_id" class="marca4_id">'+
                        '<option value="0" selected="true" disabled="true" class="form-control">Seleccione</option>'+
                        '@foreach($marcas4 as $marca4)'+
                            '<option value="{{$marca4->id}}">{{$marca4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><select id="modelo4_id" name="modelo4_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($modelos4 as $modelo4)'+
                            '<option value="{{$modelo4->id}}">{{$modelo4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="number" class="form-control input" id="capacidad3" name="capacidad3[]" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="unidadc3_id" name="unidadc3_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($unidadesc3 as $unidad3)'+
                            '<option value="{{$unidad3->id}}">{{$unidad3->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="text" class="form-control input" id="rango_uso" name="rango_uso" style="width: 80px; text-align: center;"></td>'+
                    '<td><select id="condicion4_id" name="condicion4_id[]">'+
                        '<option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>'+
                        '@foreach($condiciones4 as $condicion4)'+
                            '<option value="{{$condicion4->id}}">{{$condicion4->nombre}}</option>'+
                        '@endforeach'+
                    '</select></td>'+
                    '<td><input type="date" class="form-control input fu_mantencion3" id="fu_mantencion3" name="fu_mantencion3[]"></td>'+
                    '<td><input type="date" class="form-control input fu_calibracion3" id="fu_calibracion3" name="fu_calibracion3[]"></td>'+
                    '<td><input type="number" class="form-control input v_unitario4" id="v_unitario4" name="v_unitario4[]" style="width: 80px; text-align:center;" disabled></td>'+
                    '<td><input type="date" class="form-control input f_tentativa4" id="f_tentativa4" name="f_tentativa4[]"></td>'+
                    '<td><button type="button" name="remove" class=".btn btn-danger btn-flat btn_remove4" id="'+i+'">X</button></td></tr>'
                );
            });

            $(document).on('click','.btn_remove4',function(){
                var button_id=$(this).attr("id");
                $('#fila'+button_id+'').remove();
            });
        });

    </script>

@endsection
