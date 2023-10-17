@extends('layouts.plantilla')

@section('title')

@section('content')
    <a href="{{route('clientes.create')}}">Registrar Clientes</a>
    @foreach ($datc as $reg)
        <li>{{$reg->nombre}}</li>
    @endforeach
    {{$datc->links()}}
@endsection