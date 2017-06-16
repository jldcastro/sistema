<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class RolUpdateRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function rules()
    {
        return [
            'name' => 'required|unique:roles',
            'slug' => 'required|unique:roles',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar algún rol de usuario',
            'name.unique' => 'El nombre del rol ya fue registrado',
            'slug.required' => 'Debe ingresar algún slug',
            'slug.unique' => 'El nombre del slug ya fue registrado',
        ];
    }
}
