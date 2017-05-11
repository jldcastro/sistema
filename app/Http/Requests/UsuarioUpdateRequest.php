<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UsuarioUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
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
            'email' => 'required',
            'apellido_paterno' => 'required',
            'apellido_materno' => 'required',
            'rut_usuario' => 'required|cl_rut',
        ];
    }
}
