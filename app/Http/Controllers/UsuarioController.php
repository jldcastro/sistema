<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\UsuarioCreateRequest;
use App\Http\Requests\UsuarioUpdateRequest;

class UsuarioController extends Controller
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

        $usuarios = User::orderBy('codigo_usuario', 'asc')->paginate(20);
        return view('usuarios.index',compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('usuarios.create')->with("roles",$roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UsuarioCreateRequest $request)
    {
        $usuario=new User;
        $usuario->codigo_usuario = $request->input('codigo_usuario');
        $usuario->name = $request->input('name') ;
        $usuario->email=$request->input("email");
        $usuario->password= bcrypt( $request->input("password") );
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno') ;
        $usuario->rut_usuario = $request->input("rut_usuario");
        $usuario->save();

        return redirect('/usuario')->with('mensaje','Usuario registrado exitósamente');
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
        $usuario=User::find($id);
        $roles=Role::all();
        return view("usuarios.edit")->with("usuario",$usuario)->with("roles",$roles);
    }

    public function editar_acceso(Request $request,$id){
        $usuario=User::find($id);
        $usuario->email=$request->input("email");
        $usuario->password= bcrypt( $request->input("password") );
        if( $usuario->save()){
            return view("")->with("msj","Usuario actualizado correctamente")->with("id",$id) ;
        }
        else
        {
            return view("")->with("msj","...Hubo un error al agregar ; intentarlo nuevamente ...") ;
        }
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UsuarioUpdateRequest $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name = $request->input('name');
        $usuario->email = $request->input('email');
        $usuario->apellido_paterno = $request->input('apellido_paterno');
        $usuario->apellido_materno = $request->input('apellido_materno');
        $usuario->password= bcrypt( $request->input("password") );
        if($request->has("rol")){
            $rol=$request->input("rol");
            $usuario->revokeAllRoles();
            $usuario->assignRole($rol);
        }
        $usuario->save();


        Session::flash('mensaje','Datos usuario actualizados exitósamente');
        return Redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);

        Session::flash('mensaje2','Usuario eliminado exitósamente');
        return Redirect::to('/usuario');
    }

    public function asignar_permiso(Request $request){

        $roleid=$request->input("rol_sel");
        $idper=$request->input("permiso_rol");
        $rol=Role::find($roleid);
        $rol->assignPermission($idper);

        $rol->save();
    }

    public function asignar_rol($idusu,$idrol){
        $usuario=User::find($idusu);
        $usuario->assignRole($idrol);

        $usuario=User::find($idusu);
        $rolesasignados=$usuario->getRoles();

        return json_encode ($rolesasignados);
    }

    public function quitar_permiso($idrole,$idper){

        $role = Role::find($idrole);
        $role->revokePermission($idper);
        $role->save();
    }



    public function quitar_rol($idusu,$idrol){

        $usuario=User::find($idusu);
        $usuario->revokeRole($idrol);
        $rolesasignados=$usuario->getRoles();
        return json_encode ($rolesasignados);


    }
}
