@extends('...administrador.index')
    @section('contenido')
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id" class="col-xs-4 control-label">N°:</label>
                    <input type="text" class="form-control input" id="numero" name="numero" value="<?= $f37_numero->numero; ?>"disabled>
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
                    <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio" value="<?= $f37->comuna_servicio; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="lugar_servicio" class="col-xs-4 control-label">Lugar del servicio</label>
                    <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio" disabled>
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
                                    <th style="background-color: #E0F53F"><input type="text" class="form-control input nfactura" id="nfactura" name="nfactura" style="width: 100px;" disabled></th>
                                    <th style="background-color: #E0F53F; width:140px;">Monto Neto</th>
                                    <th style="background-color: #E0F53F"><input type="text" class="form-control input monto_neto" id="monto_neto" name="monto_neto" style="width: 100px;" disabled></th>
                                    <th style="width:140px; background-color: transparent;"></th>
                                    <th style="background-color: #C0C1C4; width: 40px;">N° IT</th>
                                    <th style="background-color: #C0C1C4;"><input type="text" class="form-control input it" id="it" name="it" style="width: 100px;" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #5D77E1"><input type="text" class="form-control input vt_cotizado" id="vt_cotizado" name="vt_cotizado" style="width: 100px;" disabled></th>
                                    <th style="background-color: #5D77E1; width:140px;">Valor total cotizado</th>
                                    <th style="background-color: #5D77E1; width:140px;">Monto Neto</th>
                                    <th style="background-color: #5D77E1"><input type="text" class="form-control input monto_neto" id="monto_neto" name="monto_neto" style="width: 100px;" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="width:140px; background-color: transparent;" ></th>
                                    <th style="width:140px; background-color: transparent;"></th>
                                    <th style="background-color: #E0F53F; width:140px;">Diferencia</th>
                                    <th style="background-color: #E0F53F"><input type="text" class="form-control input diferencia" id="diferencia" name="diferencia" style="width: 100px;" disabled></th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>

    @endsection