@extends('plantilla')

@section('principal')

<h1>Listado de Generos</h1>

    <ul>
    @forelse ($generos as $genero)
        <li>{{ $genero }}</li>
    @empty
        <li>No hay datos a mostrar</li>
    @endforelse
    </ul>

@endsection
