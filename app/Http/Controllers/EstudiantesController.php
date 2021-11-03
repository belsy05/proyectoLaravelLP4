<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    //
    public function index(){
        return view('raizestudiante');
    }

    /**
     * Responde a las peticiones de estudiante/crear 
     * @ return string
     */
    public function crear (){
        return "Ruta de crear estudiante";
    }
}
