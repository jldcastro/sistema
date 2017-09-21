@extends('...administrador.index')
    @section('contenido')
    <div class="box-header with-border">
            <h3 class="box-title">Actualizar solicitud de compra</h3>
        </div><!-- /.box-header -->
        {!!Form::model($f37,['route' => ['cotizado.update',$f37 -> numero],'method' => 'PUT'])!!}
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="id" class="col-xs-4 control-label">N°:</label>
                    <input type="text" class="form-control input" id="numero" name="numero" value="<?= $f37->numero?>"disabled style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="fecha_solicitud" class="col-xs-4 control-label">Fecha solicitud:</label>
                    <input type="date" class="form-control input" id="fecha_solicitud" name="fecha_solicitud" value="<?php echo date('Y-m-d', strtotime($f37->fecha_solicitud)); ?>" disabled style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="id_usuario" class="col-xs-4 control-label">Vendedor:</label>
                    <input type="text" class="form-control input" disabled value="<?= Auth::user()->name ?> <?= Auth::user()->apellido_paterno ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="cliente_id" class="col-xs-4 control-label">Cliente:</label>
                    <input type="text" class="form-control input" disabled value="<?= $f37->cliente->nombre; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="comuna_servicio" class="col-xs-4 control-label">Comuna servicio</label>
                    <input type="text" class="form-control input" id="comuna_servicio" name="comuna_servicio" value="<?= $f37->comuna_servicio; ?>" disabled style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="lugar_servicio" class="col-xs-4 control-label">Lugar del servicio</label>
                    <input type="text" class="form-control input" id="lugar_servicio" name="lugar_servicio" value="<?= $f37->lugar_servicio; ?>" disabled style="width: 200px;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <p class="text-yellow">Completar solo si está vendido</p>
                </div>
                <div class="form-group">
                    <label for="nombre_contacto" class="col-xs-4 control-label">Nombre Cont:</label>
                    <input type="text" class="form-control input" id="nombre_contacto" name="nombre_contacto" value="<?= $f37->nombre_contacto; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="fono_contacto" class="col-xs-4 control-label">Fono Contacto:</label>
                    <input type="text" class="form-control input" id="fono_contacto" name="fono_contacto" value="<?= $f37->fono_contacto; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="correo_contacto" class="col-xs-4 control-label">Correo Contacto:</label>
                    <input type="text" class="form-control input" id="correo_contacto" name="correo_contacto" value="<?= $f37->correo_contacto; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="direccion_cliente" class="col-xs-4 control-label">Dirección Cli:</label>
                    <input type="text" class="form-control input" id="direccion_cliente" name="direccion_cliente" value="<?= $f37->direccion_cliente; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="direccion_envio" class="col-xs-4 control-label">Dirección Envío:</label>
                    <input type="text" class="form-control input" id="direccion_envio" name="direccion_envio" value="<?= $f37->direccion_envio; ?>" style="width: 200px;">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="ciudad_envio" class="col-xs-4 control-label">Ciudad Envío:</label>
                    <input type="text" class="form-control input" id="ciudad_envio" name="ciudad_envio" value="<?= $f37->ciudad_envio; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="ciudad_envio" class="col-xs-4 control-label">Dirección des:</label>
                    <input type="text" class="form-control input" id="direccion_despacho" name="direccion_despacho" value="<?= $f37->direccion_despacho; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="nota_venta" class="col-xs-4 control-label">Nota Venta:</label>
                    <input type="text" class="form-control input" id="nota_venta" name="nota_venta" value="<?= $f37->nota_venta; ?>" style="width: 200px;">
                </div>
                <div class="form-group">
                    <label for="orden_compra" class="col-xs-4 control-label">Orden Compra:</label>
                    <input type="text" class="form-control input" id="orden_compra" name="orden_compra" value="<?= $f37->orden_compra; ?>" style="width: 200px;">
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
                                <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="<?php if ($bas->cantidad != 0){echo $bas->cantidad;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->ti_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->ma_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->mo_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->t_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 170px; text-align: center;" disabled value="{{ $bas->ubicacion }}"></th>
                                <th><input type="text" class="form-control input" style="width: 150px; text-align: center;" disabled value="<?php if ($bas->puntos != 0){echo $bas->puntos;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="{{ $bas->pesaje_mop }}"></th>
                                <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($bas->capacidad != 0){echo $bas->capacidad;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->uni_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 85px; text-align: center;" disabled value="<?php if ($bas->graduacion != 0){echo $bas->graduacion;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->unig_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $bas->co_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="<?php if ($bas->mantencion != "0000-00-00"){echo date('d-m-Y',strtotime($bas->mantencion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="<?php if ($bas->calibracion != "0000-00-00"){echo date('d-m-Y',strtotime($bas->calibracion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($bas->referencial != 0){echo $bas->referencial;} ?>"></th>
                                <th><input type="number" class="form-control input v_unitario" name="v_unitario[]" id="v_unitario" name="v_unitario[]" style="width: 100px; text-align: center;" value="{{ $bas->unitario }}" disabled></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($bas->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($bas->tentativa));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($bas->tentativo != "00:00:00"){echo $bas->tentativo;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 300px; text-align: center;" disabled value="{{ $bas->observacion }}"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($bas->periocidad != 0){echo $bas->periocidad;} ?>"></th>
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
                                <th><input type="text" id="totalb" name="total[]" style="width: 100px; text-align: center" disabled value="{{ $bas->total }}"></th>
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
                    <tbody id="tbody">
                        @foreach($balanza as $ba)
                            <tr>
                                <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="<?php if ($ba->cantidad != 0){echo $bas->cantidad;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->ti_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->ma_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->mo_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->t_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 170px; text-align: center;" disabled value="{{ $ba->ubicacion }}"></th>
                                <th><input type="text" class="form-control input" style="width: 150px; text-align: center;" disabled value="<?php if ($ba->puntos != 0){echo $bas->puntos;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($ba->capacidad != 0){echo $bas->capacidad;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->uni_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 85px; text-align: center;" disabled value="<?php if ($ba->graduacion != 0){echo $bas->graduacion;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->unig_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{ $ba->co_nombre }}"></th>
                                <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="<?php if ($ba->mantencion != "0000-00-00"){echo date('d-m-Y',strtotime($bas->mantencion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="<?php if ($ba->calibracion != "0000-00-00"){echo date('d-m-Y',strtotime($bas->calibracion));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($ba->referencial != 0){echo $bas->referencial;} ?>"></th>
                                <th><input type="number" class="form-control input v_unitario2"  name="v_unitario2[]" style="width: 100px; text-align: center;" value="{{ $ba->unitario }}"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($ba->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($bas->tentativa));} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($ba->tentativo != "00:00:00"){echo $bas->tentativo;} ?>"></th>
                                <th><input type="text" class="form-control input" style="width: 300px; text-align: center;" disabled value="{{ $ba->observacion }}"></th>
                                <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($ba->periocidad != 0){echo $bas->periocidad;} ?>"></th>
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
                            <th><input type="text" id="totalba" name="total2[]" style="width: 100px; text-align: center" disabled value="{{ $ba->total }}"></th>
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
                            <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="<?php if ($mas->cantidad != 0){echo $mas->cantidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->ti_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->ma_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->mo_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->mat_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->clase}}"></th>
                            <th><input type="text" class="form-control input" style="width: 170px; text-align: center;" disabled value="{{$mas->ubicacion}}"></th>
                            <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($mas->capacidad != 0){echo $mas->capacidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->uni_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 85px; text-align: center;" disabled value="<?php if ($mas->graduacion != 0){echo $mas->graduacion;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->unig_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->co_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="{{$mas->ajuste}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="{{$mas->mantencion}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($mas->referencial != 0){echo $mas->referencial;} ?>"></th>
                            <th><input type="number" class="form-control input v_unitario3" name="v_unitario3[]" style="width: 100px; text-align: center;" value="{{$mas->unitario}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($mas->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($mas->tentativa));} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($mas->tentativo != "00:00:00"){echo $mas->tentativo;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 300px; text-align: center;" disabled value="{{$mas->observacion}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$mas->periocidad}}"></th>
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
                            <th><input type="text" id="totalb" name="total[]" style="width: 100px; text-align: center" disabled value="{{ $mas->total }}"></th>
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
                    <tbody id="tbody3">
                        @foreach($pesometro as $pes)
                        <tr>
                            <th><input type="text" class="form-control input" style="width: 75px; text-align: center;" disabled value="<?php if ($pes->cantidad != 0){echo $pes->cantidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->ti_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->ma_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->mo_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 170px; text-align: center;" disabled value="{{$pes->ubicacion}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->rango}}"></th>
                            <th><input type="text" class="form-control input" style="width: 80px; text-align: center;" disabled value="<?php if ($pes->capacidad != 0){echo $pes->capacidad;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->uni_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 85px; text-align: center;" disabled value="<?php if ($pes->graduacion != 0){echo $pes->graduacion;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->unig_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->co_nombre}}"></th>
                            <th><input type="text" class="form-control input" style="width: 160px; text-align: center;" disabled value="<?php if ($pes->mantencion != "0000-00-00"){echo date('d-m-Y',strtotime($pes->mantencion));} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 120px; text-align: center;" disabled value="<?php if ($pes->calibracion != "0000-00-00"){echo date('d-m-Y',strtotime($pes->calibracion));} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="{{$pes->referencial}}"></th>
                            <th><input type="number" class="form-control input v_unitario4" name="v_unitario4[]" style="width: 100px; text-align: center;" value="{{$pes->unitario}}"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($pes->tentativa != "0000-00-00"){echo date('d-m-Y',strtotime($pes->tentativa));} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 110px; text-align: center;" disabled value="<?php if ($pes->tentativo != "00:00:00"){echo $pes->tentativo;} ?>"></th>
                            <th><input type="text" class="form-control input" style="width: 300px; text-align: center;" disabled value="{{$pes->observacion}}"></th>
                            <th><input type="text" class="form-control input" style="width: 100px; text-align: center;" disabled value="{{$pes->periocidad}}"></th>
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
                            <th><input type="text" id="totalb" name="total[]" style="width: 100px; text-align: center" disabled value="{{ $pes->total }}"></th>
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
                    <textarea class="form-control" rows="3" cols="40" disabled><?= $f37->comunicacion; ?></textarea>
                </div>
            </div>
            <label>¿Desea realizar el servicio?</label>
            <br>
            <input type="radio" name="compra" value="si">Si
            <input type="radio" name="compra" value="no">No
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
            <button type="button" class=".btn btn-danger btn-flat col-md-offset-6"><a href="{!! URL::to('/cotizado') !!}" style="color: #ffffff">Atrás</a></button>
    {!!Form::submit('Actualizar',array('class' => '.btn btn-primary'))!!}
        {!!Form::hidden('_token',csrf_token())!!}
    {!!Form::close() !!}
@endsection
@section('scripts')
    <!-- abrir y cerrar checkbox -->
    {!!Html::script('js/open-close.js')!!}
    <!-- select dinámico -->
    {!!Html::script('js/dropdown.js')!!}
    <!-- suma -->
    {!!Html::script('js/suma.js')!!}
@endsection

