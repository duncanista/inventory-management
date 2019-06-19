<?php
include "head/header.php";
include "head/navbar.php";
include "admin/tools/user.php";

$logged = isLogged();
if(!$logged){
      redirect();
}

?>
<div class="container pois">
      <div class="pois-flex row">
            <div class="col-12 col-md-8 col-lg-9">
                  <h1 class="light">Inventario</h1>
            </div>
            <div class="d-none d-sm-block col-md-4 col-lg-3 right">
                  <button class="btn btn-dark btn-lg light">Añadir producto</button>
            </div>    
      </div>
      
      <hr>
      <?php include $path . "/admin/fetch/inventory.php"; ?>

</div>
<?php
include "foot/footer.php";
?>