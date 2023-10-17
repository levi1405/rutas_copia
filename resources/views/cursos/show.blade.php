@extends('layouts.plantilla')

@section('title')
{{ $curso->nombre}}
@endsection

@section('content')
<a href="{{url('cursos')}}">Volver a cursos</a>
<br>
<br>
<h1> Bienvenido al curso {{$curso->nombre}}</h1>
<h2>Categoria: {{$curso->categoria}} </h2>
<p><strong>Descripcion: </strong>{{$curso->descripcion}}</p>

<a href="{{route('cursos.edit',$curso)}}">Editar Curso</a>
@endsection