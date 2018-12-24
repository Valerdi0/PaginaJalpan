<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmpresaFormRequest extends Request
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
            'Nombre'=>'required|max:45',
            'Giro'=>'required|max:45',
            'Direccion'=>'required|max:150',
            'Telefono'=>'max:45',
            'password' => 'required|min:6',
            'password_confir' => 'required|min:6|same:password' 
        ];
    }
}
