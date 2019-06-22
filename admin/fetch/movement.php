<?php
$query = "SELECT t.id, i.descript AS item, CONCAT(u.name, ' ', u.lastname) AS user, tt.type AS type, t.type AS ttype, t.date_transaction, t.quantity 
            FROM transaction AS t 
            INNER JOIN inventory AS i ON t.item = i.id
            INNER JOIN transaction_type AS tt ON t.type = tt.id
            INNER JOIN user AS u ON t.user = u.id
            ORDER BY t.date_transaction";
$result = simpleQuery($query);
?>
<div class="row">
      <div class="col">
            <table class="table table-borderless light pois-table">
                  <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Producto</th>
                              <th scope="col">Usuario</th>
                              <th scope="col">Movimiento</th>
                              <th scope="col">Fecha</th>
                              <th scope="col">Cantidad</th>
                        </tr>
                  </thead>
                  <tbody>
                  <?php while($transaction = $result->fetch_assoc()): ?>
                  <?php
                  $class = "success";
                  if($transaction["ttype"] == 1){ 
                        $class = "danger";
                  }elseif($transaction["ttype"] == 3){
                        $class = "warning";
                  }

                  ?>
                  <tr>
                        <th scope="row"><?= $transaction["id"]; ?> </th>
                        <td> <?= $transaction["item"]; ?> </td>
                        <td> <?= $transaction["user"]; ?> </td>
                        <td class="badge badge-<?=$class;?>"> <?= $transaction["type"]; ?> </td>
                        <td> <?= $transaction["date_transaction"]; ?> </td>
                        <td> <?= $transaction["quantity"]; ?> </td>
                  </tr>
                  <?php endwhile; ?>
                  </tbody>
            </table>
      </div>
</div>

            
