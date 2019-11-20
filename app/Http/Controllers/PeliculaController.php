<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pelicula;
use App\Genero;

class PeliculaController extends Controller
{
    public function listado()
    {
        return view('index');
    }

    public function mostrarPeliculas()
    {
        $peliculas = Pelicula::paginate(6);

        return view('peliculas/listado', compact('peliculas'));
    }

    public function buscarPorId($id)
    {
        $pelicula = Pelicula::find($id);

        return view('peliculas/detalle', compact('pelicula'));
    }

    public function nueva()
    {
        $generos = Genero::all();

        return view('peliculas/nueva', compact('generos'));
    }

    public function agregarPelicula(Request $req)
    {
        $reglas = [
            'title' => 'required|string|min:2',
            'rating' => 'numeric|min:0|max:10',
            'awards' => 'integer|min:0',
            'length' => 'integer|min:1',
            'release_date' => 'date',
            'genre_id' => 'required',
        ];

        $mensajes = [
            'title.required' => 'El Titulo es necesario',
            'title.string' => 'El titulo debe tener letras',
            'title.min' => 'El titulo al menos debe tener 2 letras',
            'numeric' => 'Debe ser un numero, con separador decimal punto',
            'integer' => 'Debe ser un numero',
            'date' => 'Debe ser una fecha',
            'required' => 'Es requerido',
            'min' => 'Al menos debe tener :min cantidad',
            'max' => 'Hasta un maximo de :max'
        ];

        $this->validate($req, $reglas, $mensajes);

        $peli = new Pelicula;

        $peli->title = $req->title;
        $peli->rating = $req->rating;
        $peli->awards = $req->awards;
        $peli->length = $req->length;
        $peli->release_date = $req->release_date;
        $peli->genre_id = $req->genre_id;

        $peli->save();

        return redirect('/peliculas');
    }







}
