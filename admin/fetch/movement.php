<?php
$query = "SELECT t.id, i.descript AS item, CONCAT(u.name, ' ', u.lastname) AS user, tt.type, t.date_transaction, t.quantity 
            FROM transaction AS t 
            INNER JOIN inventory AS i ON t.item = i.id
            INNER JOIN transaction_type AS tt ON t.type = tt.id
            INNER JOIN user AS u ON t.user = u.id";
$result = simpleQuery($query);
?>
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
