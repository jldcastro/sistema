<?php

namespace App\Http\Controllers;

use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class PermisoController extends Controller
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
        $permisos = Permission::all();
        return view('permisos.index',compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        $permisos=Permission::all();
        return view("permisos.create",compact('roles','permisos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rol=new Permission();
        $rol->name=$request->input("name") ;
        $rol->slug=$request->input("slug") ;
        $rol->description=$request->input("description") ;
        $rol->save();

        return redirect('/permiso')->with('mensaje','Permiso de usuario registrado exitósamente');
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
        $permiso = Permission::find($id);
        return view('permisos.edit',compact('permiso',$permiso));
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
        $permiso = Permission::find($id);
        $permiso->name=$request->input("name");
        $permiso->slug=$request->input("slug") ;
        $permiso->description=$request->input("description") ;
        $permiso->save();

        Session::flash('mensaje','Permiso de usuario actualizado exitósamente');
        return Redirect::to('/permiso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Permission::destroy($id);

        Session::flash('mensaje2','Permiso de usuario eliminado exitósamente');
        return Redirect::to('/permiso');
    }

    public function asignar_permiso($idusu,$idrol){
        $usuario=User::find($idusu);
        $usuario->assignRole($idrol);

        $usuario=User::find($idusu);
        $rolesasignados=$usuario->getRoles();

        return json_encode ($rolesasignados);
    }
}
