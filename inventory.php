<?php
include "head/header.php";
include "head/navbar.php";
include "admin/user_tools.php";

$logged = isLogged();
if(!$logged){
      redirect();
}

?>
<div class="container pois">
      <h1 class="light">Inventario</h1>
      <hr>
      <?php include $path . "/admin/fetch/inventory.php"; ?>

</div>
<?php
include "foot/footer.php";
?>