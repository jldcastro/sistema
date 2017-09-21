<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ClienteCreateRequest extends Request
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
            'nombre' => 'required|unique:clientes',
            'rut_cliente' => 'required|unique:clientes',
            'ubicacion' => 'required',
            'planta' => 'required',
        ];
    }
}
