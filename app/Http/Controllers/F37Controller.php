<?php

namespace App\Http\Controllers;

use App\F37;
use App\Masa;
use App\Pesometro;
use App\TipoEquipo;
use App\Condicion;
use App\Marca;
use App\Material;
use App\Modelo;
use App\Tipo;
use App\Bascula;
use App\Balanza;
use App\Unidad;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;
use Session;




class F37Controller extends Controller
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

    public function index()
    {
        $f37s = F37::all();
        return view('f37.index',compact('f37s'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos_equipos = TipoEquipo::lists('nombre','id');
        $marcas = Marca::lists('nombre','id');
        $modelos = Modelo::lists('nombre','id');
        $tipos = Tipo::lists('nombre','id');
        $unidadesc = Unidad::lists('nombre','id');
        $unidadesg = Unidad::lists('nombre','id');
        $condiciones = Condicion::lists('nombre','id');
        $materiales = Material::lists('nombre','id');
        $sql = mysqli_connect('localhost','root','','duran');
        $consulta = mysqli_query($sql,'SELECT MAX(numero)as numero FROM f37s LIMIT 1');
        $consulta = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
        $codigo = (empty($consulta['numero']) ? 1 : $consulta['numero']+1);
        $fecha_solicitud = Carbon::now();
        $fecha_solicitud = $fecha_solicitud->format('Y-m-d');

        return view('f37.create',compact('codigo','fecha_solicitud','tipos_equipos','marcas','modelos','tipos','unidadesc','unidadesg','condiciones','materiales'));
    }

    public function getMarcas(Request $request, $id)
    {
        if($request->ajax()){
            $marcas = Marca::marca($id);
            return response()->json($marcas);
        }
    }

    public function getModelos(Request $request,$id)
    {
        if($request->ajax()){
            $modelos = Modelo::modelo($id);
            return response()->json($modelos);
        }
    }

    public function getTipos(Request $request,$id)
    {
        if($request->ajax()){
            $tipos = Tipo::tipo($id);
            return response()->json($tipos);
        }
    }

    public function getUnidades(Request $request,$id)
    {
        if($request->ajax()){
            $unidades = Unidad::unidad($id);
            return response()->json($unidades);
        }
    }

    public function getCondiciones(Request $request,$id)
    {
        if($request->ajax()){
            $condiciones = Condicion::condicion($id);
            return response()->json($condiciones);
        }
    }

    public function getMateriales(Request $request,$id)
    {
        if($request->ajax()){
            $materiales = Material::material($id);
            return response()->json($materiales);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       $f37= new F37();
        $f37->fecha_solicitud = Carbon::now();
        $f37->comuna_servicio=$request->input('comuna_servicio');
        $f37->lugar_servicio=$request->input('lugar_servicio');
        $f37->nombre_contacto = $request->input('nombre_contacto');
        $f37->fono_contacto = $request->input('fono_contacto');
        $f37->correo_contacto = $request->input('correo_contacto');
        $f37->direccion_cliente = $request->input('direccion_cliente');
        $f37->direccion_envio = $request->input('direccion_envio');
        $f37->ciudad_envio = $request->input('ciudad_envio');
        $f37->direccion_despacho = $request->input('direccion_despacho');
        $f37->nota_venta = $request->input('nota_venta');
        $f37->orden_compra = $request->input('orden_compra');
        $f37->tipo_cliente = implode($request->tipo_cliente,',');
        $f37->observaciones = $request->input('observaciones');
        $f37->comunicacion = $request->input('comunicacion');
        $f37->pregunta1 = $request->input('pregunta1');
        $f37->pregunta2 = $request->input('pregunta2');
        $f37->pregunta3 = $request->input('pregunta3');
        $f37->nfactura = $request->input('nfactura');
        $f37->monto_neto = $request->input('monto_neto');
        $f37->it = $request->input('it');
        $f37->vt_cotizado = $request->input('vt_cotizado');
        $f37->monto_neto2 = $request->input('monto_neto2');
        $f37->diferencia = $request->input('diferencia');
        $f37->estado = 'valorizado';
        $f37->save();
                $numero=$f37->numero;


        $idTipoEquipo = $request->get('tipoEquipo_id');
        $cantidad = $request->get('cantidad');
        $marca_id = $request->get('marca_id');
        $modelo_id = $request->get('modelo_id');
        $tipo_id = $request->get('tipo_id');
        $ubicacion = $request->get('ubicacion');
        $puntos = $request->get('puntos');
        $pesaje_mop = $request->get('pesaje_mop');
        $capacidad = $request->get('capacidad');
        $unidadc_id = $request->get('unidadc_id');
        $graduacion = $request->get('graduacion');
        $unidadg_id = $request->get('unidadg_id');
        $condicion_id = $request->get('condicion_id');
        $fu_mantencion = $request->get('fu_mantencion');
        $fu_calibracion = $request->get('fu_calibracion');
        $v_referencial = $request->get('v_referencial');
        $v_unitario = $request->get('v_unitario');
        $f_tentativa = $request->get('f_tentativa');
        $h_tentativo = $request->get('h_tentativo');
        $observacion = $request->get('observacion');
        $periocidad = $request->get('periocidad');

        $cont = 0;

        while($cont<count($idTipoEquipo)){
                        $cantidadbasculas = $cantidad[$cont];
for($i=0;$i<$cantidadbasculas;$i++){




            $bascula = new Bascula();
            $bascula->f37_id = $numero;
            $bascula->cantidad = $cantidad[$cont];
            $bascula->tipoEquipo_id = $idTipoEquipo[$cont];
            $bascula->marca_id = $marca_id[$cont];
            $bascula->modelo_id = $modelo_id{$cont};
            $bascula->tipo_id = $tipo_id[$cont];
            $bascula->ubicacion = $ubicacion[$cont];
            $bascula->puntos = $puntos[$cont];
            $bascula->pesaje_mop = $pesaje_mop[$cont];
            $bascula->capacidad = $capacidad[$cont];
            $bascula->unidadc_id = $unidadc_id[$cont];
            $bascula->graduacion = $graduacion[$cont];
            $bascula->unidadg_id = $unidadg_id[$cont];
            $bascula->condicion_id = $condicion_id[$cont];
            $bascula->fu_mantencion = $fu_mantencion[$cont];
            $bascula->fu_calibracion = $fu_calibracion[$cont];
            $bascula->v_referencial = $v_referencial[$cont];
            $bascula->v_unitario = $v_unitario[$cont];
            $bascula->f_tentativa = $f_tentativa[$cont];
            $bascula->h_tentativo = $h_tentativo[$cont];
            $bascula->observacion = $observacion[$cont];
            $bascula->periocidad = $periocidad[$cont];
            $bascula->save();
        }

            $cont = $cont +1;
        }

        $idTipoEquipo2 = $request->get('tipoEquipo2_id');
        $cantidad2 = $request->get('cantidad2');
        $marca2_id = $request->get('marca2_id');
        $modelo2_id = $request->get('modelo2_id');
        $tipo2_id = $request->get('tipo2_id');
        $ubicacion2 = $request->get('ubicacion2');
        $puntos2 = $request->get('puntos2');
        $capacidad2 = $request->get('capacidad2');
        $unidadc2_id = $request->get('unidadc2_id');
        $graduacion2 = $request->get('graduacion2');
        $unidadg2_id = $request->get('unidadg2_id');
        $condicion2_id = $request->get('condicion2_id');
        $fu_mantencion2 = $request->get('fu_mantencion2');
        $fu_calibracion2 = $request->get('fu_calibracion2');
        $v_referencial2 = $request->get('v_referencial2');
        $v_unitario2 = $request->get('v_unitario2');
        $f_tentativa2 = $request->get('f_tentativa2');
        $h_tentativo2 = $request->get('h_tentativo2');
        $observacion2 = $request->get('observacion2');
        $periocidad2 = $request->get('periocidad2');

        $cont2 = 0;

        while($cont2<count($idTipoEquipo2)){
                         $cantidadbalanza = $cantidad2[$cont];
for($i=0;$i<$cantidadbalanza;$i++){

 
            $balanza = new Balanza();
            $balanza->f37_id = $numero;
            $balanza->cantidad2 = $cantidad2[$cont2];
            $balanza->tipoEquipo2_id = $idTipoEquipo2[$cont2];
            $balanza->marca2_id = $marca2_id[$cont2];
            $balanza->modelo2_id = $modelo2_id{$cont2};
            $balanza->tipo2_id = $tipo2_id[$cont2];
            $balanza->ubicacion2 = $ubicacion2[$cont2];
            $balanza->puntos2 = $puntos2[$cont2];
            $balanza->capacidad2 = $capacidad2[$cont2];
            $balanza->unidadc2_id = $unidadc2_id[$cont2];
            $balanza->graduacion2 = $graduacion2[$cont2];
            $balanza->unidadg2_id = $unidadg2_id[$cont2];
            $balanza->condicion2_id = $condicion2_id[$cont2];
            $balanza->fu_mantencion2 = $fu_mantencion2[$cont2];
            $balanza->fu_calibracion2 = $fu_calibracion2[$cont2];
            $balanza->v_referencial2 = $v_referencial2[$cont2];
            $balanza->v_unitario2 = $v_unitario2[$cont2];
            $balanza->f_tentativa2 = $f_tentativa2[$cont2];
            $balanza->h_tentativo2 = $h_tentativo2[$cont2];
            $balanza->observacion2 = $observacion2[$cont2];
            $balanza->periocidad2 = $periocidad2[$cont2];
            $balanza->save();
}
            $cont2 = $cont2 +1;
        }

        $idTipoEquipo3 = $request->get('tipoEquipo3_id');
        $cantidad3 = $request->get('cantidad3');
        $marca3_id = $request->get('marca3_id');
        $modelo3_id = $request->get('modelo3_id');
        $material_id = $request->get('material_id');
        $clase_oiml = $request->get('clase_oiml');
        $ubicacion3 = $request->get('ubicacion3');
        $capacidad3 = $request->get('capacidad3');
        $unidadc3_id = $request->get('unidadc3_id');
        $graduacion3 = $request->get('graduacion3');
        $unidadg3_id = $request->get('unidadg3_id');
        $condicion3_id = $request->get('condicion3_id');
        $r_ajuste = $request->get('r_ajuste');
        $r_mantencion = $request->get('r_mantencion');
        $v_referencial3 = $request->get('v_referencial3');
        $v_unitario3 = $request->get('v_unitario3');
        $f_tentativa3 = $request->get('f_tentativa3');
        $h_tentativo3 = $request->get('h_tentativo3');
        $observacion3 = $request->get('observacion3');
        $periocidad3 = $request->get('periocidad3');

        $cont3 = 0;

        while($cont3<count($idTipoEquipo3)){
                                     $cantidadmasa = $cantidad3[$cont];
for($i=0;$i<$cantidadmasa;$i++){


 
            $masa = new Masa();
            $masa->f37_id = $numero;
            $masa->cantidad3 = $cantidad3[$cont3];
            $masa->tipoEquipo3_id = $idTipoEquipo3[$cont3];
            $masa->marca3_id = $marca3_id[$cont3];
            $masa->modelo3_id = $modelo3_id{$cont3};
            $masa->material_id = $material_id[$cont3];
            $masa->clase_oiml = $clase_oiml[$cont3];
            $masa->ubicacion3 = $ubicacion3[$cont3];
            $masa->capacidad3 = $capacidad3[$cont3];
            $masa->unidadc3_id = $unidadc3_id[$cont3];
            $masa->graduacion3 = $graduacion3[$cont3];
            $masa->unidadg3_id = $unidadg3_id[$cont3];
            $masa->condicion3_id = $condicion3_id[$cont3];
            $masa->r_ajuste = $r_ajuste[$cont3];
            $masa->r_mantencion = $r_mantencion[$cont3];
            $masa->v_referencial3 = $v_referencial3[$cont3];
            $masa->v_unitario3 = $v_unitario3[$cont3];
            $masa->f_tentativa3 = $f_tentativa3[$cont3];
            $masa->h_tentativo3 = $h_tentativo3[$cont3];
            $masa->observacion3 = $observacion3[$cont3];
            $masa->periocidad3 = $periocidad3[$cont3];
            $masa->save();

}
            $cont3 = $cont3 +1;
        }

        $idTipoEquipo4 = $request->get('tipoEquipo4_id');
        $cantidad4 = $request->get('cantidad4');
        $marca4_id = $request->get('marca4_id');
        $modelo4_id = $request->get('modelo4_id');
        $ubicacion4 = $request->get('ubicacion4');
        $rango_uso = $request->get('rango_uso');
        $capacidad4 = $request->get('capacidad4');
        $unidadc4_id = $request->get('unidadc4_id');
        $graduacion4 = $request->get('graduacion4');
        $unidadg4_id = $request->get('unidadg4_id');
        $condicion4_id = $request->get('condicion4_id');
        $fu_mantencion3 = $request->get('fu_mantencion3');
        $fu_calibracion3 = $request->get('fu_calibracion3');
        $v_referencial4 = $request->get('v_referencial4');
        $v_unitario4 = $request->get('v_unitario4');
        $f_tentativa4 = $request->get('f_tentativa4');
        $h_tentativo4 = $request->get('h_tentativo4');
        $observacion4 = $request->get('observacion4');
        $periocidad4 = $request->get('periocidad4');

        $cont4 = 0;

        while($cont4<count($idTipoEquipo4)){
                                     $cantidadpesometro = $cantidad4[$cont];
for($i=0;$i<$cantidadpesometro;$i++){



            $pesometro = new Pesometro();
            $pesometro->f37_id = $numero;
            $pesometro->cantidad4 = $cantidad4[$cont4];
            $pesometro->tipoEquipo4_id = $idTipoEquipo4[$cont4];
            $pesometro->marca4_id = $marca4_id[$cont4];
            $pesometro->modelo4_id = $modelo4_id{$cont4};
            $pesometro->ubicacion4 = $ubicacion4[$cont4];
            $pesometro->rango_uso = $rango_uso[$cont4];
            $pesometro->capacidad4 = $capacidad4[$cont4];
            $pesometro->unidadc4_id = $unidadc4_id[$cont4];
            $pesometro->graduacion4 = $graduacion4[$cont4];
            $pesometro->unidadg4_id = $unidadg4_id[$cont4];
            $pesometro->condicion4_id = $condicion4_id[$cont4];
            $pesometro->fu_mantencion3 = $fu_mantencion3[$cont4];
            $pesometro->fu_calibracion3 = $fu_calibracion3[$cont4];
            $pesometro->v_referencial4 = $v_referencial4[$cont4];
            $pesometro->v_unitario4 = $v_unitario4[$cont4];
            $pesometro->f_tentativa4 = $f_tentativa4[$cont4];
            $pesometro->h_tentativo4 = $h_tentativo4[$cont4];
            $pesometro->observacion4 = $observacion4[$cont4];
            $pesometro->periocidad4 = $periocidad4[$cont4];
            $pesometro->save();
        }

            $cont4 = $cont4 +1;
        }
        return redirect('/f37')->with('mensaje','Solicitud de compra registrada exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numero){
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

        return view('f37.show')->with('f37',$f37)->with('bascula',$bascula)->with('balanza',$balanza)->with('masa',$masa)->with('pesometro',$pesometro);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

        $idBalanza = $request->get('idBalanza');
        $idTipoEquipo2 = $request->get('tipoEquipo2_id');

        $cont2 = 0;

        while($cont2<count($idTipoEquipo2)){
            $balanza= Balanza::find($idBalanza[$cont]);
            $balanza->v_unitario2 = $request->get('v_unitario2')[$cont];
            $balanza->save();

            $cont2 = $cont2 +1;
        }

        $idMasa = $request->get('idMasa');
        $idTipoEquipo3 = $request->get('tipoEquipo3_id');

        $cont3 = 0;

        while($cont3<count($idTipoEquipo3)){
            $masa= Masa::find($idMasa[$cont]);
            $masa->v_unitario3 = $request->get('v_unitario3')[$cont];
            $masa->save();

            $cont3 = $cont3 +1;
        }

        $idPesometro = $request->get('idPesometro');
        $idTipoEquipo4 = $request->get('tipoEquipo4_id');

        $cont4 = 0;

        while($cont4<count($idTipoEquipo4)){
            $pesometro= Pesometro::find($idPesometro[$cont]);
            $pesometro->v_unitario4 = $request->get('v_unitario4')[$cont];
            $pesometro->save();

            $cont4 = $cont4 +1;
        }

        return redirect('/cotizado')->with('mensaje','Solicitud de compra cotizada exitósamente');
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
