@extends('...administrador.index')
    @section('contenido')
        {!!Form::open(['url' => '/f37','method' => 'POST'])!!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="id" class="col-xs-4 control-label">N°:</label>
                        <input type="text" class="form-control input" id="numero" name="numero" value="<?= $codigo?>"disabled>
                    </div>
                    <div class="form-group">
                        <label for="fecha_solicitud" class="col-xs-4 control-label">Fecha solicitud:</label>
                        <input type="date" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?= $fecha_solicitud; ?>"  disabled>
                    </div>
                    <div class="form-group">
                        <label for="id_usuario" class="col-xs-4 control-label">Vendedor:</label>
                        <input type="text" class="form-control input" id="id_usuario" name="id_usuario" disabled>
                    </div>
                    <div class="form-group">
                        <label for="cliente_id" class="col-xs-4 control-label">Cliente:</label>
                        <select name="cliente_id" class="select" disabled>

                        </select>
                    </div>
                    <div class="form-group">
                        <label for="comuna_servicio" class="col-xs-4 control-label">Comuna servicio</label>
                        <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio">
                    </div>
                    <div class="form-group">
                        <label for="lugar_servicio" class="col-xs-4 control-label">Lugar del servicio</label>
                        <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <p class="text-yellow">Completar solo si está vendido</p>
                    </div>
                    <div class="form-group">
                        <label for="nombre_contacto" class="col-xs-4 control-label">Nombre Cont:</label>
                        <input type="text" class="form-control input" id="nombre_contacto" name="nombre_contacto" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fono_contacto" class="col-xs-4 control-label">Fono Contacto:</label>
                        <input type="text" class="form-control input" id="fono_contacto" name="fono_contacto" disabled>
                    </div>
                    <div class="form-group">
                        <label for="correo_contacto" class="col-xs-4 control-label">Correo Contacto:</label>
                        <input type="text" class="form-control input" id="correo_contacto" name="correo_contacto" disabled>
                    </div>
                    <div class="form-group">
                        <label for="direccion_cliente" class="col-xs-4 control-label">Dirección Cli:</label>
                        <input type="text" class="form-control input" id="direccion_cliente" name="direccion_cliente" disabled>
                    </div>
                    <div class="form-group">
                        <label for="direccion_envio" class="col-xs-4 control-label">Dirección Envío:</label>
                        <input type="text" class="form-control input" id="direccion_envio" name="direccion_envio" disabled>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="ciudad_envio" class="col-xs-4 control-label">Ciudad Envío:</label>
                        <input type="text" class="form-control input" id="ciudad_envio" name="ciudad_envio" disabled>
                    </div>
                    <div class="form-group">
                        <label for="ciudad_envio" class="col-xs-4 control-label">Dirección des:</label>
                        <input type="text" class="form-control input" id="direccion_despacho" name="direccion_despacho" disabled>
                    </div>
                    <div class="form-group">
                        <label for="nota_venta" class="col-xs-4 control-label">Nota Venta:</label>
                        <input type="text" class="form-control input" id="nota_venta" name="nota_venta" disabled>
                    </div>
                    <div class="form-group">
                        <label for="orden_compra" class="col-xs-4 control-label">Orden Compra:</label>
                        <input type="text" class="form-control input" id="orden_compra" name="orden_compra" disabled>
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
                    <input type="checkbox" value="1" name="tipo_cliente[]" />C/Contrato
                    <input type="checkbox" value="2" name="tipo_cliente[]" />C/Plan
                    <input type="checkbox" value="3" name="tipo_cliente[]" />S/Plan
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label>Seleccione tipo equipo: </label>
                    <input type="checkbox" value="1" name="check" id="check" onclick="javascript:showContent();"/>Báscula
                    <input type="checkbox" value="1" name="check2" id="check2" onclick="javascript:showContent2();"/>Balanza
                    <input type="checkbox" value="1" name="check3" id="check3" onclick="javascript:showContent3();"/>Masa
                    <input type="checkbox" value="1" name="check4" id="check4" onclick="javascript:showContent4();"/>Pesómetro
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12" id="content" style="display: none; overflow: auto">
                    <table>
                        <thead>
                            <tr id="miTablaPersonalizada">
                                <th>Cantidad</th>
                                <th>Tipo equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Ubicación</th>
                                <th>Puntos</th>
                                <th>Pesaje MOP</th>
                                <th>Capacidad</th>
                                <th>Unidad Cap.</th>
                                <th>Graduación</th>
                                <th>Unidad Grad.</th>
                                <th>Condición</th>
                                <th>Fecha Última Mantención</th>
                                <th>Fecha Última Cal.</th>
                                <th>Valor Referencial</th>
                                <th>Valor Unitario</th>
                                <th>Fecha Tentativa</th>
                                <th>Horario Tentativo</th>
                                <th>Observación</th>
                                <th>Periodicidad</th>
                                <th><a href="#" id="addBascula"><i class="glyphicon glyphicon-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            <tr>
                                <th><input type="number" class="form-control input cantidad" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo_id" class="tipoEquipo_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca_id" class="marca_id">
                                        <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($modelos as $key =>$modelo)
                                        <option value="{!!$key!!}">{!!$modelo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="tipo_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos as $key =>$tipo)
                                        <option value="{!!$key!!}">{!!$tipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><input type="text" class="form-control input ubicacion" id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input pesaje_mop" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input puntos" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($unidadesc as $key =>$unidadc)
                                        <option value="{!!$key!!}">{!!$unidadc!!}</option>
                                    @endforeach
                                </select></th>
                                <th><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($unidadesg as $key =>$unidadg)
                                        <option value="{!!$key!!}">{!!$unidadg!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="condicion_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($unidadesc as $key =>$unidadc)
                                        <option value="{!!$key!!}">{!!$unidadc!!}</option>
                                    @endforeach
                                </select></th>
                                <th><input type="date" class="form-control input fu_mantencion" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input fu_calibracion" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input v_referencial" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input v_unitario" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input f_tentativa" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input h_tentativo" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input observacion" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input periocidad" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><b>TOTAL</b></th>
                                <th><b class="total"></b></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12" id="content2" style="display: none; overflow: auto">
                    <table>
                        <thead>
                            <tr id="miTablaPersonalizada">
                                <th>Cantidad</th>
                                <th>Tipo equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Tipo</th>
                                <th>Ubicación</th>
                                <th>Puntos</th>
                                <th>Capacidad</th>
                                <th>Unidad Cap.</th>
                                <th>Graduación</th>
                                <th>Unidad Grad.</th>
                                <th>Condición</th>
                                <th>Fecha Última Mantención</th>
                                <th>Fecha Última Cal.</th>
                                <th>Valor Referencial</th>
                                <th>Valor Unitario</th>
                                <th>Fecha Tentativa</th>
                                <th>Horario Tentativo</th>
                                <th>Observación</th>
                                <th>Periodicidad</th>
                                <th><a href="#" id="addBalanza"><i class="glyphicon glyphicon-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody id="tbody2">
                            <tr>
                                <th><input type="number" class="form-control input cantidad2" id="cantidad2" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo2_id" class="tipoEquipo2_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos2 as $key =>$tipo_equipo2)
                                        <option value="{!!$key!!}">{!!$tipo_equipo2!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca2_id" class="marca2_id">
                                        <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo2_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><select id="tipo2_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="text" class="form-control input ubicacion2" id="ubicacion2" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input puntos2" id="puntos2" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad2" id="capacidad2" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc2_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg2_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion2_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input fu_mantencion2" id="fu_mantencion2" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input fu_calibracion2" id="fu_calibracion2" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input v_referencial2" id="v_referencial2" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input v_unitario2" id="v_unitario2" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input f_tentativa2" id="f_tentativa2" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input h_tentativo2" id="h_tentativo2" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input observacion2" id="observacion2" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input periocidad2" id="periocidad2" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><b>TOTAL</b></th>
                                <th><b class="total"></b></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12" id="content3" style="display: none; overflow: auto">
                    <table>
                        <thead>
                            <tr id="miTablaPersonalizada">
                                <th>Cantidad</th>
                                <th>Tipo equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Material</th>
                                <th>Clase(OIML)</th>
                                <th>Ubicacion</th>
                                <th>Cap.</th>
                                <th>Unidad Cap.</th>
                                <th>Grad.</th>
                                <th>Unidad Grad.</th>
                                <th>Condición</th>
                                <th>Requiere Ajuste</th>
                                <th>Requiere Mant.</th>
                                <th>Valor Referencial</th>
                                <th>Valor Unitario</th>
                                <th>Fecha Tentativa</th>
                                <th>Horario Tentativo</th>
                                <th>Observación</th>
                                <th>Periodicidad</th>
                                <th><a href="#" id="addMasa"><i class="glyphicon glyphicon-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody id="tbody3">
                            <tr>
                                <th><input type="number" class="form-control input cantidad3" id="cantidad3" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo3_id" name="tipoEquipo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos3 as $key =>$tipo_equipo3)
                                        <option value="{!!$key!!}">{!!$tipo_equipo3!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca3_id" name="marca3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><select id="modelo3_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><select id="material_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="text" class="form-control input clase_oiml" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input ubicacion3" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad3" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc3_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg3_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><select id="condicion3_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="text" class="form-control input r_ajuste" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input r_mantencion" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input v_referencial3" id="v_referencial3" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input v_unitario3" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input f_tentativa3" id="f_tentativa3" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input h_tentativo3" id="h_tentativo3" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input observacion3" id="observacion3" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input periocidad3" id="periocidad3" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><b>TOTAL</b></th>
                                <th><b class="total"></b></th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12" id="content4" style="display: none; overflow: auto">
                    <table>
                        <thead>
                            <tr id="miTablaPersonalizada">
                                <th>Cantidad</th>
                                <th>Tipo equipo</th>
                                <th>Marca</th>
                                <th>Modelo</th>
                                <th>Ubicacion</th>
                                <th>Rango Uso</th>
                                <th>Cap.</th>
                                <th>Unidad Cap.</th>
                                <th>Grad.</th>
                                <th>Unidad Grad.</th>
                                <th>Condición</th>
                                <th>Fecha última man.</th>
                                <th>Fecha última cal.</th>
                                <th>Valor Referencial</th>
                                <th>Valor Unitario</th>
                                <th>Fecha Tentativa</th>
                                <th>Horario Tentativo</th>
                                <th>Observación</th>
                                <th>Periodicidad</th>
                                <th><a href="#" id="addPesometro"><i class="glyphicon glyphicon-plus"></i></a></th>
                            </tr>
                        </thead>
                        <tbody id="tbody4">
                            <tr>
                                <th><input type="number" class="form-control input cantidad4" id="cantidad4" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo4_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos4 as $key =>$tipo_equipo4)
                                        <option value="{!!$key!!}">{!!$tipo_equipo4!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca4_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><select id="modelo4_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="text" class="form-control input ubicacion4" id="ubicacion4" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad4" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc4_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="number" class="form-control input graduacion4" id="graduacion4" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg4_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><select id="condicion4_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>

                                </select></th>
                                <th><input type="text" class="form-control input fu_mantencion" id="fu_mantencion" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input fu_calibracion" id="fu_calibracion" name="fu_calibracion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input v_referencial4" id="v_referencial4" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input v_unitario4" id="v_unitario4" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input f_tentativa4" id="f_tentativa4" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input h_tentativo4" id="h_tentativo4" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input observacion4" id="observacion4" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input periocidad4" id="periocidad4" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th><b>TOTAL</b></th>
                                <th><b class="total"></b></th>
                            </tr>
                        </tfoot>
                    </table>
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
            <h4>Uso interno del laboratorio</h4>
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
    {!!Form::submit('Registrar',array('class' => '.btn btn-primary col-md-offset-5'))!!}
        {!!Form::hidden('_token',csrf_token())!!}
    {!!Form::close() !!}

@endsection


@section('scripts')
<script type="text/javascript">

function showContent() {
    element = document.getElementById("content");
    check = document.getElementById("check");
    if (check.checked) {
    element.style.display='block';
    }
    else {
    element.style.display='none';
    }
}

function showContent2() {
    element = document.getElementById("content2");
    check = document.getElementById("check2");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

function showContent3() {
    element = document.getElementById("content3");
    check = document.getElementById("check3");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

function showContent4() {
    element = document.getElementById("content4");
    check = document.getElementById("check4");
    if (check.checked) {
        element.style.display='block';
    }
    else {
        element.style.display='none';
    }
}

$("#tipoEquipo_id").change(function(event){
    $.get("marcas/"+event.target.value+"",function(response,tipoEquipo_id){
        $("#marca_id").empty();

        for(i=0;i<response.length;i++){
            $("#marca_id").append("<option value='"+response[i].id+"'> "+response[i].nombre+"</option>");
        }
    });
});
</script>
@endsection

