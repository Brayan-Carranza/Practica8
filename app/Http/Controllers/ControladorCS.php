<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidadorCliente;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ControladorCS extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultCli= DB::table('clientes')->get();

        return view('clientes', compact('resultCli'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('RegistroClientes');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ValidadorCliente $request)
    {
        DB::table('clientes')->insert([
        "Nombre"=>$request->input('TxtNombre'),
        "Email"=>$request->input('TxtEmail'),
        "NoIne"=>$request->input('TxtINE'),
        "Fecha"=> Carbon::now(),
        "created_at"=> Carbon::now(),
        "updated_at"=> Carbon::now(),

        ]);
        return redirect('cliente')->with('confirmacion',"Cliente guardado con exito");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId=DB::table('clientes')->where('idCliente',$id)->first();
        return view('M-EliminarC',compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('clientes')->where('idCliente',$id)->first();
        return view('C_editar',compact('consultaId'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ValidadorCliente $request, $id)
    {
        DB::table('clientes')->where('idCliente',$id)->update([
            "Nombre"=>$request->input('TxtNombre'),
            "Email"=>$request->input('TxtEmail'),
            "NoIne"=>$request->input('TxtINE'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('cliente')->with('Actualizado',"Tu cliente ah sido actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('clientes')->where('idCliente',$id)->delete();
        return redirect('cliente')->with('Eliminacion',"abc");
    }
}
