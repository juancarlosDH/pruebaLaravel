<?php

Route::get('/register', function () {
    $errorEmail = '';
    $invalidError = '';

    return view('register', compact('errorEmail', 'invalidError'));
});

Route::get('/login', function () {
    $email = '';
    $errorEmail = '';
    $invalidError = '';
    return view('login', compact('errorEmail', 'email', 'invalidError'));
});

Route::get('/', 'PeliculaController@listado');

Route::get('/peliculas', 'PeliculaController@mostrarPeliculas');

Route::get('/peliculas/nueva', 'PeliculaController@nueva');

Route::post('/peliculas/nueva', 'PeliculaController@agregarPelicula');

Route::get('/peliculas/{id}', 'PeliculaController@buscarPorId');











/**/
