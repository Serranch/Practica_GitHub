<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\validadorFormulario;

class ControladorVistas extends Controller
{
public function cargarFormulario(validadorFormulario $req){
    return redirect()->route('form')->with('confirmacion', 'holo');   
}
public function vistaFormulario(){
    return view('formulario');
}
public function vistaTabla(){
    return view('tabla');
}
}