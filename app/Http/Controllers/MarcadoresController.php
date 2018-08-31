<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\File;

class MarcadoresController extends Controller
{
    public function mostrarMarcadores()
    {
        $marcadores=$this->ontenerTodosLosMarcadores();

        return view('marcadores.todos', compact('marcadores'));
    }

    protected function ontenerTodosLosMarcadores()
    {
        $json = File::get("../resources/json/archivo.json");
        $data = json_decode($json);

       //trai los datos del archivo json de la estructura marcadores

        return $data;
    }
}
