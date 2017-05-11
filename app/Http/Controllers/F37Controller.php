<?php

namespace App\Http\Controllers;

use App\F37;
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
use App\Http\Controllers\Check;



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
        $tipos_equipos2 = TipoEquipo::lists('nombre','id');
        $tipos_equipos3 = TipoEquipo::lists('nombre','id');
        $tipos_equipos4 = TipoEquipo::lists('nombre','id');
        $marcas = Marca::lists('nombre','id');
        $modelos = Modelo::lists('nombre','id');
        $tipos = Tipo::lists('nombre','id');
        $unidadesc = Unidad::lists('nombre','id');
        $unidadesg = Unidad::lists('nombre','id');
        $condiciones = Condicion::lists('nombre','id');
        $sql = mysqli_connect('localhost','root','','sistema');
        $consulta = mysqli_query($sql,'SELECT MAX(numero)as numero FROM f37s LIMIT 1');
        $consulta = mysqli_fetch_array($consulta,MYSQLI_ASSOC);
        $codigo = (empty($consulta['numero']) ? 1 : $consulta['numero']+1);
        $fecha_solicitud = Carbon::now();
        $fecha_solicitud = $fecha_solicitud->format('Y-m-d');

        return view('f37.create',compact('codigo','fecha_solicitud','tipos_equipos','tipos_equipos2','tipos_equipos3','tipos_equipos4','marcas','modelos','tipos','unidadesc','unidadesg','condiciones'));
    }

    public function getMarcas(Request $request,$id)
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
        $f37->fecha_solicitud = Carbon::now()->toDateString();
        $f37->comuna_servicio=$request->input('comuna_servicio');
        $f37->lugar_servicio=$request->input('lugar_servicio');
        $f37->tipo_cliente =serialize(input::get('tipo_cliente'));
        $f37->observaciones = $request->input('observaciones');
        $f37->save();

        //$cantidad = $request->get('cantidad');

        return redirect('/f37')->with('mensaje','Solicitud de compra registrada exitósamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($numero){
        $f37_numero = F37::find($numero);
        $fecha_solicitud = Carbon::now();
        $fecha_solicitud = $fecha_solicitud->format('Y-m-d');

        return view('f37.show',compact('f37_numero','fecha_solicitud'));
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
    public function update(Request $request, $id)
    {
        //
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
