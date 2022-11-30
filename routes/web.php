<?php

use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorVistas;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::controller(ControladorVistas::class)->group(function () {
    Route::get('Principal', 'vistaPrincipal')->name('Pri');


    Route::get('RegistroClientes','VistaCliente')->name('Cli');


});


Route::post('guardarCliente',[ControladorVistas::class,'AltaCliente'])->name('cli');

Route::get('libro/create',[ControladorBD::class,'create'])->name('libros.create');
Route::get('libro', [ControladorBD::class,'index'])->name('libros.index');
Route::post('libro/store',[ControladorBD::class,'store'])->name('libro.store');
Route::get('libro/{id}/edit',  [ControladorBD::class, 'edit'])->name('libros.edit');
Route::put('libro/{id}', [ControladorBD::class, 'update'])->name('libro.update');
Route::get('libro/show/{id}',  [ControladorBD::class, 'show'])->name('libros.show');
Route::delete('libro/{id}',  [ControladorBD::class, 'destroy'])->name('libros.destroy');
