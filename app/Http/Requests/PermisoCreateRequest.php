<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class PermisoCreateRequest extends Request
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
            'name' => 'required|unique:roles',
            'slug' => 'required|unique:roles',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Debe ingresar algún permiso de usuario',
            'name.unique' => 'El nombre del permiso ya fue registrado',
            'slug.required' => 'Debe ingresar algún slug',
            'slug.unique' => 'El nombre del slug ya fue registrado',
        ];
    }
}