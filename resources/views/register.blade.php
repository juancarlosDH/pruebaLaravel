@extends('layouts/movies')

@section('main')

 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">

                <h2>Unirme a Digital Movies</h2>
                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" aria-describedby="nameHelp" placeholder="Tu Nombre" name="name"
                         value="{{ old('name')}}">
                      @error('name')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Tu Email" name="email"
                          value="{{ old('email')}}">
                      @error('email')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Tu Password" name="password">
                      @error('password')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation">Confirmar Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmacion del Password">
                    </div>
                    <div class="form-group">
                      <label for="avatar">Avatar</label>
                      <input type="file" class="@error('avatar') is-invalid @enderror" id="avatar" name="avatar">
                      @error('avatar')
                          <div class="invalid-feedback">{{$message}}</div>
                      @enderror
                    </div>

                    <button type="submit" class="btn btn-primary">Unirme</button>
                  </form>

          </div>

      </article>
  </div>
</div>
  @endsection
