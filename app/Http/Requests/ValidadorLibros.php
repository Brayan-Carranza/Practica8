<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class ValidadorLibros extends FormRequest
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
        "TxtISBN" => "required|integer|min:13",
        "TxtTitulo" => "required",
        "TxtAutor" => "required",
        "TxtPaginas" => "required| integer",
        "TxtEditorial" => "required",
        "TxtE-mail" => "required|email",
        ];
    }
    public function messages(){
     return   [
            "TxtISBN.required" => "El ISBN es requerido",
            "TxtTitulo.required" => "El Titulo es requerido",
            "TxtAutor.required" => "El Autor es requerido",
            "TxtPaginas.required" => "Las Paginas son requeridas",
            "TxtEditorial.required" => "El Editorial es requerido",
            "TxtE-mail.required" => "El E-mail es requerido",
            "TxtE-mail.email" => "Solo se acepta formato e-mail",
            "TxtISBN.integer" => "El ISBN solo acepta numeros",
            "TxtISBN.min" => "El ISBN acepta minimo 13 caracteres",
            ];

    }
}
