<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CursosController extends Controller
{
    public function mostrarCursos()
    {
        $cursos=$this->ontenerTodosLosCursos();

        return view('cursos.todos', compact('cursos'));
    }

    protected function ontenerTodosLosCursos()
    {
        $respuesta=$this->realizarPeticion('GET','https://apilumen.juandmegon.com/cursos');

        $datos= json_decode($respuesta);

        $cursos =$datos->data;

        return $cursos;
    }
}
