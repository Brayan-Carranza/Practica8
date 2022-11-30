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
        "TxtISBN" => "required|integer|min_digits:13",
        "TxtTitulo" => "required",
        "TxtAutor" => "required",
        "TxtPaginas" => "required| integer",
        "TxtEditorial" => "required",
        "TxtEmail" => "required|email",
        ];
    }
    public function messages(){
     return   [
            "TxtISBN.required" => "El ISBN es requerido",
            "TxtTitulo.required" => "El Titulo es requerido",
            "TxtAutor.required" => "El Autor es requerido",
            "TxtPaginas.required" => "Las Paginas son requeridas",
            "TxtEditorial.required" => "El Editorial es requerido",
            "TxtEmail.required" => "El E-mail es requerido",
            "TxtEmail.email" => "Solo se acepta formato e-mail",
            "TxtISBN.integer" => "El ISBN solo acepta numeros",
            "TxtISBN.min_digits" => "El ISBN acepta minimo 13 caracteres",
            ];

    }
}
