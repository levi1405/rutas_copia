@extends('layouts.plantilla')

@section('title','Editar Curso')

@section('content')
<a href="{{url('cursos')}}">Regresar</a>

<h1>Formulario para Editar un curso</h1>

{{-- //edit manda una variable data_curso con los datos a este formulario, 
    al mandar funcion update lo mando en una variable data_id --}}
<form action="{{route('cursos.update', $curso)}}" method="post">
    @csrf
    @method('put')
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="{{old('nombre',$curso->nombre)}}" class="form-control">
      @error('nombre')
      <br>
      <span>*{{$message}}</span>
      <br>
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" value="{{old('slug',$curso->slug)}}" class="form-control">
      @error('slug')
        <br>
        <span>*{{$message}}</span>
        <br>
      @enderror
    </div>
    <div class="form-group">
      <label for="descripcion">Descripcion</label>
      <textarea name="descripcion" class="form-control">{{old('descripcion',$curso->descripcion)}}</textarea>
      @error('descripcion')
      <br>
      <span>*{{$message}}</span>
      <br>
      @enderror
    </div>
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" name="categoria" value="{{old('categoria',$curso->categoria)}}" class="form-control">
      @error('categoria')
      <br>
      <span>*{{$message}}</span>
      <br>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>
@endsection