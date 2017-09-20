<?php

namespace App\Http\Controllers;

use App\Balanza;
use App\Bascula;
use App\Masa;
use App\Pesometro;
use Illuminate\Http\Request;
use App\F37;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use DB;
use Illuminate\Support\Facades\Auth;

class CotizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        if($request) {
            $query = trim($request->get('searchText'));
            $f37s = F37::select('numero', 'cliente_id', 'fecha_solicitud', 'estado', 'created_at')
                ->where('cliente_id', 'LIKE', '%' . $query . '%')
                ->orwhere('created_at', 'LIKE', '%' . $query . '%')
                ->orderBy('numero', 'asc')
                ->paginate(25);
            return view('cotizado.index',["f37s"=>$f37s,"searchText"=>$query]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($numero)
    {
        $f37 = F37::find($numero);

        $bascula = DB::table('basculas as bas')
            ->join('f37s as f','bas.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','bas.tipoEquipo_id','=','ti.id')
            ->join('marcas as ma','bas.marca_id','=','ma.id')
            ->join('modelos as mo','bas.modelo_id','=','mo.id')
            ->join('tipos as t','bas.tipo_id','=','t.id')
            ->join('unidades as uni','bas.unidadc_id','=','uni.id')
            ->join('unidades as unig','bas.unidadg_id','=','unig.id')
            ->join('condiciones as co','bas.condicion_id','=','co.id')
            ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.ubicacion as ubicacion','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_referencial as referencial','bas.v_unitario as unitario','bas.total as total','bas.f_tentativa as tentativa','bas.h_tentativo as tentativo','bas.observacion as observacion','bas.periocidad as periocidad')
            ->where('bas.f37_id','=',$numero)
            ->get();

        $balanza = DB::table('balanzas as ba')
            ->join('f37s as f','ba.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','ba.tipoEquipo2_id','=','ti.id')
            ->join('marcas as ma','ba.marca2_id','=','ma.id')
            ->join('modelos as mo','ba.modelo2_id','=','mo.id')
            ->join('tipos as t','ba.tipo2_id','=','t.id')
            ->join('unidades as uni','ba.unidadc2_id','=','uni.id')
            ->join('unidades as unig','ba.unidadg2_id','=','unig.id')
            ->join('condiciones as co','ba.condicion2_id','=','co.id')
            ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.ubicacion2 as ubicacion','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_referencial2 as referencial','ba.v_unitario2 as unitario','ba.f_tentativa2 as tentativa','ba.h_tentativo2 as tentativo','ba.observacion2 as observacion','ba.periocidad2 as periocidad')
            ->where('ba.f37_id','=',$numero)
            ->get();

        $masa = DB::table('masas as m')
            ->join('f37s as f','m.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
            ->join('marcas as ma','m.marca3_id','=','ma.id')
            ->join('modelos as mo','m.modelo3_id','=','mo.id')
            ->join('materiales as mat','m.material_id','=','mat.id')
            ->join('unidades as uni','m.unidadc3_id','=','uni.id')
            ->join('unidades as unig','m.unidadg3_id','=','unig.id')
            ->join('condiciones as co','m.condicion3_id','=','co.id')
            ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','m.ubicacion3 as ubicacion','m.capacidad3 as capacidad','uni.nombre as uni_nombre','m.graduacion3 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_referencial3 as referencial','m.v_unitario3 as unitario','m.f_tentativa3 as tentativa','m.h_tentativo3 as tentativo','m.observacion3 as observacion','m.periocidad3 as periocidad')
            ->where('m.f37_id','=',$numero)
            ->get();

        $pesometro = DB::table('pesometros as p')
            ->join('f37s as f','p.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
            ->join('marcas as ma','p.marca4_id','=','ma.id')
            ->join('modelos as mo','p.modelo4_id','=','mo.id')
            ->join('unidades as uni','p.unidadc4_id','=','uni.id')
            ->join('unidades as unig','p.unidadg4_id','=','unig.id')
            ->join('condiciones as co','p.condicion4_id','=','co.id')
            ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.ubicacion4 as ubicacion','p.rango_uso as rango','p.capacidad4 as capacidad','uni.nombre as uni_nombre','p.graduacion4 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_referencial4 as referencial','p.v_unitario4 as unitario','p.f_tentativa4 as tentativa','p.h_tentativo4 as tentativo','p.observacion4 as observacion','p.periocidad4 as periocidad')
            ->where('p.f37_id','=',$numero)
            ->get();
        return view('cotizado.edit')->with('f37',$f37)->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);;



    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $numero)
    {
        $f37 = F37::find($numero);
        $f37->compra = $request->input('compra');
        if($request->get('compra') == 'si' )
        {
            $f37->nombre_contacto = $request->input('nombre_contacto');
            $f37->fono_contacto = $request->input('fono_contacto');
            $f37->correo_contacto = $request->input('correo_contacto');
            $f37->direccion_cliente = $request->input('direccion_cliente');
            $f37->direccion_envio = $request->input('direccion_envio');
            $f37->ciudad_envio = $request->input('ciudad_envio');
            $f37->direccion_despacho = $request->input('direccion_despacho');
            $f37->nota_venta = $request->input('nota_venta');
            $f37->orden_compra = $request->input('orden_compra');
            $f37->estado = 'finalizado';
            $f37->created_at = Carbon::now();
            $f37->update();


            $v_unitario = $request->get('v_unitario');

            $bascula = DB::table('basculas as bas')
                ->join('f37s as f','bas.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','bas.tipoEquipo_id','=','ti.id')
                ->join('marcas as ma','bas.marca_id','=','ma.id')
                ->join('modelos as mo','bas.modelo_id','=','mo.id')
                ->join('tipos as t','bas.tipo_id','=','t.id')
                ->join('unidades as uni','bas.unidadc_id','=','uni.id')
                ->join('unidades as unig','bas.unidadg_id','=','unig.id')
                ->join('condiciones as co','bas.condicion_id','=','co.id')
                ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.ubicacion as ubicacion','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_referencial as referencial','bas.v_unitario as unitario','bas.total as total','bas.f_tentativa as tentativa','bas.h_tentativo as tentativo','bas.observacion as observacion','bas.periocidad as periocidad')
                ->where('bas.f37_id','=',$numero)
                ->update(['bas.v_unitario' => 1000,'bas.total' => 2000]);

            $balanza = DB::table('balanzas as ba')
                ->join('f37s as f','ba.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','ba.tipoEquipo2_id','=','ti.id')
                ->join('marcas as ma','ba.marca2_id','=','ma.id')
                ->join('modelos as mo','ba.modelo2_id','=','mo.id')
                ->join('tipos as t','ba.tipo2_id','=','t.id')
                ->join('unidades as uni','ba.unidadc2_id','=','uni.id')
                ->join('unidades as unig','ba.unidadg2_id','=','unig.id')
                ->join('condiciones as co','ba.condicion2_id','=','co.id')
                ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.ubicacion2 as ubicacion','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_referencial2 as referencial','ba.v_unitario2 as unitario','ba.total2 as total2','ba.f_tentativa2 as tentativa','ba.h_tentativo2 as tentativo','ba.observacion2 as observacion','ba.periocidad2 as periocidad')
                ->where('ba.f37_id','=',$numero)
                ->update(['ba.v_unitario2' => 2000,'ba.total2' => 4000]);

            $masa = DB::table('masas as m')
                ->join('f37s as f','m.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
                ->join('marcas as ma','m.marca3_id','=','ma.id')
                ->join('modelos as mo','m.modelo3_id','=','mo.id')
                ->join('materiales as mat','m.material_id','=','mat.id')
                ->join('unidades as uni','m.unidadc3_id','=','uni.id')
                ->join('unidades as unig','m.unidadg3_id','=','unig.id')
                ->join('condiciones as co','m.condicion3_id','=','co.id')
                ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','m.ubicacion3 as ubicacion','m.capacidad3 as capacidad','uni.nombre as uni_nombre','m.graduacion3 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_referencial3 as referencial','m.v_unitario3 as unitario','m.total3 as total3','m.f_tentativa3 as tentativa','m.h_tentativo3 as tentativo','m.observacion3 as observacion','m.periocidad3 as periocidad')
                ->where('m.f37_id','=',$numero)
                ->update(['m.v_unitario3' => 3000,'m.total3' => 6000]);

            $pesometro = DB::table('pesometros as p')
                ->join('f37s as f','p.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
                ->join('marcas as ma','p.marca4_id','=','ma.id')
                ->join('modelos as mo','p.modelo4_id','=','mo.id')
                ->join('unidades as uni','p.unidadc4_id','=','uni.id')
                ->join('unidades as unig','p.unidadg4_id','=','unig.id')
                ->join('condiciones as co','p.condicion4_id','=','co.id')
                ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.ubicacion4 as ubicacion','p.rango_uso as rango','p.capacidad4 as capacidad','uni.nombre as uni_nombre','p.graduacion4 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_referencial4 as referencial','p.v_unitario4 as unitario','pa.total4 as total4','p.f_tentativa4 as tentativa','p.h_tentativo4 as tentativo','p.observacion4 as observacion','p.periocidad4 as periocidad')
                ->where('p.f37_id','=',$numero)
                ->update(['p.v_unitario4' => 4000,'p.total4' => 8000]);




            return redirect('/finalizado')->with('mensaje','Solicitud de compra finalizada exitósamente')->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
        }

        else if($request->get('compra') == 'no' )
        {
            $f37->estado = 'perdida';

            $f37->created_at = Carbon::now();
            $f37->update();

            $v_unitario = $request->get('v_unitario');

            $bascula = DB::table('basculas as bas')
                ->join('f37s as f','bas.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','bas.tipoEquipo_id','=','ti.id')
                ->join('marcas as ma','bas.marca_id','=','ma.id')
                ->join('modelos as mo','bas.modelo_id','=','mo.id')
                ->join('tipos as t','bas.tipo_id','=','t.id')
                ->join('unidades as uni','bas.unidadc_id','=','uni.id')
                ->join('unidades as unig','bas.unidadg_id','=','unig.id')
                ->join('condiciones as co','bas.condicion_id','=','co.id')
                ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.ubicacion as ubicacion','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_referencial as referencial','bas.v_unitario as unitario','bas.total as total','bas.f_tentativa as tentativa','bas.h_tentativo as tentativo','bas.observacion as observacion','bas.periocidad as periocidad')
                ->where('bas.f37_id','=',$numero)
                ->update(['bas.v_unitario' => 1000,'bas.total' => 2000]);

            $balanza = DB::table('balanzas as ba')
                ->join('f37s as f','ba.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','ba.tipoEquipo2_id','=','ti.id')
                ->join('marcas as ma','ba.marca2_id','=','ma.id')
                ->join('modelos as mo','ba.modelo2_id','=','mo.id')
                ->join('tipos as t','ba.tipo2_id','=','t.id')
                ->join('unidades as uni','ba.unidadc2_id','=','uni.id')
                ->join('unidades as unig','ba.unidadg2_id','=','unig.id')
                ->join('condiciones as co','ba.condicion2_id','=','co.id')
                ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.ubicacion2 as ubicacion','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_referencial2 as referencial','ba.v_unitario2 as unitario','ba.total2 as total2','ba.f_tentativa2 as tentativa','ba.h_tentativo2 as tentativo','ba.observacion2 as observacion','ba.periocidad2 as periocidad')
                ->where('ba.f37_id','=',$numero)
                ->update(['ba.v_unitario2' => 2000,'ba.total2' => 4000]);

            $masa = DB::table('masas as m')
                ->join('f37s as f','m.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
                ->join('marcas as ma','m.marca3_id','=','ma.id')
                ->join('modelos as mo','m.modelo3_id','=','mo.id')
                ->join('materiales as mat','m.material_id','=','mat.id')
                ->join('unidades as uni','m.unidadc3_id','=','uni.id')
                ->join('unidades as unig','m.unidadg3_id','=','unig.id')
                ->join('condiciones as co','m.condicion3_id','=','co.id')
                ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','m.ubicacion3 as ubicacion','m.capacidad3 as capacidad','uni.nombre as uni_nombre','m.graduacion3 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_referencial3 as referencial','m.v_unitario3 as unitario','m.total3 as total3','m.f_tentativa3 as tentativa','m.h_tentativo3 as tentativo','m.observacion3 as observacion','m.periocidad3 as periocidad')
                ->where('m.f37_id','=',$numero)
                ->update(['m.v_unitario3' => 3000,'m.total3' => 6000]);

            $pesometro = DB::table('pesometros as p')
                ->join('f37s as f','p.f37_id','=','f.numero')
                ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
                ->join('marcas as ma','p.marca4_id','=','ma.id')
                ->join('modelos as mo','p.modelo4_id','=','mo.id')
                ->join('unidades as uni','p.unidadc4_id','=','uni.id')
                ->join('unidades as unig','p.unidadg4_id','=','unig.id')
                ->join('condiciones as co','p.condicion4_id','=','co.id')
                ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.ubicacion4 as ubicacion','p.rango_uso as rango','p.capacidad4 as capacidad','uni.nombre as uni_nombre','p.graduacion4 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_referencial4 as referencial','p.v_unitario4 as unitario','pa.total4 as total4','p.f_tentativa4 as tentativa','p.h_tentativo4 as tentativo','p.observacion4 as observacion','p.periocidad4 as periocidad')
                ->where('p.f37_id','=',$numero)
                ->update(['p.v_unitario4' => 4000,'p.total4' => 8000]);

            return redirect('/perdida')->with('mensaje','Solicitud de compra perdida')->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
