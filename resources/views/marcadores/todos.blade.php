
@extends('layouts.master')

@section('contenido')	

    <?php
    //dd($marcadores);
    ?>
   

    @foreach ($marcadores->datos as $m )

    <h1>Nombre: {{ $m->nombre }}</h1><br>
    <h3>Apellido Paterno: {{ $m->ap }}</h3>
    <h3>Apellido Materno: {{ $m->am }}</h3>
    <h3>Dirección: {{ $m->direccion }}</h3>
        
    @endforeach
  

@endsection
	