@extends('layouts.plantilla')

@section('title','Cursos')

@section('content')

<a href="{{route('cursos.create')}}">Registrar Curso</a>
    @foreach ($curse as $curso)
    <table class="celda">
        <tr>
            <td>
                <li>
                    <a href="{{route('cursos.show',$curso)}}">{{$curso->nombre}}</a>
                </li>
            </td>
            <td>
                <form action="{{url('cursos/'.$curso)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit" onclick="return confirm ('¿Seguro que deseas eliminar este curso?'); false">Eliminar</button>
                </form>
            </td>
        </tr>
    </table>
    @endforeach
    {{$curse->links()}}
@endsection
