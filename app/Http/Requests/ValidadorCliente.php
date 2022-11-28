<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidadorCliente extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
        "TxtNombre"=>"required|min:4",
        "TxtE-mail"=>"required|email",
        "TxtINE"=>"required|numeric|min_digits:10"
        ];
    }
    public function messages()
    {
        return[
        "TxtNombre.required"=>"El nombre es requerido",
        "TxtE-mail.required"=>"El E-mail es requerido",
        "TxtINE.required"=>"El No.INE es requerido",
        "TxtINE.min_digits"=>"Solo se aceptan minimo 10 caracteres",
        "TxtNombre.min"=>"Solo se aceptan minimo 4 caracteres",
        "TxtE-mail.email"=>"Solo se aceptan formatos en E-mail"
        ];
    }
}
