<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class StoreContacto extends FormRequest
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
            'nombre' => 'required|max:200',
            'email' => 'required|email',
            'telefono'=> 'required|min:8, max:10',
            'mensaje'=> 'required|max:250',
            'g-recaptcha-response'=>'required'
        ];
    }
}
