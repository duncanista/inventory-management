<?php
include "head/header.php";
include "head/navbar.php";
include "admin/user_tools.php";

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
      <h1 class="light"><?=$label;?></h1>
      <hr>
      <?php if($movement): ?>
            <?php include $path . "/admin/fetch/movement.php"; ?>
      <?php elseif($entry): ?>
            <?php include $path . "/admin/fetch/entry.php"; ?>
      <?php elseif($out): ?>
            <?php include $path . "/admin/fetch/out.php"; ?>
      <?php endif; ?>

</div>
<?php
include "foot/footer.php";
?>