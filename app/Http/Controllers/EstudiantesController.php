<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function mostrarEstudiantes()
    {
        $estudiantes=$this->ontenerTodosLosEstudiantes();

        return view('estudiantes.todos', compact('estudiantes'));
    }

    protected function ontenerTodosLosEstudiantes()
    {
        $respuesta=$this->realizarPeticion('GET','https://apilumen.juandmegon.com/estudiantes');

        $datos= json_decode($respuesta);

        $estudiantes =$datos->data;

        return $estudiantes;
    }
}
