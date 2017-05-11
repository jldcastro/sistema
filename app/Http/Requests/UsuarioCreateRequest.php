<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioCreateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'codigo_usuario' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut_usuario' => 'required|cl_rut|unique:users',
        ];
    }

    public function messages()
    {
        return [
            'rut_usuario.cl_rut' => 'El rut ingresado no es válido',
        ];
    }
}
