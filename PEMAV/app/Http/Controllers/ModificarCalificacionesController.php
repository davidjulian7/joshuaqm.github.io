<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModificarCalificacionesController extends Controller
{
    public function index()
    {
        return view('vistas-administrador.modificar-calificaciones');
    }
    
}
