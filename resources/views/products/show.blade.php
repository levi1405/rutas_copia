@extends('layouts.plantilla');

@section('title','Lista de Productos')

@section('content')
    <h1>Productos</h1>
    @if ($found)
        <h3>Haz buscado: {{$found}} </h3>
        <hr>
        <h2>Producto Encontrado: {{$found}}</h2>
    @else
    <h2>Lista de Productos Disponibles</h2>
    <h3>-*-*-*-*-*-*-*-*-*-*-*-*-*-*</h3>
    <h3>----------------------------</h3>
    <h3>-*-*-*-*-*-*-*-*-*-*-*-*-*-*</h3>
    <h3>----------------------------</h3>
    <h3>-*-*-*-*-*-*-*-*-*-*-*-*-*-*</h3>
    <h3>----------------------------</h3>
    @endif
@endsection