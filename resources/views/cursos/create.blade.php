@extends('layouts.plantilla')

@section('title','Formulario Cursos')

@section('content')
<a href="{{url('cursos')}}">Regresar</a>
<br><br>
<h1>Formulario para crear un curso</h1>
<form action="{{url('cursos')}}" method="post">
    @csrf
    <div class="form-group">
      <label for="nombre">Nombre</label>
      <input type="text" name="nombre" value="{{old('nombre')}}" class="form-control">
      @error('nombre')
        <br>
        <span>*{{$message}}</span>
        <br>
      @enderror
    </div>
    <div class="form-group">
      <label for="slug">Slug</label>
      <input type="text" name="slug" value="{{old('slug')}}" class="form-control">
      @error('slug')
        <br>
        <span>*{{$message}}</span>
        <br>
      @enderror
    </div>
    <div class="form-group">
      <label for="descripcion">Descripcion</label>
      <textarea name="descripcion" class="form-control">{{old('descripcion')}}</textarea>
      @error('descripcion')
        <br>
        {{-- //para que no aparezca en ingles, ejecuntamos 
        php artisan lang:publish --}}
        {{-- composer require laravel-lang/common --dev
        php artisan lang:add es
        y configurar el archivo config/app.php y cambiamos
        'locale'=> 'en' a 'es' --}}
        <span >*{{$message}}</span>
        <br>
      @enderror
    </div>
    <div class="form-group">
      <label for="categoria">Categoria</label>
      <input type="text" name="categoria" id="categoria" value="{{old('categoria')}}" class="form-control">
      @error('categoria')
      <br>
      <span>*{{$message}}</span>
      <br>
      @enderror
    </div>
    <button type="submit" class="btn btn-primary">Registrar</button>
  </form>
@endsection