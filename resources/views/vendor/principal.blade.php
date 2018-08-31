@extends('layouts.master')

@section('contenido')
    
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action ">Obtener todos los Estudiantes</a>
        <a href="#" class="list-group-item list-group-item-action">Obtener todos los Profesores</a>
        <a href="#" class="list-group-item list-group-item-action disabled">Obtener todos los Cursos</a>
    </div>

    <div class="list-group">
         <a href="#" class="list-group-item list-group-item-action ">Obtener Un Estudiante</a>
         <a href="#" class="list-group-item list-group-item-action">Obtener Un Profesor</a>
         <a href="#" class="list-group-item list-group-item-action disabled">Obtener Un Curso</a>
     </div>

@endsection