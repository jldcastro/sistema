<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ClienteCreateRequest;
use App\Http\Requests\ClienteUpdateRequest;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::orderBy('nombre', 'asc')->paginate(20);
        return view('clientes.index',compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClienteCreateRequest $request)
    {
        $cliente=new Cliente();
        $cliente->nombre = $request->input('nombre') ;
        $cliente->rut_cliente = $request->input("rut_cliente");
        $cliente->ubicacion = $request->input('ubicacion') ;
        $cliente->planta = $request->input('planta');

        $cliente->save();

        return redirect('/cliente')->with('mensaje','Cliente registrado exitósamente');
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
        $cliente=Cliente::find($id);
        return view("clientes.edit")->with("cliente",$cliente);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ClienteUpdateRequest $request, $id)
    {
        $cliente =  Cliente::find($id);
        $cliente->nombre = $request->input('nombre');
        $cliente->ubicacion = $request->input('ubicacion');
        $cliente->planta = $request->input('planta');
        $cliente->save();

        Session::flash('mensaje','Datos cliente actualizados exitósamente');
        return Redirect::to('/cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::destroy($id);

        Session::flash('mensaje2','Cliente eliminado exitósamente');
        return Redirect::to('/cliente');
    }
}
