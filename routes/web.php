<?php
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
    Route::get('welcome', 'vistaWelcome')->name('welcome');
    Route::get('Principal', 'vistaPrincipal')->name('Pri');
    Route::get('Registro', 'vistaRegistro')->name('Reg');



});

Route::post('guardarRegistro',[ControladorVistas::class,'ProcesoRegistro'])->name('reg');
