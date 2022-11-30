<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\validadorDiario;
use App\Http\Requests\ValidadorLibros;
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
    public function store(ValidadorLibros $request)
    {
        DB::table('libros')->insert([
            "ISBN"=>$request->input('TxtISBN'),
            "Titulo"=>$request->input('TxtTitulo'),
            "Autor"=>$request->input('TxtAutor'),
            "Paginas"=>$request->input('TxtPaginas'),
            "Editorial"=>$request->input('TxtEditorial'),
            "Email"=>$request->input('TxtEmail'),
            "Fecha"=> Carbon::now(),
            "created_at"=> Carbon::now(),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('libro')->with('confirmacion',"Tu libro ah sido guardado");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $consultaId=DB::table('libros')->where('idLibros',$id)->first();
        return view('M-Eliminar',compact('consultaId'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $consultaId= DB::table('libros')->where('idLibros',$id)->first();
        return view('editar',compact('consultaId'));
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
        DB::table('libros')->where('idLibros',$id)->update([
            "ISBN"=>$request->input('TxtISBN'),
            "Titulo"=>$request->input('TxtTitulo'),
            "Autor"=>$request->input('TxtAutor'),
            "Paginas"=>$request->input('TxtPaginas'),
            "Editorial"=>$request->input('TxtEditorial'),
            "Email"=>$request->input('TxtEmail'),
            "updated_at"=> Carbon::now(),

        ]);
        return redirect('libro')->with('Actualizado',"Tu libro ah sido actualizado");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('libros')->where('idLibros',$id)->delete();
        return redirect('libro')->with('Eliminacion',"abc");
    }
}
