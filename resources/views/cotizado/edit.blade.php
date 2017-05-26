@extends('...administrador.index')
    @section('contenido')
    <div class="box-header with-border">
        <h3 class="box-title">Actualizar valorización solicitud de compra</h3>
    </div><!-- /.box-header -->
    {!!Form::model($f37,['route' => ['f37.update',$f37 -> numero],'method' => 'PUT'])!!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id" class="col-xs-4 control-label">N°:</label>
                    <input type="text" class="form-control input" id="numero" name="numero" value="<?= $f37->numero?>"disabled>
                </div>
                <div class="form-group">
                    <label for="fecha_solicitud" class="col-xs-4 control-label">Fecha solicitud:</label>
                    <input type="text" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?php echo date('d-m-Y', strtotime($f37->fecha_solicitud)); ?>"  disabled>
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
                    <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio" value="<?= $f37->comuna_servicio; ?>"  disabled>
                </div>
                <div class="form-group">
                    <label for="lugar_servicio" class="col-xs-4 control-label">Lugar del servicio</label>
                    <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio" value="<?= $f37->lugar_servicio; ?>"  disabled>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p class="text-yellow">Completar solo si está vendido</p>
                </div>
                <div class="form-group">
                    <label for="nombre_contacto" class="col-xs-4 control-label">Nombre Cont:</label>
                    <input type="text" class="form-control input" id="nombre_contacto" name="nombre_contacto" value="<?= $f37->nombre_contacto; ?>">
                </div>
                <div class="form-group">
                    <label for="fono_contacto" class="col-xs-4 control-label">Fono Contacto:</label>
                    <input type="text" class="form-control input" id="fono_contacto" name="fono_contacto" value="<?= $f37->fono_contacto; ?>">
                </div>
                <div class="form-group">
                    <label for="correo_contacto" class="col-xs-4 control-label">Correo Contacto:</label>
                    <input type="text" class="form-control input" id="correo_contacto" name="correo_contacto" value="<?= $f37->correo_contacto; ?>">
                </div>
                <div class="form-group">
                    <label for="direccion_cliente" class="col-xs-4 control-label">Dirección Cli:</label>
                    <input type="text" class="form-control input" id="direccion_cliente" name="direccion_cliente" value="<?= $f37->direccion_cliente; ?>">
                </div>
                <div class="form-group">
                    <label for="direccion_envio" class="col-xs-4 control-label">Dirección Envío:</label>
                    <input type="text" class="form-control input" id="direccion_envio" name="direccion_envio" value="<?= $f37->direccion_envio; ?>">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ciudad_envio" class="col-xs-4 control-label">Ciudad Envío:</label>
                    <input type="text" class="form-control input" id="ciudad_envio" name="ciudad_envio" value="<?= $f37->ciudad_envio; ?>">
                </div>
                <div class="form-group">
                    <label for="ciudad_envio" class="col-xs-4 control-label">Dirección des:</label>
                    <input type="text" class="form-control input" id="direccion_despacho" name="direccion_despacho" value="<?= $f37->direccion_despacho; ?>">
                </div>
                <div class="form-group">
                    <label for="nota_venta" class="col-xs-4 control-label">Nota Venta:</label>
                    <input type="text" class="form-control input" id="nota_venta" name="nota_venta" value="<?= $f37->nota_venta; ?>">
                </div>
                <div class="form-group">
                    <label for="orden_compra" class="col-xs-4 control-label">Orden Compra:</label>
                    <input type="text" class="form-control input" id="orden_compra" name="orden_compra" value="<?= $f37->orden_compra; ?>">
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
                <label>tipo plan cliente seleccionado: </label>
                @if ($f37->tipo_cliente != "")
                  @foreach(explode(',', $f37->tipo_cliente) as $info)
                    <option>{{$info}}</option>
                  @endforeach
                @endif
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
                @if(count($bascula)>0)
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
                            </tr>
                        </thead>
                        <tbody id="tbody">
                            @foreach($bascula as $bas)
                                <tr>
                                    <th><input type="number" class="form-control input cantidad" name="cantidad[]" style="width: 75px; text-align: center;"  value="{{ $bas->cantidad }}" ></th>
                                    <th><input type="text" class="form-control input" name="tipoEquipo_id[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->ti_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="marca_id[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->ma_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="modelo_id[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->mo_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="tipo_id[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->t_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="ubicacion[]" style="width: 170px; text-align: center;" disabled value="{{ $bas->ubicacion }}"></th>
                                    <th><input type="text" class="form-control input" name="puntos[]" style="width: 150px; text-align: center;" disabled value="{{ $bas->puntos }}"></th>
                                    <th><input type="text" class="form-control input" name="pesaje_mop[]" style="width: 120px; text-align: center;" disabled value="{{ $bas->pesaje_mop }}"></th>
                                    <th><input type="text" class="form-control input" name="capacidad[]" style="width: 80px; text-align: center;" disabled value="{{ $bas->capacidad }}"></th>
                                    <th><input type="text" class="form-control input" name="unidadc[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->uni_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="graduacion[]" style="width: 85px; text-align: center;" disabled value="{{ $bas->graduacion }}"></th>
                                    <th><input type="text" class="form-control input" name="unidadg[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->unig_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="condicion_id[]" style="width: 100px; text-align: center;" disabled value="{{ $bas->co_nombre }}"></th>
                                    <th><input type="text" class="form-control input" name="fu_mantencion[]" style="width: 160px; text-align: center;" disabled value="{{ $bas->mantencion }}"></th>
                                    <th><input type="text" class="form-control input" name="fu_calibracion[]" style="width: 120px; text-align: center;" disabled value="{{ $bas->calibracion }}"></th>
                                    <th><input type="text" class="form-control input" name="v_referencial[]"style="width: 110px; text-align: center;" disabled value="{{ $bas->referencial }}"></th>
                                    <th><input type="number" class="form-control input v_unitario" name="v_unitario[]" id="v_unitario" name="v_unitario[]" style="width: 100px; text-align: center;" value="{{ $bas->unitario }}"></th>
                                    <th><input type="text" class="form-control input" name="f_tentativa[]" style="width: 110px; text-align: center;" disabled value="{{ $bas->tentativa }}"></th>
                                    <th><input type="text" class="form-control input" name="h_tentativo[]" style="width: 110px; text-align: center;" disabled value="{{ $bas->tentativo }}"></th>
                                    <th><input type="text" class="form-control input" name="observacion[]" style="width: 300px; text-align: center;" disabled value="{{ $bas->observacion }}"></th>
                                    <th><input type="text" class="form-control input" name="periocidad[]" style="width: 110px; text-align: center;" disabled value="{{ $bas->periocidad }}"></th>
                                </tr>
                            @endforeach
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
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" id="content2" style="display: none; overflow: auto">
                @if(count($balanza)>0)
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
                        </tr>
                    </thead>
                    <tbody id="tbody2">
                        @foreach($balanza as $ba)
                            <tr>
                                <th><input type="text" class="form-control input cantidad2" name="cantidad2[]" style="width: 75px; text-align: center;"  value="{{ $ba->cantidad }}"></th>
                                <th><input type="text" class="form-control input" name="tipoEquipo_id2[]" style="width: 100px; text-align: center;" disabled value="{{ $ba->ti_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="marca2_id[]" style="width: 100px; text-align: center;" disabled value="{{ $ba->ma_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="modelo2_id[]" style="width: 100px; text-align: center;" disabled value="{{ $ba->mo_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="tipo2_id[]" style="width: 100px; text-align: center;" disabled value="{{ $ba->t_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="ubicacion2[]" style="width: 170px; text-align: center;" disabled value="{{ $ba->ubicacion }}"></th>
                                <th><input type="text" class="form-control input" name="puntos2[]" style="width: 150px; text-align: center;" disabled value="{{ $ba->puntos }}"></th>
                                <th><input type="text" class="form-control input" name="capacidad2[]" style="width: 80px; text-align: center;" disabled value="{{ $ba->capacidad }}"></th>
                                <th><input type="text" class="form-control input" name="unidadc2_id[]" style="width: 100px; text-align: center;" disabled value="{{ $ba->uni_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="graduacion2[]" style="width: 85px; text-align: center;" disabled value="{{ $ba->graduacion }}"></th>
                                <th><input type="text" class="form-control input" name="unidadg2_id[}" style="width: 100px; text-align: center;" disabled value="{{ $ba->unig_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="condicion2_id[]" style="width: 100px; text-align: center;" disabled value="{{ $ba->co_nombre }}"></th>
                                <th><input type="text" class="form-control input" name="fu_mantencion2[]" style="width: 160px; text-align: center;" disabled value="{{ $ba->mantencion }}"></th>
                                <th><input type="text" class="form-control input" name="fu_calibracion2[]" style="width: 120px; text-align: center;" disabled value="{{ $ba->calibracion }}"></th>
                                <th><input type="text" class="form-control input" name="v_referencial2[]" style="width: 110px; text-align: center;" disabled value="{{ $ba->referencial }}"></th>
                                <th><input type="number" class="form-control input v_unitario2"  name="v_unitario2[]" style="width: 100px; text-align: center;" value="{{ $ba->unitario }}"></th>
                                <th><input type="text" class="form-control input" name="f_tentativa2[]" style="width: 110px; text-align: center;" disabled value="{{ $ba->tentativa }}"></th>
                                <th><input type="text" class="form-control input" name="h_tentativo2[]" style="width: 110px; text-align: center;" disabled value="{{ $ba->tentativo }}"></th>
                                <th><input type="text" class="form-control input" name="observacion2[]" style="width: 300px; text-align: center;" disabled value="{{ $ba->observacion }}"></th>
                                <th><input type="text" class="form-control input" name="periocidad2[]" style="width: 110px; text-align: center;" disabled value="{{ $ba->periocidad }}"></th>
                            </tr>
                        @endforeach

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
                            <th><b class="total2"></b></th>
                        </tr>
                    </tfoot>
                </table>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" id="content3" style="display: none; overflow: auto">
            @if(count($masa)>0)
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
                        </tr>
                    </thead>
                    <tbody id="tbody3">
                        @foreach($masa as $mas)
                        <tr>
                            <th><input type="text" class="form-control input cantidad3" name="cantidad3[]" style="width: 75px; text-align: center;" disabled value="{{$mas->cantidad}}"></th>
                            <th><input type="text" class="form-control input" name="tipoEquipo3_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->ti_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="marca3_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->ma_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="modelo3_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->mo_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="material_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->mat_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="clase_oiml[]" style="width: 100px; text-align: center;" disabled value="{{$mas->clase}}"></th>
                            <th><input type="text" class="form-control input" name="ubicacion3[]" style="width: 170px; text-align: center;" disabled value="{{$mas->ubicacion}}"></th>
                            <th><input type="text" class="form-control input" name="capacidad3[]" style="width: 80px; text-align: center;" disabled value="{{$mas->capacidad}}"></th>
                            <th><input type="text" class="form-control input" name="unidadc3_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->uni_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="graduacion3[]" style="width: 80px; text-align: center;" disabled value="{{$mas->graduacion}}"></th>
                            <th><input type="text" class="form-control input" name="unidadg3_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->unig_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="condicion3_id[]" style="width: 100px; text-align: center;" disabled value="{{$mas->co_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="r_ajuste[]" style="width: 110px; text-align: center;" disabled value="{{$mas->ajuste}}"></th>
                            <th><input type="text" class="form-control input" name="r_mantencion[]" style="width: 110px; text-align: center;" disabled value="{{$mas->mantencion}}"></th>
                            <th><input type="text" class="form-control input" name="v_referencial3[]" style="width: 110px; text-align: center;" disabled value="{{$mas->referencial}}"></th>
                            <th><input type="number" class="form-control input v_unitario3" name="v_unitario3[]" style="width: 100px; text-align: center;" value="{{$mas->unitario}}"></th>
                            <th><input type="text" class="form-control input" name="f_tentativa3[]" style="width: 110px; text-align: center;" disabled value="{{$mas->tentativa}}"></th>
                            <th><input type="text" class="form-control input" name="h_tentativo3[]" style="width: 110px; text-align: center;" disabled value="{{$mas->tentativo}}"></th>
                            <th><input type="text" class="form-control input" name="observacion3[]" style="width: 300px; text-align: center;" disabled value="{{$mas->observacion}}"></th>
                            <th><input type="text" class="form-control input" name="periocidad3[]" style="width: 100px; text-align: center;" disabled value="{{$mas->periocidad}}"></th>
                        </tr>
                        @endforeach
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
                            <th><b class="total3"></b></th>
                        </tr>
                    </tfoot>
                </table>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="form-group col-md-12" id="content4" style="display: none; overflow: auto">
            @if(count($pesometro)>0)
                <table>
                    <thead>
                        <tr id="miTablaPersonalizada">
                            <th>Cantidad</th>
                            <th>Tipo equipo</th>
                            <th>Marca</th>
                            <th>Modelo</th>
                            <th>Ubicacion</th>
                            <th>Rango uso</th>
                            <th>Cap.</th>
                            <th>Unidad Cap.</th>
                            <th>Grad.</th>
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
                        </tr>
                    </thead>
                    <tbody id="tbody4">
                        @foreach($pesometro as $pes)
                        <tr>
                            <th><input type="text" class="form-control input cantidad4" name="cantidad4[]" style="width: 75px; text-align: center;" disabled value="{{$pes->cantidad}}"></th>
                            <th><input type="text" class="form-control input" name="tipoEquipo4_id[]" style="width: 100px; text-align: center;" disabled value="{{$pes->ti_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="marca4_id[]" style="width: 100px; text-align: center;" disabled value="{{$pes->ma_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="modelo4_id[]" style="width: 100px; text-align: center;" disabled value="{{$pes->mo_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="ubicacion4[]" style="width: 170px; text-align: center;" disabled value="{{$pes->ubicacion}}"></th>
                            <th><input type="text" class="form-control input" name="rango_uso[]" style="width: 100px; text-align: center;" disabled value="{{$pes->rango}}"></th>
                            <th><input type="text" class="form-control input" name="capacidad4[]" style="width: 80px; text-align: center;" disabled value="{{$pes->capacidad}}"></th>
                            <th><input type="text" class="form-control input" name="unidad4g_id[]" style="width: 100px; text-align: center;" disabled value="{{$pes->uni_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="graduacion4[]" style="width: 80px; text-align: center;" disabled value="{{$pes->graduacion}}"></th>
                            <th><input type="text" class="form-control input" name="unidadg4_id[]" style="width: 100px; text-align: center;" disabled value="{{$pes->unig_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="condicion4_id[]" style="width: 100px; text-align: center;" disabled value="{{$pes->co_nombre}}"></th>
                            <th><input type="text" class="form-control input" name="fu_mantencion3[]" style="width: 160px; text-align: center;" disabled value="{{$pes->mantencion}}"></th>
                            <th><input type="text" class="form-control input" name="fu_calibracion3[]" style="width: 120px; text-align: center;" disabled value="{{$pes->calibracion}}"></th>
                            <th><input type="text" class="form-control input" name="v_referencial4[]" style="width: 110px; text-align: center;" disabled value="{{$pes->referencial}}"></th>
                            <th><input type="number" class="form-control input v_unitario4" name="v_unitario4[]" style="width: 100px; text-align: center;" value="{{$pes->unitario}}"></th>
                            <th><input type="text" class="form-control input" name="f_tentativa4[]" style="width: 110px; text-align: center;" disabled value="{{$pes->tentativa}}"></th>
                            <th><input type="text" class="form-control input" name="h_tentativo4[]" style="width: 110px; text-align: center;" disabled value="{{$pes->tentativo}}"></th>
                            <th><input type="text" class="form-control input" name="observacion4[]" style="width: 300px; text-align: center;" disabled value="{{$pes->observacion}}"></th>
                            <th><input type="text" class="form-control input" name="pderiocidad4[]" style="width: 100px; text-align: center;" disabled value="{{$pes->periocidad}}"></th>
                        </tr>
                        @endforeach
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
                            <th><b class="total4"></b> </th>
                        </tr>
                    </tfoot>
                </table>
                @endif
            </div>
        </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="observaciones">Observaciones</label>
                    <p class="text-red">MENCIONAR SI CLIENTE PUEDE  MOVILIZAR MASAS DE 500KG PARA CASOS QUE NO ES POSIBLE ENTRAR CON CAMION</p>
                    <textarea class="form-control observaciones" id="observaciones" name="observaciones" rows="3" cols="40" disabled><?= $f37->observaciones; ?></textarea>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <label for="comunicacion">COMUNICACIÓN CON EL CLIENTE</label>
                    <textarea class="form-control" rows="3" cols="40" name="comunicacion"><?= $f37->comunicacion; ?></textarea>
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
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta1" value="1.1" disabled></th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta1" value="1.2" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #AEDFB4; width:500px;">¿Se cuenta con equipamiento necesario y adecuado para efectuar este trabajo?</th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta2" value="2.1" disabled></th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta2" value="2.2" disabled></th>
                                </tr>
                                <tr id="miTablaPersonalizada">
                                    <th style="background-color: #AEDFB4; width:500px;">¿Se podrá hacer el trabajo en la fecha solicitada?</th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta3" value="3.1" disabled></th>
                                    <th style="background-color: transparent; width: 100px;"><input type="radio" name="pregunta3" value="3.2" disabled></th>
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
    {!!Form::submit('Actualizar',array('class' => '.btn btn-primary col-md-offset-5'))!!}
        {!!Form::hidden('_token',csrf_token())!!}
    {!!Form::close() !!}

@endsection
@section('scripts')
    <!-- abrir y cerrar checkbox -->
    {!!Html::script('js/open-close.js')!!}
    <!-- select dinámico -->
    {!!Html::script('js/dropdown.js')!!}
    <!-- select sumar -->
    {!!Html::script('js/suma.js')!!}
@endsection

