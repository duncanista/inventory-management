<?php
$query = "SELECT * FROM inventory";
$result = simpleQuery($query);
?>
<div class="row">
      <div class="col">
      <?php while($item = $result->fetch_assoc()): ?>
            <p>
                  Código de barras: <?= $item["id"]; ?> <br>
                  Descripción: <?= $item["descript"]; ?> <br>
                  Proveedor: <?= $item["supplier"]; ?> <br>
                  Costo: <?= $item["cost"]; ?> <br>
                  Venta: <?= $item["sell"]; ?> <br>
                  Reponer en <?= $item["reposition"]; ?> días<br>
                  Almacen: <?= $item["storage"]; ?> <br>
                  Caduca el <?= $item["caducation"]; ?> <br>
                  Unidad: <?= $item["unit"]; ?> <br>
                  Cantidad disponible: <?= $item["quantity"]; ?>

            </p>
      <?php endwhile; ?>
      </div>
</div>
