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

class ValorizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request) {
            $query = trim($request->get('searchText'));
            $f37s = F37::select('numero', 'vendedor', 'fecha_solicitud', 'estado', 'created_at')
                ->where('vendedor', 'LIKE', '%' . $query . '%')
                ->orwhere('created_at', 'LIKE', '%' . $query . '%')
                ->orderBy('numero', 'asc')
                ->paginate(25);
            return view('valorizado.index',["f37s"=>$f37s,"searchText"=>$query]);
        }
    }

    public function getValorizadoReport()
    {
        $f37s = F37::orderBy('numero','DESC');
        return view('f37.index',compact('f37s'));
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
            ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.ubicacion as ubicacion','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_referencial as referencial','bas.v_unitario as unitario','bas.f_tentativa as tentativa','bas.h_tentativo as tentativo','bas.observacion as observacion','bas.periocidad as periocidad')
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
        return view('valorizado.edit')->with('f37',$f37)->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
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
        $f37->comunicacion = $request->input('comunicacion');
        $f37->pregunta1 = $request->input('pregunta1');
        $f37->pregunta2 = $request->input('pregunta2');
        $f37->pregunta3 = $request->input('pregunta3');
        $f37->estado = 'cotizado';
        $f37->created_at = Carbon::now();
        $f37->save();

        $idBascula = $request->get('idBascula');
        $idTipoEquipo = $request->get('tipoEquipo_id');
        $cont = 0;

        while($cont<count($idTipoEquipo)){
            $bascula= Bascula::find($idBascula[$cont]);
            $bascula->v_unitario = $request->get('v_unitario')[$cont];
            $bascula->save();

            $cont = $cont +1;
        }


        return redirect('/cotizado')->with('mensaje','Solicitud de compra actualizada exitósamente');
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
