<?php
include "head/header.php";
include "head/navbar.php";
include "admin/tools/user.php";
include "admin/tools/inventory.php";

$logged = isLogged();
if(!$logged){
      redirect();
}

$label = "Inventario";
$add = false;
$inventory = true;
if(isset($_GET["action"])){
      $action = $_GET["action"];
      $inventory = false;
      if($action == "add"){
            $add = true;
            $label = "Añadir nuevo producto";
      }
}

?>
<div class="container pois">
      <div class="pois-flex row">
            <div class="col-12 col-md-7 col-lg-9">
                  <h1 class="light"><?=$label; ?></h1>
            </div>
            <?php if(!$add): ?>
            <div class="d-none d-sm-block col-md-5 col-lg-3 right">
                  <a class="btn btn-dark btn-lg light" href="<?=SITE; ?>/inventory/add">Añadir nuevo producto</a>
            </div> 
            <?php endif; ?>   
      </div>
      
      <hr>
      
      <?php if($inventory): ?>
            <?php include $path . "/admin/fetch/inventory.php"; ?>
      <?php elseif($add): ?>
            <?php include $path . "/admin/add.php"; ?>
      <?php endif; ?>

</div>
<?php
include "foot/footer.php";
?>