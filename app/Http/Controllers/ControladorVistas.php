<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibros;

class ControladorVistas extends Controller
{
    public function vistaWelcome(){
    return view('welcome');


    }
    public function vistaPrincipal(){
        return view('Principal');


    }
    public function vistaRegistro(){
        return view('Registro');



    }
    public function ProcesoRegistro(ValidadorLibros $req){
        $titulo=$req->input('TxtTitulo');   
        return redirect()->route('Reg')->with('confirmacion',$titulo);
    }
}
