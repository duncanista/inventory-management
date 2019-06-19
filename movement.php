<?php
include "head/header.php";
include "head/navbar.php";
include "admin/tools/user.php";


$logged = isLogged();
if(!$logged){
      redirect();
}
$label = "Movimientos";
$movement = true;
$entry = false;
$out = false;
if(isset($_GET["action"])){
      $action = $_GET["action"];
      $movement = false;
      if($action == "entry"){
            $entry = true;
            $label = "Entradas";
      }else if($action == "out"){
            $out = true;
            $label = "Salidas";
      }
}

?>
<div class="container pois">
      <div class="pois-flex row">
            <div class="col-12 col-md-7 col-lg-9">
                  <h1 class="light"><?=$label;?></h1>
            </div>
            <?php if($entry):?>
                  <div class="d-none d-sm-block col-md-5 col-lg-3 right">
                  <a class="btn btn-dark btn-lg light" href="<?=SITE; ?>/inventory/add">Añadir nuevo producto</a>
                  </div>  
            <?php endif; ?>  
      </div>
      
      <hr>
      <?php if($movement): ?>
            <?php include $path . "/admin/fetch/movement.php"; ?>
      <?php elseif($entry): ?>
            <?php include $path . "/admin/fetch/entry.php"; ?>
      <?php elseif($out): ?>
            <?php include $path . "/admin/fetch/out.php"; ?>
      <?php endif; ?>

</div>
<script src="<?=SITE; ?>/js/functions.js"></script>
<script src="<?=SITE; ?>/js/update.js"></script>
<?php
include "foot/footer.php";
?>