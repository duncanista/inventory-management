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
      <?php while($transaction = $result->fetch_assoc()): ?>
            <p>
                  <?= $transaction["id"]; ?> <br>
                  <?= $transaction["item"]; ?> <br>
                  <?= $transaction["user"]; ?> <br>
                  <?= $transaction["type"]; ?> <br>
                  <?= $transaction["date_transaction"]; ?> <br>
                  <?= $transaction["quantity"]; ?>
            </p>
      <?php endwhile; ?>
      </div>
</div>