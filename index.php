<?php
include "head/header.php";
include "head/navbar.php";

?>
<div class="container pois">
      <?php if(isset($_SESSION["user"])): ?>
            <div class="jumbotron">
                  <h1 class="display-4">Bienvenido.</h1>
                  <p class="lead">
                        Hola <span class="bold"><?=$_SESSION["user"]; ?></span>, este es el Sistema de Inventario para la Escuela de Ingeniería y Ciencias.
                  </p>
                  <hr class="my-4">
                  <p>Tecnológico de Monterrey, Campus Estado de México.</p>
                  <a class="btn btn-primary btn" href="#" role="button">Ver inventario</a>
            </div>
      <?php else: ?>
            <div class="row align-items-center">
                  <div class="col-12 col-md-6 col-lg-4 col-sm-6 mx-auto">
                        <form class="log-in">
                              <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control form-control-lg" id="email"
                                          aria-describedby="email_info" placeholder="ej. duncanista@tec.mx">
                                    <small id="email_info"></small>
                              </div>
                              <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control form-control-lg" id="password"
                                          placeholder="">
                                    <small id="password_info"></small>
                              </div>
                              <small id="login_info"></small>
                              <button type="submit" class="btn btn-dark btn-lg" id="submit_login">Iniciar Sesión</button>
                        </form>
                  </div>
            </div>
      <?php endif; ?>
</div>
<script src="<?=SITE; ?>/js/functions.js"></script>
<script src="<?=SITE; ?>/js/login.js"></script>
<?php
include "foot/footer.php";
?>