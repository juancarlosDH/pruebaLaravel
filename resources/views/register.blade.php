@extends('layouts/movies')

@section('main')

 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">

                <h2>Unirme a Digital Movies</h2>
                <form method="post">
                    @csrf
                    <div class="form-group">
                      <label for="name">Name</label>
                      <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Tu Nombre" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" class="form-control {{ $invalidError }}" id="email" aria-describedby="emailHelp" placeholder="Tu Email" name="email">
                      <div class="invalid-feedback">{{ $errorEmail }}</div>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Tu Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="confirmar_password">Confirmar Password</label>
                      <input type="password" class="form-control" id="confirmar_password" name="confirmar_password" placeholder="Confirmacion del Password">
                    </div>

                    <button type="submit" class="btn btn-primary">Unirme</button>
                  </form>

          </div>

      </article>
  </div>
</div>
  @endsection
