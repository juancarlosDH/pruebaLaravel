<?php
//
// Route::get('/register', function () {
//     $errorEmail = '';
//     $invalidError = '';
//
//     return view('register', compact('errorEmail', 'invalidError'));
// });
//
// Route::get('/login', function () {
//     $email = '';
//     $errorEmail = '';
//     $invalidError = '';
//     return view('login', compact('errorEmail', 'email', 'invalidError'));
// });

Route::get('/', 'PeliculaController@listado');

Route::get('/peliculas', 'PeliculaController@mostrarPeliculas');

Route::get('/peliculas/nueva', 'PeliculaController@nueva')->middleware('is_admin');

Route::post('/peliculas/nueva', 'PeliculaController@agregarPelicula');

Route::get('/peliculas/{id}', 'PeliculaController@buscarPorId');

Auth::routes();
/*
GET  | login                  | Auth\LoginController@showLoginForm
POST | login                  | Auth\LoginController@login
POST | logout                 | Auth\LoginController@logout
POST | password/email         | Auth\ForgotPasswordController@sendResetLinkEmail
GET  | password/reset         | Auth\ForgotPasswordController@showLinkRequestForm
POST | password/reset         | Auth\ResetPasswordController@reset
GET  | password/reset/{token} | Auth\ResetPasswordController@showResetForm
GET  | register               | Auth\RegisterController@showRegistrationForm
POST | register               | Auth\RegisterController@register
*/
Route::get('/home', 'HomeController@index')->name('home');










/**/
