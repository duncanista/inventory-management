<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
      <a class="navbar-brand mb-0 h1" href="#">POIS</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                  <li class="nav-item active">
                        <a class="nav-link" href="<?=SITE;?>">Inicio</a>
                  </li>
                  <?php if(isset($_SESSION["user"])): ?>
                        <li class="nav-item">
                              <a class="nav-link" href="<?=SITE;?>/inventory">Inventario</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="<?=SITE;?>/movement">Movimientos</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="<?=SITE;?>/movement/entry">Entradas</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="<?=SITE;?>/movement/out">Salidas</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link disabled" href="#">Conteo Cíclico</a>
                        </li>
                        <li class="nav-item">
                              <a class="nav-link" href="<?=SITE;?>/reports">Reportes</a>
                        </li>
                  <?php endif; ?>
                  
            </ul>
            <hr>
            <div class="my-2 my-lg-0">
                  <?php if(isset($_SESSION["user"])): ?>
                        <a href="<?=SITE;?>/logout">Cerrar Sesión</a>
                  <?php endif; ?>
            </div>
      </div>
</nav>