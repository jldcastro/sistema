<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\F37;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ValorizadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f37s = F37::all();
        return view('valorizado.index',compact('f37s'));
    }

    public function brian($id)
    {
        $f37s = f37::where('numero','=',$id)->first();
        $idf37s->$f37s->numero;





        return view('valorizado.index',compact('f37s'));
    }

    public function getF37(Request $request,$id)
    {
        if($request->ajax()){
            $f37s = F37::f37($id);
            return response()->json($f37s);
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
        return view('valorizado.edit',compact('f37'));
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
