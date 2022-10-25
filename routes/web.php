<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;

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



/*Route :: view ('/','menu')-> name('m');

Route::get('Formulario', [ControladorVistas::class,'vistaFormulario'])-> name('form');

Route::get('Tabla', [ControladorVistas::class,'vistaTabla'])-> name('ta') ;

Route::post('guardarUsuario',[ControladorVista::class,'cargarFormulario'])->name('SaveMen');
*/

Route ::view('/','menu')->name('m');
Route::controller(ControladorVistas::class)->group(
    
    function(){
        Route::get('formulario', 'vistaFormulario')-> name('form');
        Route::get('tabla','vistaTabla')-> name('ta');
    }
    );

    
    Route::post('guardarUsuario',[ControladorVistas::class,'cargarFormulario'])->name('SaveMen');  

