<?php
include "head/header.php";
include "head/navbar.php";
include "admin/tools/user.php";

$logged = isLogged();
if($logged){
      logout();
}


?>
<div class="container pois">
      <div class="jumbotron">
            <h1 class="display-4">Cerrando sesión...</h1>
            <hr>
            <p class="lead">
                  Espera un momento, pronto serás redirigido.
            </p>
      </div>
</div>
<script>
      window.location.href = "<?=SITE;?>";
</script>
<?php
include "foot/footer.php";
?>