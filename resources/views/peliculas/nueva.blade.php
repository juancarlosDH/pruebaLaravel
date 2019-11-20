@extends('layouts/movies')

@section('main')

 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">

            <h2>Alta de Pelicula</h2>
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="title">Titulo</label>
                  <input type="text" class="form-control" id="title" placeholder="Nombre de la Pelicula" name="title" value="{{ old('title') }}">
                  @error('title')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="rating">Rating</label>
                  <input type="text" class="form-control" id="rating" placeholder="" name="rating" value="{{ old('rating') }}">
                  @error('rating')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="awards">Awards</label>
                  <input type="text" class="form-control" id="awards" placeholder="" name="awards" value="{{ old('awards') }}">
                  @error('awards')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="length">Duración</label>
                  <input type="text" class="form-control" id="length" placeholder="" name="length" value="{{ old('length') }}">
                  @error('length')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="release_date">Fecha de Lanzamiento</label>
                  <input type="text" class="form-control" id="release_date" placeholder="" name="release_date" value="{{ old('release_date')}}">
                  @error('release_date')
                      {{ $message }}
                  @enderror
                </div>
                <div class="form-group">
                  <label for="genre_id">Género</label>
                  <select class="form-control" name="genre_id" id="genre_id">
                      <option value="">Seleccione</option>
                @foreach ($generos as $genero)
                    <option value="{{$genero->id}}" {{ ($genero->id == old('genre_id')) ? 'selected' : '' }} >{{$genero->name}}</option>
                @endforeach
                  </select>
                  @error('genre_id')
                      {{ $message }}
                  @enderror
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
              </form>

          </div>

      </article>
  </div>
</div>
  @endsection
