<?php
include "head/header.php";
include "head/navbar.php";
include "admin/user_tools.php";

$logged = isLogged();
if(!$logged){
      redirect();
}
$label = "Movimientos";
if(isset($_GET["action"])){
      $action = $_GET["action"];
      $entry = false;
      $out = false;
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
      <h1 class="light"><?=$label ?></h1>
      <hr>

</div>
<?php
include "foot/footer.php";
?>