@extends('layouts.master')

@section('contenido')
    
    <div class="list-group">
        <a href="{{ route('estudiantes') }}" class="list-group-item list-group-item-action ">Obtener todos los Estudiantes</a>
        <a href="{{ route('profesores') }}" class="list-group-item list-group-item-action">Obtener todos los Profesores</a>
        <a href="{{ route('cursos') }}" class="list-group-item list-group-item-action ">Obtener todos los Cursos</a>

        <a href="{{ route('marcadores') }}" class="list-group-item list-group-item-action ">Mostrar marcadores Json</a>
    </div>

    <div class="list-group">
         <a href="#" class="list-group-item list-group-item-action ">Obtener Un Estudiante</a>
         <a href="#" class="list-group-item list-group-item-action">Obtener Un Profesor</a>
         <a href="#" class="list-group-item list-group-item-action ">Obtener Un Curso</a>
     </div>

@endsection