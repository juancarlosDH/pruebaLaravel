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
                      <input type="text" class="form-control" id="name" aria-describedby="nameHelp" placeholder="Tu Nombre" name="name">
                    </div>
                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="text" class="form-control " id="email" aria-describedby="emailHelp" placeholder="Tu Email" name="email">
                      <div class="invalid-feedback"></div>
                    </div>
                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Tu Password" name="password">
                    </div>
                    <div class="form-group">
                      <label for="password_confirmation">Confirmar Password</label>
                      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Confirmacion del Password">
                    </div>
                    <div class="form-group">
                      <label for="avatar">Avatar</label>
                      <input type="file" class="" id="avatar" name="avatar">
                    </div>

                    <?php var_dump($errors) ?>

                    <button type="submit" class="btn btn-primary">Unirme</button>
                  </form>

          </div>

      </article>
  </div>
</div>
  @endsection
