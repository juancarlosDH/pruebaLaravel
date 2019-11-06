<?php

Route::get('/generos', function () {
    $generos = [
        ['id' => 1, 'name'=>'Comedia'],
        ['id' => 2, 'name'=>'Accion'],
        ['id' => 3, 'name'=>'Drama'],
        ['id' => 4, 'name'=>'Romance'],
    ];
    return view('generos/listado', compact('generos'));
    //return view('generos/listado')->with('generos', $generos);
});

Route::get('/genero/{id}', function ($id) {
    $generos = [
        ['id' => 1, 'name'=>'Comedia'],
        ['id' => 2, 'name'=>'Accion'],
        ['id' => 3, 'name'=>'Drama'],
        ['id' => 4, 'name'=>'Romance'],
    ];

    foreach ($generos as $genero) {
        if ($id == $genero['id']) {
            return view('generos/genero', compact('genero'));
        }
    }
});


Route::get('/', function () {
    return view('welcome');
});







/**/
