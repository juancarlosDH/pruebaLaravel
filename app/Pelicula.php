<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
     public $table = 'movies';

     public function tituloConRating()
     {
         return $this->title . ' ' . $this->rating;
     }









}
