<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;

class PeliculasController extends Controller
{
    public function listado()
    {

        return view('index');
    }

    public function mostrarPeliculas()
    {
        $pelis = Pelicula::all();

        return view('listadoPelis', compact('pelis'));
    }

    public function buscarPorId($id)
    {
        $peli = Pelicula::find($id);

        dd($peli->tituloConRating());

        return view('detallePeli', compact('peli'));
    }





}
