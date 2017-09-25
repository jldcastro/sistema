<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class F37CreateRequest extends Request
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
            'cliente_id' => 'required',
            'comuna_servicio' => 'required',
            'lugar_servicio' => 'required',
            'tipo_cliente' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'cliente_id.required' => 'Debe ingresar algún cliente',
        ];
    }
}
