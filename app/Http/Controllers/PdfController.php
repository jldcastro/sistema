<?php

namespace App\Http\Controllers;

use App\Balanza;
use App\Bascula;
use App\F37;
use App\Masa;
use App\Pesometro;
use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PdfController extends Controller
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
        return view('pdf.index');
    }

    public function index2()
    {
        return view('pdf.index2');
    }

    public function index3()
    {
        return view('pdf.index3');
    }

    public function index4()
    {
        return view('pdf.index4');
    }

    public function index5()
    {
        return view('pdf.index5');
    }

    public function index6()
    {
        return view('pdf.index6');
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

    public function crearPDF($datos,$vistaurl,$tipo)
    {
        $data = $datos;
        $date = date('Y-m-d');
        $view = \View::make($vistaurl,compact('data','date'))->render();
        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($view);
        if($tipo==1){return $pdf->stream('reporte');}
        if($tipo==2){return $pdf->download('reporte.pdf');}
    }

    public function crear_reporte_equipos($tipo)
    {
        $vistaurl = "pdf.crear_reporte_equipos";
        $basculas = Bascula::all();
        return $this->crearPDF($basculas,$vistaurl,$tipo);
    }

    public function crear_reporte_equipos2($tipo)
    {
        $vistaurl = "pdf.crear_reporte_equipos2";
        $balanzas = Balanza::all();
        return $this->crearPDF($balanzas,$vistaurl,$tipo);
    }

    public function crear_reporte_equipos3($tipo)
    {
        $vistaurl = "pdf.crear_reporte_equipos3";
        $masas = Masa::all();
        return $this->crearPDF($masas,$vistaurl,$tipo);
    }

    public function crear_reporte_equipos4($tipo)
    {
        $vistaurl = "pdf.crear_reporte_equipos4";
        $pesometros = Pesometro::all();
        return $this->crearPDF($pesometros,$vistaurl,$tipo);
    }

    public function crear_reporte_comunas($tipo)
    {
        $vistaurl = "pdf.crear_reporte_comunas";
        $f37s = F37::all();
        return $this->crearPDF($f37s,$vistaurl,$tipo);
    }

    public function crear_reporte_equipos6($tipo)
    {
        $vistaurl = "pdf.crear_reporte_equipos4";
        $pesometros = Pesometro::all();
        return $this->crearPDF($pesometros,$vistaurl,$tipo);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
