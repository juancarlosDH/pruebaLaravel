@extends('layouts/movies')

@section('main')

 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">
            <form class="" action="" method="">
                <div class="form-group">
                  <h2>{{$pelicula->title}}</h2>
                </div>
                <div class="form-group">
                  <label for="rating">Rating</label>
                  {{$pelicula->rating}}
                </div>
                <div class="form-group">
                  <label for="awards">Awards</label>
                  {{$pelicula->awards}}
                </div>
                <div class="form-group">
                  <label for="length">Duración</label>
                  {{$pelicula->length}}
                </div>
                <div class="form-group">
                  <label for="release_date">Fecha de Lanzamiento</label>
                  {{$pelicula->release_date}}
                </div>
                <div class="form-group">
                  <label for="genre_id">Género</label>
                  {{$pelicula->genre_id }}
                </div>
            </form>

            <form method="post" enctype="multipart/form-data">
                @csrf
                <a href="" class="btn btn-success">Editar</a>
                <button type="submit" class="btn btn-danger">Eliminar</button>
            </form>

          </div>

      </article>
  </div>
</div>
  @endsection
