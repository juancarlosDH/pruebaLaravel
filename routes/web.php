<?php

Route::get('/register', function () {
    $errorEmail = '';
    $invalidError = '';

    return view('register', compact('errorEmail', 'invalidError'));
});

Route::post('/register', function () {
    var_dump($_POST);
});

Route::get('/', 'PeliculasController@listado');

Route::get('/peliculas', 'PeliculasController@mostrarPeliculas');

Route::get('/peliculas/{id}', 'PeliculasController@buscarPorId');











/**/
