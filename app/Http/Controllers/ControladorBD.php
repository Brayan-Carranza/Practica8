<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorDiario;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ControladorBD extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resultRec= DB::table('libros')->get();

        return view('libros', compact('resultRec'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Registro');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('libros')->insert([
            "ISBN"=>$request->input('TxtISBN'),
            "Titulo"=>$request->input('TxtTitulo'),
            "Autor"=>$request->input('TxtAutor'),
            "Paginas"=>$request->input('TxtPaginas'),
            "Editorial"=>$request->input('TxtEditorial'),
            "E-mail"=>$request->input('TxtE-mail'),
            "Fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('libro/create')->with('confirmacion',"Tu libro ah sido guardado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
