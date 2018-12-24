<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EmpleadoFormRequest extends Request
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
            'Papp'=>'max:45',
            'Sapp'=>'max:45',            
            'Telefono'=>'max:45',
            'puesto'=>'required|max:80',
            'ID_empresa'=>'required',
            'foto'=>'mimes:jpg,bmp,png,jpeg',
            'password' => 'required|min:6',
            'password_confir' => 'required|min:6|same:password'
        ];
    }
}
