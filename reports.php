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
      <h1 class="light">Reportes</h1>
      <hr>
      <?php include $path . "/admin/reports.php"; ?>
</div>
<?php
include "foot/footer.php";
?>