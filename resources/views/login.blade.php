@extends('layouts/movies')

@section('main')

 <div class="row">
    <div class="col-md-6 offset-md-3">
      <article class="nuevas" id="peliculas">
          <div class="peliculas">
            <h2>Login a Digital Movies</h2>
            <form method="post" action="">

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control <?= $invalidError ?>" id="email" placeholder="Tu Email" name="email" value="<?= $email ?>">
                  <div class="invalid-feedback"><?= $errorEmail ?></div>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" placeholder="Tu Password" name="password">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="rememberme" id="rememberme">
                    <label for="rememberme">Mantenerme logueado</label>
                </div>

                <button type="submit" class="btn btn-primary">Login</button>
              </form>

          </div>

      </article>
  </div>
</div>
  @endsection
