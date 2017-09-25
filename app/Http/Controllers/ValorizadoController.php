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
            $f37s = F37::select('numero', 'vendedor_id', 'fecha_solicitud', 'estado', 'created_at')
                ->where('created_at', 'LIKE', '%' . $query . '%')
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
            ->select('bas.cantidad as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','bas.puntos as puntos','bas.pesaje_mop as pesaje_mop','bas.capacidad as capacidad','uni.nombre as uni_nombre','bas.graduacion as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','bas.fu_mantencion as mantencion','bas.fu_calibracion as calibracion','bas.v_unitario as unitario','bas.subtotal as subtotal','bas.f_tentativa as tentativa')
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
            ->select('ba.cantidad2 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','t.nombre as t_nombre','ba.puntos2 as puntos','ba.capacidad2 as capacidad','uni.nombre as uni_nombre','ba.graduacion2 as graduacion','unig.nombre as unig_nombre','co.nombre as co_nombre','ba.fu_mantencion2 as mantencion','ba.fu_calibracion2 as calibracion','ba.v_unitario2 as unitario','ba.subtotal2 as subtotal','ba.f_tentativa2 as tentativa')
            ->where('ba.f37_id','=',$numero)
            ->get();

        $masa = DB::table('masas as m')
            ->join('f37s as f','m.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','m.tipoEquipo3_id','=','ti.id')
            ->join('marcas as ma','m.marca3_id','=','ma.id')
            ->join('modelos as mo','m.modelo3_id','=','mo.id')
            ->join('materiales as mat','m.material_id','=','mat.id')
            ->join('condiciones as co','m.condicion3_id','=','co.id')
            ->select('m.cantidad3 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','mat.nombre as mat_nombre','m.clase_oiml as clase','co.nombre as co_nombre','m.r_ajuste as ajuste','m.r_mantencion as mantencion','m.v_unitario3 as unitario','m.subtotal3 as subtotal','m.f_tentativa3 as tentativa')
            ->where('m.f37_id','=',$numero)
            ->get();

        $pesometro = DB::table('pesometros as p')
            ->join('f37s as f','p.f37_id','=','f.numero')
            ->join('tipos_equipos as ti','p.tipoEquipo4_id','=','ti.id')
            ->join('marcas as ma','p.marca4_id','=','ma.id')
            ->join('modelos as mo','p.modelo4_id','=','mo.id')
            ->join('unidades as uni','p.unidadc3_id','=','uni.id')
            ->join('condiciones as co','p.condicion4_id','=','co.id')
            ->select('p.cantidad4 as cantidad','ti.nombre as ti_nombre','ma.nombre as ma_nombre','mo.nombre as mo_nombre','p.rango_uso as rango','p.capacidad3 as capacidad','uni.nombre as uni_nombre','co.nombre as co_nombre','p.fu_mantencion3 as mantencion','p.fu_calibracion3 as calibracion','p.v_unitario4 as unitario','p.subtotal4 as subtotal','p.f_tentativa4 as tentativa')
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
        $f37_id=$f37->numero;


   // dd($request->input('v_unitario'));

$bascula=bascula::where('f37_id', '=', $f37_id)->get();
    $v_unitario = $request->get('v_unitario');
        $subtotal = $request->get('subtotal');

                for($i=0;$i<count($v_unitario);$i++) {
            Bascula::where('idBascula', $bascula[$i]->idBascula)->update(['v_unitario' => $v_unitario[$i],
                'subtotal' => $subtotal[$i]]);
        }

$balanza=Balanza::where('f37_id', '=', $f37_id)->get();
        $v_unitario2 = $request->get('v_unitario2');
        $subtotal2 = $request->get('subtotal2');

        for($j=0;$j<count($v_unitario2);$j++) {
            Balanza::where('idBalanza', $balanza[$j]->idBalanza)->update(['v_unitario2' => $v_unitario2[$j],
                'subtotal2' => $subtotal2[$j]]);
        }

$pesometro=Pesometro::where('f37_id', '=', $f37_id)->get();

        $v_unitario4 = $request->get('v_unitario4');
        $subtotal4 = $request->get('subtotal4');

        for($k=0;$k<count($v_unitario4);$k++) {
          Pesometro::where('idPesometro', $pesometro[$k]->idPesometro)->update(['v_unitario4' => $v_unitario4[$k],
                'subtotal4' => $subtotal4[$k]]);
        }

        $f37->comunicacion = $request->input('comunicacion');
        $f37->pregunta1 = $request->input('pregunta1');
        $f37->pregunta2 = $request->input('pregunta2');
        $f37->pregunta3 = $request->input('pregunta3');
        $f37->estado = 'cotizado';
        $f37->created_at = Carbon::now();
        $f37->update();






        return redirect('/valorizado')->with('mensaje','Solicitud de compra valorizada exitósamente');
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
