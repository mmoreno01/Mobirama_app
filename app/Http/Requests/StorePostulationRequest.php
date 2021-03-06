<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePostulationRequest extends FormRequest
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
            'nombre' => 'required|min:5| max:100',
            'apellido' => 'required|min:5|max:100',
            'correo' => 'required|email',
            'telefono'=> 'required|min:10|max:10',
            'area'=> 'required',
            'image' => 'required|mimes:pdf,doc,docx'
        ];
    }
}
