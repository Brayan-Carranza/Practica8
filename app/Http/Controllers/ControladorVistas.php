<?php

namespace App\Http\Controllers;

use App\Http\Requests\ValidadorCliente;
use Illuminate\Http\Request;
use App\Http\Requests\ValidadorLibros;
use League\Flysystem\UrlGeneration\PublicUrlGenerator;

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
    public function VistaCliente(){
        return view('RegistroClientes');
    }
    public function ProcesoRegistro(ValidadorLibros $req){
        // $titulo=$req->input('TxtTitulo');
        return redirect()->route('Reg')->with('confirmacion','Tu libro ha llegado el controaldor');
    }
    public function AltaCliente(ValidadorCliente $req){
        $cliente=$req->input('TxtCliente');
        return redirect()->route('Cli')->with('confirmacion',$cliente);

    }
}
