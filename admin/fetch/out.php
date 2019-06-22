<?php
$query = "SELECT t.id, i.descript AS item, CONCAT(u.name, ' ', u.lastname) AS user, tt.type, t.date_transaction, t.quantity 
            FROM transaction AS t 
            INNER JOIN inventory AS i ON t.item = i.id
            INNER JOIN transaction_type AS tt ON t.type = tt.id
            INNER JOIN user AS u ON t.user = u.id WHERE t.type = 1";
$result = simpleQuery($query);
?>
<div class="row">
      <div class="col pois-col col-md-8 col-lg-6">
            <?php include $path . "/admin/update.php"; ?>
      </div>
</div>

<h2 class="light">Últimas salidas</h2>
<hr>
<div class="row">
      <div class="col">
            <table class="table table-borderless light pois-table">
                  <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Producto</th>
                              <th scope="col">Usuario</th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Salieron</th>
                        </tr>
                  </thead>
                  <tbody>
                  <?php while($transaction = $result->fetch_assoc()): ?>
                  <tr>
                        <th scope="row"><?= $transaction["id"]; ?> </th>
                        <td> <?= $transaction["item"]; ?> </td>
                        <td> <?= $transaction["user"]; ?> </td>
                        <td> <?= $transaction["date_transaction"]; ?> </td>
                        <td> <?= $transaction["quantity"]; ?> </td>
                  </tr>
                  <?php endwhile; ?>
                  </tbody>
            </table>
      </div>
</div>