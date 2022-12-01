<?php

use App\Http\Controllers\ControladorBD;
use App\Http\Controllers\ControladorCS;
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


    // Route::get('RegistroClientes','VistaCliente')->name('Cli');


});
//RUTAS DE CLIENTES.

Route::get('cliente',[ControladorCS::class,'index'])->name('clientes.index');
Route::post('cliente/store',[ControladorCS::class,'store'])->name('cliente.store');
Route::get('cliente/create',  [ControladorCS::class, 'create'])->name('clientes.create');
Route::put('cliente/{id}', [ControladorCS::class, 'update'])->name('cliente.update');
Route::get('cliente/{id}/edit',  [ControladorCS::class, 'edit'])->name('clientes.edit');
Route::get('cliente/show/{id}',  [ControladorCS::class, 'show'])->name('clientes.show');
Route::delete('cliente/{id}',  [ControladorCS::class, 'destroy'])->name('clientes.destroy');

//RUTAS DE LIBROS.
Route::get('libro/create',[ControladorBD::class,'create'])->name('libros.create');
Route::get('libro', [ControladorBD::class,'index'])->name('libros.index');
Route::post('libro/store',[ControladorBD::class,'store'])->name('libro.store');
Route::get('libro/{id}/edit',  [ControladorBD::class, 'edit'])->name('libros.edit');
Route::put('libro/{id}', [ControladorBD::class, 'update'])->name('libro.update');
Route::get('libro/show/{id}',  [ControladorBD::class, 'show'])->name('libros.show');
Route::delete('libro/{id}',  [ControladorBD::class, 'destroy'])->name('libros.destroy');

