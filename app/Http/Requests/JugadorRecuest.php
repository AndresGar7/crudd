<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class JugadorRecuest extends FormRequest
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
        $rules = [
            'name' => 'required|min:5',
            'age' => 'required',
            'club' => 'required'
        ];

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'El campo Nombre es obligatorio.',
            'name.min' => 'El nombre del equipo debe contener como minimo 5 caracteres.',
            'age.required' => 'El campo de edad es obligatorio',
            'club.required' => 'Se deben de crear equipos para poder seleccionar alguno'
        ];
    }
}
