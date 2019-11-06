@extends('plantilla')

@section('principal')

<h1>Listado de Generos</h1>
    <ul>
    @forelse ($generos as $genero)
        <li><a href="/genero/{{$genero['id']}}">{{ $genero['name'] }}</a></li>
    @empty
        <li>No hay datos a mostrar</li>
    @endforelse
    </ul>

@endsection
