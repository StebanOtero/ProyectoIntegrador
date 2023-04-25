<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DocenteFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'documento_identidad' => 'required',
            'nombres' => 'required', 
        ];
    }
    public function messages(){
        return [
        'documento_identidad.required' => 'El documento es un campo requerido',
        'nombres.required' => 'El nombre debe ser un campo requerido',
        //'email.email' => 'El correo debe tener un formato correcto',
    ];
  } 
}
