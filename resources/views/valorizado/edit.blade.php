@extends('...administrador.index')
    @section('contenido')
        {!!Form::open(['url' => '/f37','method' => 'POST'])!!}
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="id" class="col-xs-4 control-label">N°:</label>
                        <input type="text" class="form-control input" id="numero" name="numero" value="<?= $f37->numero; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="fecha_solicitud" class="col-xs-4 control-label">Fecha solicitud:</label>
                        <input type="date" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?= $f37->numero; ?>"  disabled>
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
                    <input type="checkbox" value="contrato" name="tipo_cliente[]"/>C/Contrato
                    <input type="checkbox" value="plan" name="tipo_cliente[]" />C/Plan
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
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo_id" class="tipoEquipo_id" >
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca_id" class="marca_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input"  id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
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
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo1_id" class="tipoEquipo_id" >
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca1_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo1_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo1_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc1_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg1_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion1_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo2_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca2_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo2_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo2_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input"  id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc2_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg2_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion2_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo3_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca3_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo3_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo3_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc3_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg3_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion3_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo4_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca4_id" class="marca_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo4_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo4_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input"  id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc4_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg4_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion4_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
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
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo5_id" class="tipoEquipo_id" >
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca5_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo5_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo5_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc5_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg5_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion5_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo6_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca6_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo6_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo6_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input"  id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc6_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg6_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion6_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo7_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca7_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo7_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo7_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc7_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg7_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion7_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo8_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca8_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo8_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo8_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input"  id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc8_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg8_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion8_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo_id[]" id="tipoEquipo9_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca_id[]" id="marca9_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo9_id" name="modelo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo9_id" name="tipo_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="pesaje_mop" name="pesaje_mop[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="puntos" name="puntos[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc9_id" name="unidadc_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg9_id" name="unidadg_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion9_id" name="condicion_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad[]" style="width: 90px; text-align: center;"></th>
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
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo10_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca10_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo10_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo10_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc10_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg10_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion10_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo11_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca11_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo11_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo11_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc11_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg11_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion11_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo12_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca12_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo12_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo12_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc12_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg12_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion12_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo13_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca13_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo13_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo13_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc13_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg13_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion13_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo14_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca14_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo14_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo14_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc14_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg14_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion14_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo15_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca15_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo15_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo15_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc15_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg15_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion15_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo16_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca16_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo16_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo16_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc16_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg16_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion16_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo17_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca17_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo17_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo17_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc17_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg17_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion17_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo18_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca18_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo18_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo18_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc18_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg18_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion18_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad2[]" style="width: 75px; text-align: center;"></th>
                                <th><select name="tipoEquipo2_id[]" id="tipoEquipo19_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca2_id[]" id="marca19_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input"  style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo19_id" name="modelo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="tipo19_id" name="tipo2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="puntos" name="puntos2[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad2[]" style="width: 80px; text-align: center;"></th>
                                <th><select id="unidadc19_id" name="unidadc2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion2" id="graduacion2" name="graduacion2[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg19_id" name="unidadg2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion19_id" name="condicion2_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="date" class="form-control input" id="fu_mantencion" name="fu_mantencion2[]"></th>
                                <th><input type="date" class="form-control input" id="fu_calibracion" name="fu_calibracion2[]"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial2[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario2[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa2[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo2[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion2[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad2[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove2" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
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
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo20_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca20_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo20_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input clase_oiml" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input ubicacion3" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad3" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc20_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg20_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion20_id" name="condicion3_id[]">
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
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo21_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca21_id" class="marca3_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo21_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material1_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input clase_oiml" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input ubicacion3" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad3" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc21_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg21_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion21_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial3" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa3" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo3" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion3" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad3" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                                <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo22_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca22_id" class="marca3_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo22_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material2_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input clase_oiml" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input ubicacion3" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad3" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc22_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg22_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion22_id" name="condicion3_id[]">
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
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo23_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca23_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo23_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material3_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc23_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg23_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion23_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo24_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca24_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo24_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material4_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc24_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg24_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion24_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input r_mantencion" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input v_referencial3" id="v_referencial3" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input v_unitario3" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input f_tentativa3" id="f_tentativa3" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input h_tentativo3" id="h_tentativo3" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input observacion3" id="observacion3" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input periocidad3" id="periocidad3" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo25_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca25_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo25_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material5_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc25_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg25_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion25_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                                <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo26_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca26_id" class="marca3_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo26_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material6_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input clase_oiml" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input ubicacion3" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad3" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc26_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg26_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion26_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial3" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa3" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo3" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion3" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad3" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo27_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca27_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo27_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material7_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc27_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg27_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion27_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            </tr>
                                <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo28_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca28_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo28_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material8_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input clase_oiml" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input ubicacion3" id="ubicacion3" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad3" id="capacidad3" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc28_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input graduacion3" id="graduacion3" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg28_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion28_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial3" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario3" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa3" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo3" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion3" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad3" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select name="tipoEquipo3_id[]" id="tipoEquipo29_id">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select name="marca3_id[]" id="marca29_id">
                                    <option value="0" selected="true" disabled="true" class="form-control" style="width: 100px; height: 26px; text-align: center; margin: 0px;">Seleccione</option>
                                </select></th>
                                <th><select id="modelo29_id" name="modelo3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="material9_id" name="material_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="clase_oiml" name="clase_oiml[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion3[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="capacidad" name="capacidad3[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc29_id" name="unidadc3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion3[]" style="width: 85px; text-align: center;"></th>
                                <th><select id="unidadg29_id" name="unidadg3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion29_id" name="condicion3_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="r_ajuste" name="r_ajuste[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="r_mantencion" name="r_mantencion[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial3[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario3[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa3[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo3[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion3[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad3[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
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
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo30_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca30_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo30_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc30_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg30_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion30_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo31_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca31_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo31_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc31_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg31_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion31_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo32_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca32_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo32_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc32_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg32_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion32_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo33_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca33_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo33_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc33_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg33_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion33_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo34_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca34_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo34_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc34_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg34_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion34_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo35_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca35_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo35_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc35_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg35_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion35_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo36_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca36_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo36_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc36_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg36_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion36_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo37_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca37_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo37_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc37_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg37_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion37_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo38_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca38_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo38_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc38_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg38_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion38_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
                                <th><a href="#" class="btn btn-danger form-control input remove" id="remove" style="width: 30px;"><i class="glyphicon glyphicon-remove"></i></a></th>
                            </tr>
                            <tr>
                                <th><input type="number" class="form-control input" id="cantidad" name="cantidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="tipoEquipo39_id" name="tipoEquipo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                    @foreach($tipos_equipos as $key =>$tipo_equipo)
                                        <option value="{!!$key!!}">{!!$tipo_equipo!!}</option>
                                    @endforeach
                                </select></th>
                                <th><select id="marca39_id" name="marca4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="modelo39_id" name="modelo4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="ubicacion" name="ubicacion4[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="text" class="form-control input rango_uso" id="rango_uso" name="rango_uso[]" style="width: 170px; text-align: center;"></th>
                                <th><input type="number" class="form-control input capacidad" id="capacidad4" name="capacidad4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadc39_id" name="unidadc4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="number" class="form-control input" id="graduacion" name="graduacion4[]" style="width: 70px; text-align: center;"></th>
                                <th><select id="unidadg39_id" name="unidadg4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><select id="condicion39_id" name="condicion4_id[]">
                                    <option value="0" selected="true" disabled="true" class="form-control input">Seleccione</option>
                                </select></th>
                                <th><input type="text" class="form-control input" id="fu_mantencion" name="fu_mantencion3[]" style="width: 100px;"></th>
                                <th><input type="text" class="form-control input" id="fu_calibracion" name="fu_calibracion3[]" style="width: 100px;"></th>
                                <th><input type="number" class="form-control input" id="v_referencial" name="v_referencial4[]" style="width: 80px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="v_unitario" name="v_unitario4[]" style="width: 80px; text-align: center;" disabled></th>
                                <th><input type="date" class="form-control input" id="f_tentativa" name="f_tentativa4[]"></th>
                                <th><input type="time" class="form-control input" id="h_tentativo" name="h_tentativo4[]"></th>
                                <th><input type="text" class="form-control input" id="observacion" name="observacion4[]" style="width: 300px; text-align: center;"></th>
                                <th><input type="number" class="form-control input" id="periocidad" name="periocidad4[]" style="width: 90px; text-align: center;"></th>
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
    <!-- abrir y cerrar checkbox -->
    {!!Html::script('js/open-close.js')!!}
    <!-- select dinámico -->
    {!!Html::script('js/dropdown.js')!!}
@endsection

