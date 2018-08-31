<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesoresController extends Controller
{
    public function mostrarProfesores()
    {
        $profesores=$this->ontenerTodosLosProfesores();

        return view('profesores.todos', compact('profesores'));
    }

    protected function ontenerTodosLosProfesores()
    {
        $respuesta=$this->realizarPeticion('GET','https://apilumen.juandmegon.com/profesores');

        $datos= json_decode($respuesta);

        $profesores =$datos->data;

        return $profesores;
    }
}
