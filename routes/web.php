<?php

Route::get('/generos', function () {
    $generos = ['Comedia', 'Accion', 'Drama', 'Romance'];

    return view('generos/listado', compact('generos'));
    //return view('generos/listado')->with('generos', $generos);
});

Route::get('/', function () {
    return view('welcome');
});
